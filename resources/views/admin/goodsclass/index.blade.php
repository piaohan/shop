@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <div class="col-sm-2">
                    <h3 class="panel-title">商品列表</h3>
                </div>
                <div class="col-sm-2">
                    <a href="/admin/goodsclass/create" class="btn btn-success">添加</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <table class="table table-striped hover">
                            <thead>
                            <tr>
                                <th class="col-md-3">id</th>
                                <th class="col-md-3">商品类别</th>
                                <th class="col-md-3">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $goodsClass as $goodclass)
                                <tr>
                                    <td>{{ $goodclass['id'] }}</td>
                                    <td>{{ $goodclass['cname'] }}</td>
                                    <td>
                                        <a href="/admin/goodsclass/{{$goodclass['id']}}" class="fa fa-pencil btn-success btn-sm"></a>
                                        <a href="javascript:;" class="fa fa-trash-o md-trigger btn btn-danger btn-sm" data-modal="modal-{{$goodclass['id']}}"></a>
                                    </td>
                                </tr>
                                <div class="md-modal md-effect-4" id="modal-{{$goodclass['id']}}">
                                    <div class="md-content">

                                        <h3>商品类型删除</h3>
                                        <div>
                                            <form action="/admin/goodsclass/{{$goodclass['id']}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <p class="text-center text-danger">你确认删除<strong class="text-info">{{$goodclass['cname']}}</strong>这个商品类型吗？</p>
                                                <br>
                                                <button class="col-md-3 btn-success btn btn-danger">确认</button>
                                                <p class="col-md-6"></p>
                                                <a class="col-md-3 md-close btn btn-primary">关闭</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('script')
        <!--alertInfo JS-->
<script src="{{asset('/js/classie.js')}}"></script>
<script src="{{asset('/js/modaleffects.js')}}"></script>
<!--alertInfo end-->
<script src="{{asset('/js/jquery.validate.min.js')}}"></script>

@endsection