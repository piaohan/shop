<?php

namespace App\Http\Controllers\Admin\Goods;

use App\Services\GoodsClassService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsClassController extends Controller
{

    public static $goodClassService;

    public function __construct(GoodsClassService $goodsClassService)
    {
        self::$goodClassService = $goodsClassService;
    }

    public function index()
    {
        $goodsClass = self::$goodClassService->getGoodsList();
        return view('admin.goodsclass.index',['goodsClass'=>$goodsClass]);
    }

    public function create()
    {

        return view('admin.goodsclass.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cname' => 'required|unique:data_goods_class',
        ],[
            'cname.required' => '商品类别不能为空',
            'cname.unique'=>'该商品类型已经有了，请重新输入',
        ]);
        self::$goodClassService->createGoodsClass($request);
        return redirect('/admin/goodsclass');
    }


    public function show($id)
    {

        $res=self::$goodClassService->getGoodsClassById($id);
        return view('/admin/goodsclass/edit',['res'=>$res]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cname' => 'required|unique:data_goods_class',
        ],[
            'cname.required' => '商品类别不能为空',
            'cname.unique'=>'该商品类型已经有了，请重新输入',
        ]);
        self::$goodClassService->goodsClassUpdate($id,$request);
        return redirect('/admin/goodsclass');

    }

    public function destroy($id)
    {
        self::$goodClassService->delete($id);
        return redirect('/admin/goodsclass');
    }
//    /**
//     * 获取已定义验证规则的错误消息。
//     *
//     * @return array
//     */
//    public function messages()
//    {
//        return
//    }
}
