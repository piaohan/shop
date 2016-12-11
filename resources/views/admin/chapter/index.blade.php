@extends('admin.base')<!-- 头部和左侧内容 -->
<!-- 中间区域内容 -->
@section('rcontent')

    <!-- Content Header (Page header) -->
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-calendar"></i>
            课程章节管理
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin/"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="/admin/course">课程章节管理</a></li>
            <li class="#">课程管理章节列表</li>
        </ol>
    </section>
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">课程章节管理列表</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>课程id</th>
                            <th>课程名称</th>
                            <th>课程描述</th>
                            <th>添加时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach($courselist as $course)--}}
                            {{--<tr>--}}
                                {{--<td>{{$course->id}}</td>--}}
                                {{--<td>{{$course->name}}</td>--}}
                                {{--<td>{{$course->describle}}</td>--}}
                                {{--<td> {{date("Y-m-d",$course->add_time)}}</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                    <div style="margin-right: 0px;">
                        {{--<span style="display: inline-block;float: right;padding-right: 100px;">{{$courselist->links()}}</span>--}}
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->


@endsection