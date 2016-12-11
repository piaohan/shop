<?php
namespace App\utils;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/9
 * Time: 00:51
 */
class deletePage{
public static function btnDel($table,$id,$name)
{

    $res=DB::table($table)->get();
//    $users = DB::table('data_users')->get();
//
//$i=0;
    foreach ($res as $t){
        $ress[]='<a'.' href="javascript:tc('.$t->$id.','.$t->$name.')"class='.'"fa fa-trash-o md-trigger btn btn-danger btn-sm "'.'></a>';
    }


return $ress;

 }
}