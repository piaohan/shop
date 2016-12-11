<?php

namespace App\Http\Controllers\Admin\Goods;

use App\Services\GoodsClassService;
use App\Services\GoodsService;
use App\utils\CustomPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    protected static $goodsServer = null;
    protected static $goodsClassService = null;



    public function __construct(GoodsService $goodsService,GoodsClassService $goodsClassService)
    {
        self::$goodsServer = $goodsService;
        self::$goodsClassService=$goodsClassService;
    }

    /**
     * 首页
     * @param Request $request
     * @return $this
     */
    public function index(Request $request)
    {

        //1. 分页页数
        $input = $request->all();
        if(empty($input['nowPage']) || (int)$input['nowPage'] < 1){
            $page = 1;
        }else{
            $page = $input['nowPage'];
        }

        //2. 获取server端分页数据
        $result = self::$goodsServer->getGoodsOfOnePage($page , null);

        $baseUrl = 'admin/goods';
        $pageHtml = CustomPage::getSelfPageView($result['page'], $result['pageMax'], $baseUrl);
//        $class_g=DB::table('data_goods_class')->get();
        $gclass=self::$goodsClassService->getGoodsList();
//            var_dump($result['gclass']);
//            dd($result['gclass']);
//        return "" ;
        return view('admin.goods.index',['goods'=>$result['goods'],'goodsclass'=>$gclass] )->with('pageHtml',$pageHtml) ;
    }

    /**
     * 新增
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $gclass=self::$goodsClassService->getGoodsList();
        return view('admin.goods.create',['gclass'=>$gclass]);
    }


    public function store(Request $request)
    {
        self::$goodsServer->createGoods($request);
        return redirect('/admin/goods');
    }


    public function show($id)
    {$gclass=self::$goodsClassService->getGoodsClassById($id);
        $res=self::$goodsServer->getGoodsInfo($id);
    return view('/admin/goods/edit',['res'=>$res,'gclass'=>$gclass]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        self::$goodsServer->goodsUpdate($id,$request);
        return redirect('/admin/goods');
    }


    public function destroy($id)
    {
        //
    }
}
