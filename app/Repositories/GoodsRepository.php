<?php
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;


/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/7
 * Time: 下午2:28
 */

class  GoodsRepository extends Repository
{

    public function model()
    {
        return 'App\Model\GoodsModel';
    }

    /**
     * 添加商品
     * @param $param
     * @return mixed
     */
    public function createGood($param)
    {
        $result = $this->model->create($param);
        return $result;
    }
    /**
     * 获取商品详情
     *
     * @param $id
     * @return bool
     */
    public function getGoodsInfo($id)
    {
        if (empty($id)) return false;
        $goodsInfo = $this->model->where('id',$id)->first();
        return $goodsInfo;
    }

    /**
     * 获取商品列表
     *
     * @param $where
     * @param $skip
     * @param $take
     * @return mixed
     */
    public function getGoods($where, $skip, $take)
    {
        $result = $this->model->where($where)->skip($skip)->take($take)->get()->toArray();

        return $result;
    }
    /**
     *  获取商品总数
     *
     * @param $where
     * @return mixed
     */
    public function countGoods($where)
    {
        $result = $this->model->where($where)->count();

        return $result;
    }
    /**
     * 获取商品详情
     *
     * @param $id
     * @return array
     */
    public function findGood($id)
    {
        $result = $this->model->find($id);

        if(empty($result)){
            return [];
        }else{
            return $result->toArray();
        }
    }

    public function getWhereGoods($where)
    {
        $result = $this->model->where($where)->get();

        if(empty($result)){
            return [];
        }else{
            return $result->toArray();
        }
    }
    /**
     * 修改商品
     * @param $id
     * @param $update
     * @return bool
     */
    public function goodsUpdate($id,$pars)
    {
     $good =$this->model->find($id);
     if (empty($good)){return false;}
     $result=$good->update($pars);
     return $result;
    }
    /**
     * 获取商品列表
     *
     * @param $param
     * @return mixed
     */
    public function getGoodsList($param)
    {
//        $goodsList = $this->model->where(['status'=>1])->skip($param['start'])->take($param['num'])->get();
        $goodsList = $this->model->skip($param['start'])->take($param['num'])->get();
        return $goodsList;
    }
}