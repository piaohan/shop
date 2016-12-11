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
                <div class="panel-heading"><h3 class="panel-title">用户修改</h3></div>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal tasi-form" method="post"
                              action="/admin/users/{{ $user['uuid'] }}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-2">用户名称 *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="username" name="username" type="text"
                                           value="{{ $user['username'] }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label col-lg-2">用户密码 *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="password" name="password" type="password" value="{{ $user['username'] }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="lastname" class="control-label col-lg-2">用户电话 *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="tel" name="tel" type="text"
                                           value="{{ $user['tel'] }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-2">用户邮箱 *</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" id="email" name="email" type="text"
                                           value="{{ $user['email'] }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="state" class="control-label col-lg-2">状态 *</label>
                                <div class="col-lg-10">
                                    {{--<input class=" form-control" id="email" name="email" type="text"--}}
                                    {{--value="{{ $user->email }}">--}}
                                    <select name="state" id="" class="form-control">

                                        @if ($user['state'] ==0)
                                            <option value="0" selected="selected">未激活</option>
                                            <option value="1">激活</option>
                                            <option value="5">禁用</option>
                                        @elseif($user['state'] ==1)
                                            <option value="0">未激活</option>
                                            <option value="1" selected="selected">激活</option>
                                            <option value="5">禁用</option>
                                        @elseif($user['state'] ==5)
                                            <option value="0">未激活</option>
                                            <option value="1">激活</option>
                                            <option value="5" selected="selected">禁用</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-success" type="submit">保存</button>
                                    <a href="/admin/users" class="btn btn-default">返回</a>
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
    <!--alertInfo JS-->
    <script src="{{asset('/js/classie.js')}}"></script>
    <script src="{{asset('/js/modaleffects.js')}}"></script>
    <!--alertInfo end-->
    <script src="{{asset('/js/jquery.validate.min.js')}}"></script>

@endsection