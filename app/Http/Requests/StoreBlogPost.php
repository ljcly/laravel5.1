<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
{
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'  => 'required|unique:posts|max:255',
            'body'   => 'requierd',
        ];
    }

     /**
     * [withValidator 添加表单请求后钩子]
     * @param  [type] $validator [description]
     * @return [type]            [description]
     */
    public function withValidator($validator)
    {
        $validator->after(function($validator){
            if($this->somethingElseIsInvalid()){
                $validator->errors()->add('field','something is wrong with this field!');
            }
        });
    }

    /**
     * Determine if the user is authorized to make this request.
     * 判断用户是否有权限做出此请求。
     *
     * @return bool
     */
    public function authorize()
    {
        $comment = Comment::find($this->route('Comment'));
        return $comment  && $this->user()->can('update',$comment);
    }

    /**
     * [messages messages]
     * @return [type] [description]
     */
    public function messages()
    {
        return [

            'title.required' => 'A title is required',
            'body.required'  => 'A message is required',

        ];
    }
    
}
