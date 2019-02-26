<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class UpdatePasswordsController extends Controller
{
    

    public function update( Request $request )
    {
    	$request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();

        $hashed = Hash::make('password', [
		    'rounds' => 12
		]);
		# 根据哈希值验证密码
		if (Hash::check('plain-text', $hashedPassword)) {
		    // 密码对比...
		}
		# 检查密码是否需要重新加密
		if( Hash::needsRehash($hashed) )
		{
			$hashed = Hash::make('plain-text');
		}
    }	
}
