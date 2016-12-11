<?php
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/8
 * Time: 上午9:34
 */
class MoneyRepository extends Repository
{


    public function model()
    {
        return 'App\Model\MoneyModel';
    }
    /**
     * 添加赞助商信息
     * @param $param
     * @return mixed
     */
    public function createMoney($param)
    {
        $result = $this->model->create($param);
        return $result;
    }

    /**
     * 获取赞助商信息
     * @return mixed
     */
    public function getMoneyInfo()
    {
        $result = $this->model->get();
        return $result;
    }

    /**
     * 删除赞助商信息
     * @param $id
     * @return bool
     */
    public function delete($id)
    {

        $money = $this->model->find($id);

        if(empty($money)) return false;

        $result = $money->delete();

        return $result;
    }

    /**
     * 查询单个赞助商信息
     * @param $id
     * @return mixed
     */
    public function findByIdMoeny($id)
    {
        $res=$this->model->where('id',$id)->first();
        return $res;
    }

    /**
     * 修改赞助商信息
     * @param $id
     * @param $pars
     * @return mixed
     */
    public function GoodsClassUpdate($id,$pars)
    {
        $res=$this->model->where('id',$id)->update($pars);
        return $res;
    }

    public function updateMoney($pars,$id)
    {
        $this->model->where('id',$id)->update($pars);

    }


}