<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/11
 * Time: 下午2:39
 */
namespace App\Services;

use App\Repositories\CreditRepository as creditR;
use App\Repositories\UserRepository;

use App\Repositories\CreditRepository;

class CreditService
{
 protected static $creditR;


 public function __construct(creditR $creditR)
 {
    self::$creditR=$creditR;
 }

 public function getCreditList()
 {
     $res=self::$creditR->all();
     return $res;
 }
}