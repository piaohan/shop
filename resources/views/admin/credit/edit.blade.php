@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">积分修改</h3></div>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal tasi-form"  method="post" action="/admin/credit/{{$uC->uuid}}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group ">
                                {{--<input class=" form-control" id="id" name="id" type="hidden" value="{{ $res->id }}">--}}
                                <label for="credit" class="control-label col-lg-2">现有积分  *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="credit" name="credit" type="text" value="{{$uC->credit}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success" type="submit">保存</button>
                                    <a href="/admin/credit" class="btn btn-default" type="button">返回</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- 表单验证结束-->
@endsection
@section('script')
    {{--<!--alertInfo JS-->--}}
    {{--<script src="{{asset('/js/classie.js')}}"></script>--}}
    {{--<script src="{{asset('/js/modaleffects.js')}}"></script>--}}
    <!--alertInfo end-->
    <script src="{{asset('/js/jquery.validate.min.js')}}"></script>


@endsection