<?php

namespace App\Http\Controllers\Admin\Credit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Services\CreditService;

class CreditController extends Controller
{
    protected static $credit;

    public function __construct(CreditService $creditService )
    {
        self::$credit=$creditService;
    }

    public function index()
    {
        $res=DB::table('data_users')
            ->join('data_users_credit','data_users.uuid', '=','data_users_credit.uuid')
            ->select('data_users.*','data_users_credit.credit','data_users_credit.sum_credit')
            ->get();
//        dd($uC);
//        $res=self::$credit->getCreditList();
        return view('admin.credit.index',['uC'=>$res,]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $uC=DB::table('data_users')
            ->join('data_users_credit','data_users.uuid', '=','data_users_credit.uuid')
            ->select('data_users.*','data_users_credit.credit','data_users_credit.sum_credit')
            ->where('data_users.uuid','=',$id)
            ->first();
        return view('admin.credit.edit',['uC'=>$uC,]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $credit_new=$request->input('credit');

        $credit_old=DB::table('data_users_credit')
            ->where('uuid',$id)
            ->first();
        $credit_old_c=$credit_old->credit;
        $credit_old_sum=$credit_old->sum_credit;


//如果修改的积分大于目前所剩积分，那么总积分增加 所增加的积分数量
        if($credit_new>$credit_old_c){
            $credit_old_sum=$credit_old_sum+$credit_new;
        }
        $parm=[
            'credit'=>$credit_new,
            'sum_credit'=>$credit_old_sum,
        ];

        DB::table('data_users_credit')
            ->where('uuid', $id)
            ->update($parm);
        return redirect('/admin/credit');
    }


    public function destroy($id)
    {

        $parm=[
            'credit'=>0,
            'sum_credit'=>0,
        ];
        DB::table('data_users_credit')
            ->where('uuid',$id)
            ->update($parm);
        return redirect('/admin/credit');
    }
}