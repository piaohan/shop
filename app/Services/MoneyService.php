<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/11
 * Time: 02:41
 */
namespace App\Services;

use App\Repositories\MoneyRepository;

class MoneyService
{
    private static $money;

    public function __construct(MoneyRepository $moneyRepository)
    {
        self::$money = $moneyRepository;
    }

    /**
     *  添加一个赞助信息
     * @param $data
     * @return mixed
     */
    public function createMoneyMan($data)
    {
        $param = [
            'moneyman' => $data['moneyman'],
            'money' => $data['money'],
            'mtel' => $data['mtel'],
        ];
        $result = self::$money->createMoney($param);
        return $result;
    }

    /**
     * 获取赞助商信息
     * @return mixed
     */
    public function getMoneyInfo()
    {
        $res = self::$money->getMoneyInfo();
        return $res;
    }

    /**
     * 获取一个赞助商信息
     * @param $id
     * @return mixed
     */
    public function findByIdMoeny($id)
    {
        $res = self::$money->findByIdMoeny($id);
        return $res;
    }

    /**
     * 删除一个赞助商信息
     * @param $id
     */
    public function delete($id)
    {
        self::$money->delete($id);
    }

    /**
     * 修改赞助商资料
     * @param $data
     * @param $id
     */
    public function updateMoney($data, $id)
    {
        $moneyman=$data['moneyman'];
        $money=$data['money'];
        $mtel=$data['mtel'];
        $pars=[
            'moneyman'=>$moneyman,
            'money'=>$money,
            'mtel'=>$mtel,
        ];

        self::$money->updateMoney($pars,$id);
    }

}