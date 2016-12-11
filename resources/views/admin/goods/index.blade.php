@extends('admin.layouts.master')
@section('content')
        <!-- 表单验证 -->
{{--@if (count($errors) > 0)--}}
    {{--<div class="alert alert-danger">--}}
        {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
                {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--@endif--}}
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <div class="col-sm-2">
                    <h3 class="panel-title">商品列表</h3>
                </div>
                <div class="col-sm-2">
                    <select class="form-control">
                        <option>商品类别</option>
                        @foreach($goodsclass as $gclass)
                            <option value="{{$gclass['id']}}">{{$gclass['cname']}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-danger">查询</button>
                </div>
                <div class="col-sm-2">
                    <a href="/admin/goods/create" class="btn btn-success">添加</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>商品类别</th>
                                <th>商品名称</th>
                                <th>商品图片</th>
                                <th>价格</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $goods as $good)
                                <tr>
                                    <td>{{ $good['id'] }}</td>
                                    <td>{{ $good['class_id'] }}</td>
                                    <td>{{ $good['gname'] }}</td>
                                    <td><img src="{{ env('ALIOSS_ACCESS').'/'.$good['pic'] }}" width="100"></td>
                                    <td>{{ $good['price'] }}</td>
                                    <td>
                                        @if($good['status'] == 0)
                                            未上架
                                            @elseif($good['status'] == 1)
                                            上架
                                        @elseif($good['status'] == 2)
                                            下架
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/admin/goods/{{ $good['id'] }}" class="fa fa-pencil btn-success btn-sm"></a>
                                        {{--<a href="/goods/{{ $good['id'] }}" class="btn-primary btn">修改</a>--}}
                                        {{--<a href="" class="btn-warning btn">下架</a>--}}
                                        {{--<a href="" class="btn-danger btn">删除</a>--}}
                                        <a href="javascript:;" class="fa fa-trash-o md-trigger btn btn-danger btn-sm" data-modal="modal-{{$good['id']}}"></a>
                                    </td>
                                    <div class="md-modal md-effect-4" id="modal-{{$good['id']}}">
                                        <div class="md-content">

                                            <h3>商品类型删除</h3>
                                            <div>
                                                <form action="/admin/goodsclass/{{$good['id']}}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <p class="text-center text-danger">你确认删除<strong class="text-info">{{$good['gname']}}</strong>这个商品类型吗？</p>
                                                    <br>
                                                    <button class="col-md-3 btn-success btn btn-danger">确认</button>
                                                    <p class="col-md-6"></p>
                                                    <a class="col-md-3 md-close btn btn-primary">关闭</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12">
                        {!! $pageHtml !!}
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- col -->

</div>
<!-- 表单验证结束-->
@endsection
@section('script')
        <!--alertInfo JS-->
<script src="{{asset('/js/classie.js')}}"></script>
<script src="{{asset('/js/modaleffects.js')}}"></script>
<!--alertInfo end-->
<script src="{{asset('/js/jquery.validate.min.js')}}"></script>

@endsection