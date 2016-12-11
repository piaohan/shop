<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/11
 * Time: 02:41
 */

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class CreditModel extends Model
{
//表名
    protected $table = 'data_users_credit';
    //主键
    protected $primaryKey = 'id';
    //是否被自动维护时间戳
    public $timestamps = false;
    //默认主键类型为int
//    public $incrementing = false;
    //时间存储格式
//    protected $dateFormat = 'U';
    //不能批量赋值的属性
    protected $guarded = [];
}