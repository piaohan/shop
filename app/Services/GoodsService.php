<?php
namespace App\Services;

/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/7
 * Time: 下午5:51
 */
use App\Repositories\GoodsRepository as Goods;
use App\utils\my_utils;


class GoodsService
{
    private static $goods;
    public $num = 8;

    public function __construct(Goods $goods)
    {
        self::$goods = $goods;
    }

    /**
     *  添加一个商品
     *
     * @param $data
     * @return mixed
     */
    public function createGoods($data)
    {
        $param = [
            'gname' => $data['gname'],
            'pic' => $data['pic'],
            'describe' => $data['describe'],
            'price' => $data['price'],
            'class_id' => $data['class_id'],
//            'tag_id' => $data['tag_id'],
            'status' => 0,
            'num' => 0,
            'count' => $data['count'],
        ];
        $result = self::$goods->createGood($param);
        return $result;
    }

    /**
     * 获取商品列表
     *
     * @param $data
     * @return mixed
     */
    public function getGoodsList($data)
    {
        //  获取数据列表
        //计算起始
        $pars = [
            'start' => $data['page'] * $this->num,
            'num' => $this->num
        ];
        $goodsList = self::$goods->getGoodsList($pars);
        return $goodsList;
    }
    /**
     *  获取商品详情
     *
     * @param $id
     * @return bool
     */
    public function getGoodsInfo($id)
    {
        $goodsInfo = self::$goods->getGoodsInfo($id);
        return $goodsInfo;
    }

    public function goodsUpdate($id,$data)
    {
        $pars=[
            'class_id'=>$data['class_id'],
            'gname'=>$data['gname'],
            'pic'=>$data['pic'],
            'describe'=>$data['describe'],
            'price'=>$data['price'],
            'status'=>$data['status'],
        ];
        self::$goods->goodsUpdate($id,$pars);
    }

    /**
     * 获取一页商品信息
     *
     * @param $page
     * @param null $class_id
     * @return mixed  ['max', 'pageMax', 'page', 'data'];
     */
    public function getGoodsOfOnePage($page, $class_id = null)
    {
        //1. 统计数量
        $where = empty($class_id) ? [] : ['class_id' => $class_id];
        $max = self::$goods->countGoods($where);

        $pageNum = 3;
        $response['max'] = $max;
        $response['pageMax'] = (int)ceil($max / $pageNum);

        //2. 获取分页数据
        if ($page * $pageNum > $max) {
            $response['page'] = (int)ceil($max / $pageNum);
        } else {
            $response['page'] = (int)$page;
        }
        $offset = ($page -1) * $pageNum;
        $data = self::$goods->getGoods($where, $offset, $pageNum);
        $response['goods'] = $data;

        return $response;
    }

}