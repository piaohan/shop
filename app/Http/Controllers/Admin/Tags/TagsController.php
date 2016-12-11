<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Services\TagsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
protected static $tags;
function __construct(TagsService $tagsService)
{
    self::$tags=$tagsService;
}

    public function index()
    {
        $res=self::$tags->getTagsList();
        return view("/admin/tags/index",['tags'=>$res]);
//        return "123";
    }


    public function create()
    {
        return view('/admin/tags/create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'tname' => 'required|unique:data_tags',
        ],[
            'tname.required' => '标签类别不能为空',
            'tname.unique'=>'该标签类型已经有了，请重新输入',
        ]);
        self::$tags->createTags($request);
        return redirect('admin/tags');
    }


    public function show($id)
    {
        $res=self::$tags->getTagsById($id);
        return view('/admin/tags/edit',['res'=>$res]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tname' => 'required|unique:data_tags',
        ],[
            'tname.required' => '标签类别不能为空',
            'tname.unique'=>'该标签类型已经有了，请重新输入',
        ]);
        self::$tags->updateTags($request, $id);
        return redirect('/admin/tags');
    }


    public function destroy($id)
    {
        self::$tags->delete($id);
        return redirect('/admin/tags');
    }
}
