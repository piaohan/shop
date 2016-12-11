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
                <div class="panel-heading"><h3 class="panel-title">商品修改</h3></div>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal tasi-form" method="post"
                              action="/admin/goods/{{ $res->id }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group ">
                                <label for="gname" class="control-label col-lg-2">商品名称 *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="gname" name="gname" type="text"
                                           value="{{ $res->gname }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="class_id" class="control-label col-lg-2">种类 *</label>
                                <div class="col-lg-10">
                                    <select class="form-control" name="class_id" id="class_id">
                                        <option value="0">请选择</option>
                                        @foreach($gclass as $gclas)
                                            <option value="{{$gclas['id']}}">{{$gclas['cname']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="price" class="control-label col-lg-2">价格 *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="price" name="price" type="text"
                                           value="{{ $res->price }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="pic" class="control-label col-lg-2">商品图片 *</label>
                                <div class="col-lg-10">
                                    <p class="form-control-static"><img src="{{ env('ALIOSS_ACCESS').'/'.$res->pic }}">
                                    </p>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="describe" class="control-label col-lg-2">商品详情 *</label>
                                <div class="col-lg-10">
                                    <textarea id="describe" name="describe"
                                              style="width: 100%">{{ $res->describe }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success" type="submit">保存</button>
                                    <a href="/admin/goods" class="btn btn-default" type="button">退出</a>
                                </div>
                            </div>
                        </form>
                    </div> <!-- .form -->

                </div> <!-- panel-body -->
            </div>
        </div> <!-- col -->

    </div>
    <!-- 表单验证结束-->
@endsection
@section('script')
    <!--alertInfo JS-->
    {{--<script src="{{asset('/js/classie.js')}}"></script>--}}
    {{--<script src="{{asset('/js/modaleffects.js')}}"></script>--}}
    {{--<!--alertInfo end-->--}}
    {{--<script src="{{asset('/js/jquery.validate.min.js')}}"></script>--}}

@endsection