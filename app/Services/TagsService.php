<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2016/12/11
 * Time: 下午2:39
 */
namespace App\Services;

use App\Repositories\TagsRepository;

class TagsService
{
 protected static $tags;


 public function __construct(TagsRepository $tagsRepository)
 {
    self::$tags=$tagsRepository;
 }

 public function getTagsList()
 {
     $res=self::$tags->all();
     return $res;
 }

    public function createTags($request)
    {

        $pars=[
            'tname'=>$request['tname'],
        ];
        self::$tags->create($pars);

    }

    public function getTagsById($id)
    {
        $res=self::$tags->find($id);
        return $res;
    }

    public function updateTags($request, $id)
    {
        $pars=[
            'tname'=>$request['tname'],
        ];
        $res=self::$tags->update($pars,$id);
    }

    public function delete($id)
    {
        self::$tags->delete($id);
    }


}