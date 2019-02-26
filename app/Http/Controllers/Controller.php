<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Contracts\Validation\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * [formatValidationErrors 闪存上自定义验证的错误格式]
     * @param  Validator $validator [description]
     * @return [type]               [description]
     */
    protected function formatValidationErrors(Validator $validator)
    {
    	return $validator->errors()->all();
    }
    

}
