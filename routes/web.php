<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	
    return view('welcome');
});

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);


# 2019-01-20  开始
// Route::match(['get', 'post'], '/', function () {
//     //
// });

// Route::any('foo', function () {
//     //
// });

# 调用中间件  ---单个
// Route::get('admin/profile', function(){

// })->middleware('before');

# 调用中间件  ---多个
// Route::get('',function(){

// })->middleware(['before','after']);

# 调用中间件 ---完整类名指定中间件
// Route::get('admin/profile',function(){

// })->middleware(checkAge::class);

# 调用中间件 ---中间件参数
// Route::put('post/{id}',function(){

// })->middleware('role:editor');


Route::get('user/{id}/{group}','Controller\User@show');
Route::get('update/{id}','Controller\User@update');

Route::get('welcome','Controller\User@welcome');
Route::get('profile','Controller\User@profile');
Route::get('test','Controller\User@test');


// HTTP 基础认证
// Route::get('test',function()
// {
// 	return view('Controller\User@test');
// })->middleware('auth.basic');

Route::post('login','Controller\Uer@login');

// Route::get('test',function(){
// 	if (App::isLocale('en')) {
//         echo 'en';
       
//     }
//     else {
//     	echo 'zn_ch';
//     	 return view('Admin/Post/test',['name'=>122]);
//     }

// });

// Route::get('test', function () {
//     return view('Admin/Post/test',['name'=>122]);
// });



Route::resource('photos', 'PhotoController');
# 通过路由闭包获取请求
Route::get('/', function (Request $request) {
   	
});


# 2019-01-20 结束
# 2019-01-23 开始

Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@store');
Route::post('comment/{comment}');



# 2019-01-23 结束


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
