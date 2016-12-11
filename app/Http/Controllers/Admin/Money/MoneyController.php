<?php

namespace App\Http\Controllers\Admin\Money;

use App\Services\MoneyService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoneyController extends Controller
{
    private static $money;

    public function __construct(MoneyService $moneyService)
    {
        self::$money=$moneyService;
    }

    public function index()
    {
        $res=self::$money->getMoneyInfo();
        return view('/admin/money/index',['res'=>$res]);
    }


    public function create()
    {
        return view('admin/money/create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'moneyman' => 'required',
            'money' => 'required|numeric',
            'mtel' => 'required|regex:/^1[34578][0-9]{9}$/',
        ],[
            'moneyman.required' => '赞助商不能为空',
            'money.required' => '赞助金额不能为空',
            'money.numeric' => '赞助金额必须为数字',
            'mtel.required' => '赞助商联系电话不能为空',
        ]);
        self::$money->createMoneyMan($request);
        return redirect('admin/money');
    }

    public function show($id)
    {
       $res=self::$money->findByIdMoeny($id);
       return view('/admin/money/edit',['re'=>$res]);
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'moneyman' => 'required',
            'money' => 'required|numeric',
            'mtel' => 'required|regex:/^1[34578][0-9]{9}$/',
//            'mtel' =>'regex:/^1[34578][0-9]{9}$/',
        ],[
            'moneyman.required' => '赞助商不能为空',
            'money.required' => '赞助金额不能为空',
            'money.numeric' => '赞助金额必须为数字',
            'mtel.required' => '赞助商联系电话不能为空',
            'mtel.regex' => '请输入正确的电话号码',
        ]);
        self::$money->updateMoney($request,$id);
        return redirect('/admin/money');
    }


    public function destroy($id)
    {
        self::$money->delete($id);
        return redirect('/admin/money');
    }
}
