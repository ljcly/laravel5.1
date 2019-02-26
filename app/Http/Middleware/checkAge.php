<?php

namespace App\Http\Middleware;

use Closure;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( $request->age <=200 )  # age 参数大于 200 时访问该路由，否则，会将用户请求重定向到 home URI 
        {
            return redirect('/home');
        }
        return $next($request);
    }
}
