<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function index()
    {
        return view('admin/login');
    }


    public function create()
    {
        //return view('sda');return view('sda');
        return 'sda';
    }


    public function store(Request $request)
    {
        //执行登陆判断
        $username = $request->input("username");
        $password = md5($request->input("password"));
        //获取对应用户信息
        $user = DB::table("data_users")->where("username",$username)->first();
//dd($session);
        if(!empty($user)){
            //判断密码
            if($password==$user->password){
                //存储session跳转页面
                session()->set("adminuser",$user);
                return redirect('admin/show');
                //echo "测试成功!";
            }
        }
        return back()->with("msg","账号或密码错误！请重新输入");
//        return view('admin/login')->with("msg","账号或密码错误！请重新输入");
    }


    public function show($id)
    {
        //
        return redirect('admin');

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
