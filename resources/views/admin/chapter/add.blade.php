@extends('admin.base')<!-- 头部和左侧内容 -->
<!-- 中间区域内容 -->
@section('rcontent')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-calendar"></i>
                课程章节管理
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin/"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li><a href="/admin/course">课程章节管理</a></li>
                <li class="#">添加课程章节信息</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- right column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-plus"></i> 添加课程信息</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="/admin/course" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">课程名称</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="请输入课程名称">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">课程描述</label>
                                    <div class="col-sm-4">
                                        {{--<input type="text" class="form-control" id="inputPassword3" placeholder="请输入课程描述">--}}
                                        <textarea name="describle"  style="width: 310px;height: 200px;" placeholder="请在此处输入课程描述"></textarea>
                                    </div>
                                </div>

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <div class="col-sm-offset-2 col-sm-1">
                                    <button type="submit" class="btn btn-primary">添加</button>
                                </div>
                                <div class="col-sm-1">
                                    <button type="reset" class="btn btn-primary">重置</button>
                                </div>
                            </div><!-- /.box-footer -->
                        </form>
                        <div class="row"><div class="col-sm-12">&nbsp;</div></div>
                    </div><!-- /.box -->

                </div><!--/.col (right) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->

</section>


@endsection