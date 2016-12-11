<?php
namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/11
 * Time: 下午2:39
 */
use Bosnadev\Repositories\Eloquent\Repository;

class CreditRepository extends Repository{

    public function model()
    {
        return 'App\Model\CreditModel';
    }

//    public function getCreditList()
//    {
//        $res=$this->model->get();
//        return $res;
//    }
}