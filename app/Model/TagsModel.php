<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/7
 * Time: 下午2:37
 */
class TagsModel extends Model
{
    //表名
    protected $table = 'data_tags';
    //主键
    protected $primaryKey = 'id';
    //默认主键类型为int
    public $incrementing = false;
    //是否被自动维护时间戳
    public $timestamps = false;
    //时间存储格式
//    protected $dateFormat = 'U';
    //不能批量赋值的属性
    protected $guarded = [];
}