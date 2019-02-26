<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{

   public function email()
   {

        echo 'hello word';
   }

   /**
    * [storeSecret 存储用户保密信息]
    * @return [type] [存储用户保密信息]
    */
   public function storeSecret()
   {

   		$user = User::findOrFail($id);
   		$user->fill([
            'secret' => encrypt($request->secret)
        ])->save();

        $encrypted = Crypt::encryptString('Hello world.');
        $decrypted = Crypt::decryptString($encrypted);

        try {
		    $decrypted = decrypt($decrypted);
		} catch (DecryptException $e) {
		    
		}
		
   }
   
}
