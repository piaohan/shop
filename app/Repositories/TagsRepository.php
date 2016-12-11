<?php
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/8
 * Time: 上午9:34
 */
class TagsRepository extends Repository
{


    public function model()
    {
        return 'App\Model\TagsModel';
    }



}