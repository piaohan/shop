<?php
namespace App\Services;

use App\Repositories\GoodsClassRepository as gCR;

class GoodsClassService
{
    protected static $gcr;

    function __construct(gCR $gcr)
    {
        self::$gcr = $gcr;
    }

    /**
//     *  添加一个商品类别
//     * @param $data
//     * @return mixed
//     */
    public function createGoodsClass($data)
    {
        $param = [
            'cname' => $data['cname'],
        ];
        $result = self::$gcr->createGoodsClass($param);
        return $result;
    }

    /**
     * 获取所有的商品类型
     * @return mixed
     */
    public function getGoodsList()
    {
        $result=self::$gcr->getGoodsClassList();
        return $result;
    }

    /**
     * 删除商品类型
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result=self::$gcr->delete($id);
        return $result;
    }


    /**
     * 获取商品类型
     * @param $id
     * @return mixed
     */
    public function getGoodsClassById($id)
    {
        $res=self::$gcr->getGoodsClassById($id);
        return $res;
    }


    /**
     * 修改商品类型
     * @param $id
     * @param $data
     * @return mixed
     */
    public function goodsClassUpdate($id,$data)
    {
        $pars = array(
            'cname' => $data['cname'],
        );
       $res=self::$gcr->GoodsClassUpdate($id,$pars);
       return $res;
    }

}