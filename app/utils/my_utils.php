<?php
/**
 * 我的工具包.
 * User: my
 * Date: 2016/12/6
 * Time: 下午10:03
 */
namespace App\utils;


use Ramsey\Uuid\Uuid;

class my_utils
{
    /**
     * 返回uuid
     * @return string
     */
    public static function getUuid($type = 2)
    {
        switch ($type) {
            //根据时间戳生成
            case 0:
                $uuid = Uuid::uuid1();
                break;
            //根据加入传入的字符使用MD5加密生成
            case 1:
                $uuid = Uuid::uuid3(Uuid::NAMESPACE_DNS, 'my');
                break;
            //随机生成uuid
            case 2:
                $uuid = Uuid::uuid4();
                break;
            //根据加入传入的字符使用SHA1加密生成
            case 3:
                $uuid = Uuid::uuid5(Uuid::NAMESPACE_DNS, 'my');
                break;
            default;
                break;
        }
        return $uuid->getHex();
    }

}