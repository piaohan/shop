<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>后台模板AdminLTE 2|Dashboard</title>
  <!-- 告诉浏览器响应屏幕宽度 -->
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.4 -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->
  <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Ionicons 2.0.0 -->
  <!--<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
  <link href="{{asset('myadmin/bootstrap/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="{{asset('myadmin/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link href="{{asset('myadmin/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="{{asset('myadmin/plugins/iCheck/flat/blue.css')}}" rel="stylesheet" type="text/css" />
  <!-- Morris chart -->
  <link href="{{asset('myadmin/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
  <!-- jvectormap -->
  <link href="{{asset('myadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
  <!-- Date Picker -->
  <link href="{{asset('myadmin/plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <link href="{{asset('myadmin/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="{{asset('myadmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />


  <!-- 文章模块样式 -->
  <link href="{{asset('myadmin/article/mine.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('myadmin/article/Mypages')}}" type="text/css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="{{asset('myadmin/article/css/common.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('myadmin/article/css/main.css')}}"/>
  <script type="text/javascript" src="{{asset('myadmin/article/js/libs/modernizr.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('myadmin/article/js/jquery-1.4.2.min.js')}}"></script>
  <link href="{{asset('myadmin/article/css/Mypages.css')}}" type="text/css" rel="stylesheet" />

  <!-- 载入百度富文本编辑器 -->
  <script type="text/javascript" charset="utf-8" src="{{asset('myadmin/article/ueditor/ueditor.config.js')}}"></script>
  <script type="text/javascript" charset="utf-8" src="{{asset('myadmin/article/ueditor/ueditor.all.min.js')}}"></script>
  <script type="text/javascript" charset="utf-8" src="{{asset('myadmin/article/ueditor/lang/zh-cn/zh-cn.js')}}"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="{{asset('myadmin/bootstrap/js/html5shiv.min.js')}}"></script>
  <script src="{{asset('myadmin/bootstrap/js/respond.min.js')}}"></script>
  <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/admin" class="logo">
      <!-- 对于侧边栏迷你50x50像素迷你标志 -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- 正常状态和移动设备标识 -->
      <span id="wzhtgl" class="logo-lg">H5BOOK后台管理</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">切换导航</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->

          <!-- Users Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('myadmin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
              <span class="hidden-xs">{{session('adminuser')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- Users image -->
              <li class="user-header">
                <img src="{{asset('myadmin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                <p>
                  {{session('adminuser')}}网站开发
                  <small>会员于2012-11</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="col-xs-4 text-center">
                  <a href="#">追随者</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">销售</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">朋友</a>
                </div>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">简介</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">签出</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar users panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('myadmin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
          <p>{{session('adminuser')}}</p>

          <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">主导航</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>课程管理</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/course"><i class="fa fa-circle-o"></i> 课程列表</a></li>
            <li><a href="/admin/course/create"><i class="fa fa-circle-o"></i> 添加课程</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>课程章节管理</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/chapter"><i class="fa fa-circle-o"></i> 课程章节列表</a></li>
            <li><a href="/admin/chapter/create"><i class="fa fa-circle-o"></i> 添加课程章节</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>文件管理</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/cate/list"><i class="fa fa-circle-o"></i> 文章列表分类管理</a></li>
            <li><a href="/admin/cate/add"><i class="fa fa-circle-o"></i> 添加文章分类</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>文章管理</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/article/list"><i class="fa fa-circle-o"></i> 文章列表管理</a></li>
            <li><a href="/admin/article/add"><i class="fa fa-circle-o"></i> 添加文章</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>相册分类管理</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/pcate"><i class="fa fa-circle-o"></i> 相册分类列表</a></li>
            <li><a href="/admin/pcate/create"><i class="fa fa-circle-o"></i> 添加相册分类</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>照片管理</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/photo"><i class="fa fa-circle-o"></i> 照片列表</a></li>
            <li><a href="/admin/photo/create"><i class="fa fa-circle-o"></i> 添加照片</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>窗口小部件</span> <small class="label pull-right bg-green">新的</small>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>图表</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI 元素</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i>一般General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> 图标Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> 按钮Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> 滑块Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> 时间表Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> 情态动词Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>形式</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> 一般要素</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> 先进的元素</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> 编辑</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>表</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> 简单的表格</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>数据表</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>日历</span>
            <small class="label pull-right bg-red">3</small>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>邮箱</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>实例</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> 发票联</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> 登录</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> 注册Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> 锁屏</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> 空白页</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>多级</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> 一级</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> 一级<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> 二级</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> 二级<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> 三级</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> 三级</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> 一级</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>文档</span></a></li>
        <li class="header">标签</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>重要</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>警告</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>问询处</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- 右侧内容区域 -->
  <div class="content-wrapper">
      @yield('rcontent')
  </div>
  <!-- /.content-wrapper -->
  <footer class="rcontent">
    <div class="pull-right hidden-xs">
      <b>版本</b> 2.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed 工作室</a>.</strong> 保留所有权利.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">最近的活动</h3>
        <ul class='control-sidebar-menu'>
          <li>
            <a href='javascript::;'>
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">兰登的生日</h4>
                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href='javascript::;'>
              <i class="menu-icon fa fa-user bg-yellow"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">佛罗多更新他的资料</h4>
                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href='javascript::;'>
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">娜拉加入邮件列表</h4>
                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href='javascript::;'>
              <i class="menu-icon fa fa-file-code-o bg-green"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">作业254执行</h4>
                <p>执行时间5秒</p>
              </div>
            </a>
          </li>
        </ul><!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">任务进度</h3>
        <ul class='control-sidebar-menu'>
          <li>
            <a href='javascript::;'>
              <h4 class="control-sidebar-subheading">
                自定义模板的设计
                <span class="label label-danger pull-right">70%</span>
              </h4>
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href='javascript::;'>
              <h4 class="control-sidebar-subheading">
                更新简历
                <span class="label label-success pull-right">95%</span>
              </h4>
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href='javascript::;'>
              <h4 class="control-sidebar-subheading">
                laravel一体化
                <span class="label label-warning pull-right">50%</span>
              </h4>
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href='javascript::;'>
              <h4 class="control-sidebar-subheading">
                后端框架
                <span class="label label-primary pull-right">68%</span>
              </h4>
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul><!-- /.control-sidebar-menu -->

      </div><!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">统计表的内容</div><!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">一般设置</h3>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              面板的使用报告
              <input type="checkbox" class="pull-right" checked />
            </label>
            <p>
              一些关于这个一般设置选项的信息
            </p>
          </div><!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              允许邮件重定向
              <input type="checkbox" class="pull-right" checked />
            </label>
            <p>
              其他的选项是可用的
            </p>
          </div><!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              帖子揭露作者的名字
              <input type="checkbox" class="pull-right" checked />
            </label>
            <p>
              允许用户在博客里显示他的名字
            </p>
          </div><!-- /.form-group -->

          <h3 class="control-sidebar-heading">聊天设置</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              我显示为在线
              <input type="checkbox" class="pull-right" checked />
            </label>
          </div><!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              关闭通知
              <input type="checkbox" class="pull-right" />
            </label>
          </div><!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              删除的聊天记录
              <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div><!-- /.form-group -->
        </form>
      </div><!-- /.tab-pane -->
    </div>
  </aside><!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class='control-sidebar-bg'></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('myadmin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('myadmin/bootstrap/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('myadmin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="{{asset('myadmin/bootstrap/js/raphael-min.js')}}"></script>
<script src="{{asset('myadmin/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{asset('myadmin/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- jvectormap -->
<script src="{{asset('myadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('myadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('myadmin/plugins/knob/jquery.knob.js')}}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="{{asset('myadmin/bootstrap/js/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('myadmin/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<!-- datepicker -->
<script src="{{asset('myadmin/plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('myadmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="{{asset('myadmin/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{asset('myadmin/plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('myadmin/dist/js/app.min.js')}}" type="text/javascript"></script>

<!-- AdminLTE 仪表板演示（这只是用于演示目的） -->
<script src="{{asset('myadmin/dist/js/pages/dashboard.js')}}" type="text/javascript"></script>

<!-- AdminLTE 用于演示目的 -->
<script src="{{asset('myadmin/dist/js/demo.js')}}" type="text/javascript"></script>
</body>
</html>
