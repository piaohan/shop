<?php
namespace App\Services;

use App\Repositories\CreditRepository;
use App\Repositories\UsersRepository;
use App\utils\my_utils;

class UsersService
{
    protected static $users;
    protected static $credit;

    function __construct(UsersRepository $usersRepository,CreditRepository $creditRepository)
    {
        self::$users = $usersRepository;
        self::$credit=$creditRepository;
    }

    public function getUsersList()
    {
        $result = self::$users->all();
        return $result;
    }

    public function createUser($request)
    {
        $str = my_utils::getUuid();
        $username = $request['username'];
        $password = md5($request['password']);
        $utel = $request['tel'];
        $uemail = $request['email'];
        $updated_at = time();
        $created_at = time();
        $state = 0;
        //用户表
        $aUser = array(
            'uuid' => $str,
            'username' => $username,
            'password' => $password,
            'tel' => $utel,
            'email' => $uemail,
            'updated_at' => $updated_at,
            'created_at' => $created_at,
            'state' => $state,
        );
        //积分表
        $aCredit = array(
            'uuid' => $str,
            'credit' => 0,
            'sum_credit' => 0,
        );
        self::$users->createUser($aUser);
        self::$credit->create($aCredit);
    }

    public function getUsersById($id)
    {
        $res=self::$users->find($id);
        return $res;
    }

    public function usersUpdate($request, $id)
    {
        $username = $request['username'];
        $password = md5($request['password']);
        $utell = $request['tel'];
        $uemail = $request['email'];
//        $updated_at = time();
        $state=$request['state'];
        $aUser = array(
            'username' => $username,
            'password' => $password,
            'tel' => $utell,
            'email' => $uemail,
            'state'=>$state,
        );
        self::$users->update($aUser,$id,'uuid');
    }


}