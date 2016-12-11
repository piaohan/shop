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
                <div class="panel-heading"><h3 class="panel-title">商品类别添加</h3></div>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="/admin/goodsclass" >
                            {{ csrf_field() }}
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">商品类别  *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="cname" name="cname" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success" type="submit">保存</button>
                                    <a href="/admin/goodsclass" class="btn btn-default" type="button">返回</a>
                                </div>
                            </div>
                        </form>
                    </div> <!-- .form -->

                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->

    </div>
    <!-- 表单验证结束-->
@endsection
@section('script')
    <!--alertInfo JS-->
    {{--<script src="{{asset('/js/classie.js')}}"></script>--}}
    {{--<script src="{{asset('/js/modaleffects.js')}}"></script>--}}
    <!--alertInfo end-->
    {{--<script src="{{asset('/js/jquery.validate.min.js')}}"></script>--}}


@endsection