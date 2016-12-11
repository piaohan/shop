@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <div class="col-sm-2">
                    <h3 class="panel-title">标签列表</h3>
                </div>
                <div class="col-sm-2">
                    <a href="/admin/tags/create" class="btn btn-success">添加</a>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <table class="table table-striped hover">
                            <thead>
                            <tr>
                                <th class="col-md-3">id</th>
                                <th class="col-md-3">标签名</th>
                                <th class="col-md-3">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->tname }}</td>
                                    <td>
                                        <a href="/admin/tags/{{$tag->id}}" class="fa fa-pencil btn-success btn-sm"></a>
                                        <a href="javascript:;" class="fa fa-trash-o md-trigger btn btn-danger btn-sm" data-modal="modal-{{$tag->id}}"></a>
                                    </td>
                                </tr>
                                <div class="md-modal md-effect-4" id="modal-{{$tag->id}}">
                                    <div class="md-content">

                                        <h3>商品类型删除</h3>
                                        <div>
                                            <form action="/admin/tags/{{$tag->id}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <p class="text-center text-danger">你确认删除<strong class="text-info">{{$tag->tname}}</strong>这个商品类型吗？</p>
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