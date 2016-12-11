<?php
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/8
 * Time: 上午9:34
 */
class GoodsClassRepository extends Repository
{


    public function model()
    {
        return 'App\Model\GoodsClassModel';
    }


    /**
     * 获取商品类型集合
     * @return mixed
     */
    public function getGoodsClassList()
    {
        $result = $this->model->get();
        return $result;
    }

    /**
     * 删除商品类型
     * @param $id
     * @return bool
     */
    public function delete($id)
    {

        $goodsclass = $this->model->find($id);

        if(empty($goodsclass)) return false;

        $result = $goodsclass->delete();

        return $result;
    }


    /**
     * 查询单个商品类型
     * @param $id
     * @return mixed
     */
    public function getGoodsClassById($id)
    {
        $res=$this->model->where('id',$id)->first();
        return $res;
    }

    /**
     * 修改商品类型
     * @param $id
     * @param $pars
     * @return mixed
     */
    public function goodsClassUpdate($id,$pars)
    {
        $res=$this->model->where('id',$id)->update($pars);
        return $res;
    }

    /**
     * 新增商品类型
     * @param $pars
     * @return mixed
     */
    public function createGoodsClass ($pars)
    {
        $res=$this->model->create($pars);
        return $res;
    }
}