<?php

namespace App\Http\Controllers\Controller;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPost;

class PostController extends Controller
{
    
    /**
     * [create 创建---创建新博客文章的表单]
     * @return [type] [description]
     */
    public function create(Request $request)
    {
    	return view('Admin.Post.create');
    }

    /**
     * [store 新的博客文章保存到数据库]
     * @return [type] [description]
     */
    public function store_ori(Request  $request)
    {
    	# 1、引用 StoreBlogPost Request验证
    	
    	# 在第一次验证失败后停止 ----bail
    	/*$this->validate($request, [
		    'title' => 'bail|required|unique:posts|max:255',
		    'body' => 'required',
		]);*/
    	# 嵌套属性的注解 「点」 语法来指定这些参数。
    	/*$this->validate($request,[
    		'title' => 'required|unique:posts|max:255',
    		'author.name' => 'required',
    		'author.description' => 'required',
    	]);*/
    	# 有关可选字段的注意事项
    	/*$this->validate($request,[
    		'title' => 'required|unique:posts|max:255',
    		'body' => 'required',
    		'publish_at' => 'nullable|date',
    	]);*/
    	
        # 2、手动创建Validator验证
    	$validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        # 自动重定向
        Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ])->validate();

        // 保存文章
        
        
    }

    /**
     * [store description]
     * @param  StoreBlogPost $request [description]
     * @return [type]                 [description]
     */
    // public function store(StoreBlogPost $request)
    // {

    // }




}
