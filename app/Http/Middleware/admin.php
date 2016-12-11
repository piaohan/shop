<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/11
 * Time: 上午4:15
 */
namespace App\Http\Middleware;

use Closure;

class Admin
{

    public function handle($request, Closure $next)
    {
        //判断是否没有登录
        if(!$request->session()->has('adminuser')) {
            return redirect("/login");
        }

        return $next($request);
    }
}
