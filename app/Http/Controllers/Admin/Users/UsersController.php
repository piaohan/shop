<?php
namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\UsersService;

/**
 * Created by PhpStorm.
 * Users: my
 * Date: 2016/12/6
 * Time: 上午11:51
 */
class UsersController extends Controller
{
    public static $users;

    public function __construct(UsersService $usersService)
    {
        self::$users = $usersService;
    }

    public function index()
    {
        $res = self::$users->getUsersList();
        return view('admin.users.index', ['users' => $res,]);
    }

    public function create()
    {
        return view('admin.users.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:data_users',
            'password' => 'required|min:6',
            'tel' => 'required|regex:/^1[34578][0-9]{9}$/',
//            'tel' => 'regex:/^1[34578][0-9]{9}$/',
            'email' =>'required|email|unique:data_users',
        ],[
            'username.required' => '用户名称不能为空',
            'username.unique' => '当前用户名称已经存在',
            'password.required' => '用户密码不能为空',
            'password.min' => '用户密码必须大于或者等于6位',
            'tel.required' => '用户联系电话不能为空',
            'tel.unique' => '当前用户联系电话已经存在',
            'tel.regex' => '用户联系手机号码填写不正确',
            'email.required' => '邮箱地址不能为空',
            'email.email' => '请输入正确的邮箱地址',
            'email.unique' => '当前邮箱已经存在',
        ]);
        self::$users->createUser($request);
        return redirect('/admin/users');

    }

//根据id显示
    public function show($id)
    {
        $user = self::$users->getUsersById($id);
        return view('admin.users.edit', ['user' => $user]);
    }

//
    public function edit($id)
    {
        return "users-edit";
    }

//更新
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required|unique:data_users',
            'password' => 'required|min:6',
            'tel' => 'required|regex:/^1[34578][0-9]{9}$/',
//            'tel' => 'regex:/^1[34578][0-9]{9}$/',
            'email' =>'required|email|unique:data_users',
        ],[
            'username.required' => '用户名称不能为空',
            'username.unique' => '当前用户名称已经存在',
            'password.required' => '用户密码不能为空',
            'password.min' => '用户密码必须大于或者等于6位',
            'tel.required' => '用户联系电话不能为空',
            'tel.unique' => '当前用户联系电话已经存在',
            'tel.regex' => '用户联系手机号码填写不正确',
            'email.required' => '邮箱地址不能为空',
            'email.email' => '请输入正确的邮箱地址',
            'email.unique' => '当前邮箱已经存在',
        ]);
        self::$users->usersUpdate($request, $id);
        return redirect('/admin/users');
    }

//删除
    public function destroy($id)
    {
        DB::table('data_users')->where('uuid', $id)->delete();
        return redirect('/admin/users');
    }
}