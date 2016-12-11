<?php
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/8
 * Time: 上午9:34
 */
class UsersRepository extends Repository
{


    public function model()
    {
        return 'App\Model\UsersModel';
    }


    /**
     * 获取用户集合
     * @return mixed
     */
    public function getUsersList()
    {
        $result = $this->model->get();
        return $result;
    }

    public function createUser($aUser)
    {
        $this->model->create($aUser);
    }

    public function getUsersById($id)
    {
        $res=$this->model->where('uuid',$id)->first();
        return $res;
    }

    public function delete($id)
    {

        $res = $this->model->find($id);

        if(empty($res)) return false;

        $result = $res->delete();

        return $result;
    }

}