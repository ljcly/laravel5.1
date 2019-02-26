<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class User extends Controller
{
    
    public function __construct()
    {

    	// $this->middleware('auth');

    	// $this->middleware('before')->only('index');

    	// $this->middleware('subscribed')->expcept('store');

    }

    public function test()
    {
        
        return view('Admin.Post.test',[
            'name'    => '<script>alert(1111)</script>Samantha',
            'title'   => 'laravel',
            'records' => ['你好呀','你好呀'],
            'testTime'=> time()
        ]);
    }

    public function monthlyRevenue()
    {
        return 'hello monthlyRevenue';
    }
    /**
     * 
     */
    public function show(Request $request,$id)
    {
        
    	# path
    	$uri = $request->path();
    	# 获取完整的URl
    	$url     = $request->url();
    	echo $url."<br/>";
    	# fullUrl
    	$fullUrl = $request->fullUrl();
    	echo $fullUrl."<br/>";
    	# method
    	$method  = $request->method();
    	echo $method."<br/>";

    	# 判断请求方法
    	if($request->isMethod('post'))
    	{
    		echo 'this url method is post'."<br/>";
    	}
    	else {
    		echo 'this url method is get'."<br/>";
    	}

    	# is 方法可以验证收到的请求路径和指定规则是否匹配。使用这个方法的时候你也可以传递一个 * 字符作为通配符
    	
    	if($request->is('admin/*'))
    	{
    		echo 'YES'.'<br/>';
    	}
    	else {
    		echo 'NO'.'<br/>';
    	}
    	# 获取所有输入数据
    	$all = request()->all();
    	laravel_gshdy($all);
    	echo $uri;die;  
    	// return view('user.profile',['user'=>User::findOrFail($id)]);
    }
    /**
     * [update 更新指定的用户]
     * @param  Request $request [description]
     * @param  [type]  $id      [description]
     * @return [type]           [description]
     */
    public function update(Request $request,$id)
    {

    }

    /**
     * [welcome description]
     * @return [type] [description]
     */
    public function welcome(Request $request)
    {

        return view('welcome')->with('name','Victoria');
        // return view('welcome',['name'=>'laravel测试']);
    }  

    /**
     * [profile ]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function profile(Request $request)
    {
        return view('profile')->with('name',time());
    } 

    /**
     * [index index]
     * @return [type] [description]
     */
    public function index()
    {

    }

    /**
     * [store store]
     * @return [type] [description]
     */
    public function store()
    {

    }

    public function login()
    {
        echo 123;die;
    }
}
