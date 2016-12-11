@extends('admin.layouts.master')
@section('content')
        <!-- 表单验证 -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">修改标签</h3></div>
            <div class="panel-body">
                <div class=" form">
                    <form class="cmxform form-horizontal tasi-form"  method="post" action="/admin/tags/{{$res->id}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group ">
                            <label for="tname" class="control-label col-lg-2">标签名  *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="tname" name="tname" type="text" value="{{ $res->tname }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-success" type="submit">保存</button>
                                <a href="/admin/tags" class="btn btn-default" type="button">返回</a>
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
        {{--<!--alertInfo JS-->--}}
{{--<script src="{{asset('/js/classie.js')}}"></script>--}}
{{--<script src="{{asset('/js/modaleffects.js')}}"></script>--}}
{{--<!--alertInfo end-->--}}
{{--<script src="{{asset('/js/jquery.validate.min.js')}}"></script>--}}

@endsection