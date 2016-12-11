@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="col-sm-2">
                        <h3 class="panel-title">积分列表</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-striped hover">
                                <thead>
                                <tr>
                                    <th class="col-md-2">id</th>
                                    <th class="col-md-3">用户名</th>
                                    <th class="col-md-2">现剩有积分</th>
                                    <th class="col-md-2">总获取积分</th>
                                    <th class="col-md-3">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $uC as $u)
                                    <tr>
                                        <td>{{ $u->uuid }}</td>
                                        <td>{{ $u->username }}</td>
                                        <td>{{ $u->credit }}</td>
                                        <td>{{ $u->sum_credit }}</td>
                                        <td>
                                            <a href="/admin/credit/{{$u->uuid}}" class="fa fa-pencil btn-success btn-sm"></a>
                                            <a href="javascript:;" class="fa fa-trash-o md-trigger btn btn-danger btn-sm" data-modal="modal-{{$u->uuid}}"></a>
                                        </td>
                                    </tr>
                                    <div class="md-modal md-effect-4" id="modal-{{$u->uuid}}">
                                        <div class="md-content">

                                            <h3>积分删除</h3>
                                            <div>
                                                <form action="/admin/credit/{{$u->uuid}}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <p class="text-center text-danger">你确认删除<strong class="text-info">{{$u->username}}</strong>这个用户的积分吗？，总积分也会清零的哦！</p>
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