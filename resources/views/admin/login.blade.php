<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="shortcut icon" href="img/favicon_1.ico">--}}
    <title>兄弟会-微商城</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/bootstrap-reset.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    {{--<!--Animation css-->--}}
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    {{--<!--Icon-fonts css-->--}}
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/css/material-design-iconic-font.min.css')}}" rel="stylesheet" />
    {{--<!-- Custom styles for this template -->--}}
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/helper.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('/js/html5shiv.js')}}"></script>
    <script src="{{asset('/js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<div class="wrapper-page">
    <div class="panel panel-color panel-inverse">
        <div class="panel-heading">
            <h3 class="text-center m-t-10"> 登录 <strong>微商城</strong> </h3>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-10 p-20 p-b-0" action="/login" method="post">
                {{ csrf_field() }}
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" name="username" type="text" placeholder="请输入管理员账号" value="{{old('username')}}">
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" placeholder="请输入管理员密码">
                    </div>
                </div>
                <div class="form-group text-right">
                    <div class="col-xs-12">
                        <button class="btn btn-success w-md" type="submit">登录</button>
                    </div>
                </div>
            </form>
            <!-- 验证 -->
            @if(session("msg"))
                <p class="login-box-msg" style="color:red;">{{session("msg")}}</p>
        @endif
        <!-- 验证结束-->
        </div>
    </div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/pace.min.js')}}"></script>
<script src="{{asset('/js/wow.min.js')}}"></script>
<script src="{{asset('/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!--common script for all pages-->
<script src="{{asset('/js/jquery.app.js')}}"></script>
</body>
</html>
