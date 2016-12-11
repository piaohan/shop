<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ asset('front/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="{{ asset('front/css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('front/js/responsiveslides.min.js') }}"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script type="text/javascript" src="{{ asset('front/js/hover_pack.js') }}"></script>
</head>
<body>
<div class="header">
  <div class="header_top">
    <div class="container">
      <div class="logo">
        <a href="index.html"><img src="{{ asset('front/images/logo.png') }}" alt=""/></a>
      </div>
      <ul class="shopping_grid">
            <a href="#"><li>注册</li></a>
            <a href="login.html"><li>登录</li></a>
            <a href="#"><li><span class="m_1">购物车</span>&nbsp;&nbsp;(0) &nbsp;<img src="{{ asset('front/images/bag.png') }}" alt=""/></li></a>
            <div class="clearfix"> </div>
      </ul>
        <div class="clearfix"> </div>
    </div>
	</div>
	<div class="h_menu4"><!-- start h_menu4 -->
		<div class="container">
				<a class="toggleMenu" href="#">大牛的后花园</a>
				<ul class="nav">
					<li class="active"><a href="index.html" data-hover="Home">主页</a></li>
					<li><a href="about.html" data-hover="About Us">关于我们</a></li>
					<li><a href="careers.html" data-hover="Careers">发展历程</a></li>
					<li><a href="contact.html" data-hover="Contact Us">联系我们</a></li>
					<li><a href="404.html" data-hover="Company Profile">公司简介</a></li>
					<li><a href="register.html" data-hover="Company Registration">供应商入驻</a></li>
					<li><a href="wishlist.html" data-hover="Wish List">愿望清单</a></li>
				 </ul>
				 <script type="text/javascript" src="{{ asset('front/js/nav.js') }}"></script>
	      </div><!-- end h_menu4 -->
     </div>
</div>
<div class="slider">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
          <li><img src="{{ asset('front/images/banner1.jpg') }}" class="img-responsive" alt=""/>
          <div class="banner_desc">
          <h1>我们为程序员提供最稳定的物质生活帮助</h1>
          <h2>嗨类的名称打打算</h2>
          </div>
          </li>
          <li><img src="{{ asset('front/images/banner2.jpg') }}" class="img-responsive" alt=""/>
           <div class="banner_desc">
          <h1>酒后驾车autem或者设计iriure hendrerit悲哀。</h1>
          <h2>Claritas dynamicus进程,这是sequitur etiam。</h2>
          </div>
          </li>
          <li><img src="{{ asset('front/images/banner3.jpg') }}" class="img-responsive" alt=""/>
            <div class="banner_desc">
          <h1>Ut wisi enim广告微量veniam,nostrud。</h1>
          <h2>Mirum notare是一个gothica方始发生效力,一个putamus穷尽国内。</h2>
          </div>
          </li>
	      </ul>
	  </div>
</div>
<div class="column_center">
  <div class="container">
	<div class="search">
	  <div class="stay">搜索</div>
	  <div class="stay_right">
		  <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
		  <input type="submit" value="">
	  </div>
	  <div class="clearfix"> </div>
	</div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="main">
  <div class="content_top">
  	<div class="container">
	   <div class="col-md-3 sidebar_box">
	   	 <div class="sidebar">
			<div class="menu_box">
		    <h3 class="menu_head">产品菜单</h3>
			  <ul class="menu">
				<li class="item1"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>男</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱</a></li>
						<li class="subitem2"><a href="#">可爱1</a></li>
						<li class="subitem3"><a href="#">可爱2</a></li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>女</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱3</a></li>
						<li class="subitem2"><a href="#">可爱4</a></li>
						<li class="subitem3"><a href="#">可爱5</a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>时尚</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱6</a></li>
						<li class="subitem2"><a href="#">可爱7</a></li>
						<li class="subitem3"><a href="#">可爱8</a></li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>孩子们</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱9</a></li>
						<li class="subitem2"><a href="#">可爱10</a></li>
						<li class="subitem3"><a href="#">可爱11</a></li>
					</ul>
				</li>
				<li class="item5"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>牛仔裤</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱12</a></li>
						<li class="subitem2"><a href="#">可爱13</a></li>
						<li class="subitem3"><a href="#">可爱14</a></li>
					</ul>
				</li>
				<li class="item6"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>T恤</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱12</a></li>
						<li class="subitem2"><a href="#">可爱13</a></li>
						<li class="subitem3"><a href="#">可爱14</a></li>
					</ul>
				</li>
				<li class="item7"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>顶级时尚</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱15</a></li>
						<li class="subitem2"><a href="#">可爱16</a></li>
						<li class="subitem3"><a href="#">可爱17</a></li>
					</ul>
				</li>
				<li class="item8"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>夏天控</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱18</a></li>
						<li class="subitem2"><a href="#">可爱19</a></li>
						<li class="subitem3"><a href="#">可爱20</a></li>
					</ul>
				</li>
				<li class="item9"><a href="#"><img class="arrow-img" src="{{ asset('front/images/f_menu.png') }}" alt=""/>特价</a>
					<ul class="cute">
						<li class="subitem1"><a href="#">可爱21</a></li>
						<li class="subitem2"><a href="#">可爱22</a></li>
						<li class="subitem3"><a href="#">可爱23</a></li>
					</ul>
				</li>
			</ul>
		</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });

			});
		</script>
       </div>
		    <div class="delivery">
				<img src="{{ asset('front/images/delivery.jpg') }}" class="img-responsive" alt=""/>
				<h3>交付</h3>
				<h4>全球</h4>
			</div>
			<div class="twitter">
			   <h3>最近的Twitter</h3>
			   <ul class="twt1">
			   	  <i class="twt"> </i>
			   	  <li class="twt1_desc"><span class="m_1">@Contrary</span> 与流行的看法,回车键<span class="m_1"> 回车键</span></li>
			   	  <div class="clearfix"> </div>
			   </ul>
			   <ul class="twt1">
			   	  <i class="twt"> </i>
			   	  <li class="twt1_desc"><span class="m_1">T与流行的看法</span> 与流行的看法,回车键 <span class="m_1">回车键</span></li>
			   	  <div class="clearfix"> </div>
			   </ul>
			   <ul class="twt1">
			   	  <i class="twt"> </i>
			   	  <li class="twt1_desc"><span class="m_1">T与流行的看法</span> 大赛的将来打算立刻打三角阿加莎的lkj<span class="m_1">大三角达克斯大家啊立刻打</span></li>
			   	  <div class="clearfix"> </div>
			   </ul>
			</div>
			<div class="clients">
				<h3>大家啊散开了打算看来大家</h3>
				<h4>大家啊肯德基阿克萨德加拉快速的就askdj</h4>
			   <ul class="user">
			   	<i class="user_icon"></i>
			   	<li class="user_desc"><a href="#"><p>大家啊考四级达拉斯大家啊桑丽卡</p></a></li>
			   	<div class="clearfix"> </div>
			   </ul>
			</div>
	   </div>
	   <div class="col-md-9 content_right">
	   	@yield('rcontent')
	  </div>
	</div>
</div>
<div class="footer_bg">
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 f_grid1">
			<h3>About</h3>
			<a href="#"><img src="{{ asset('front/images/logo.png') }}" alt=""/></a>
			<p>只要你技术够牛，这里就是你技术的变现基地。</p>
		</div>
		<div class="col-md-3 f_grid1 f_grid2">
			<h3>关注我们</h3>
			<ul class="social">
				<li><a href=""> <i class="QQ"> </i><p class="m_3">QQ</p><div class="clearfix"> </div></a></li>
			    <li><a href=""><i class="tw"> </i><p class="m_3">新浪微博</p><div class="clearfix"> </div></a></li>
				<li><a href=""><i class="google"> </i><p class="m_3">腾讯微博</p><div class="clearfix"> </div></a></li>
				<li><a href=""><i class="instagram"> </i><p class="m_3">微信</p><div class="clearfix"> </div></a></li>
			</ul>
		</div>
		<div class="col-md-6 f_grid3">
			<h3>联系信息</h3>
			<ul class="list">
				<li><p>电话 : </p></li>
				<li><p>传真 : </p></li>
				<li><p>邮箱 : </p></li>
			</ul>
			<ul class="list1">
				<li>
          <p>???????????</p>
        </li>
			</ul>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="footer_bottom">
       	<div class="container">
       		<div class="cssmenu">
				<ul>
					<li class="active"><a href="login.html">隐私政策</a></li> .
					<li><a href="checkout.html">服务条款</a></li> .
					<li><a href="checkout.html">权利政策</a></li> .
					<li><a href="login.html">联系我们</a></li> .
					<li><a href="register.html">FAQ</a></li>
				</ul>
			</div>
			<div class="copy">
			    <p>Copyright &copy; 2015.Company name All rights reserved.</p>
		    </div>
		    <div class="clearfix"> </div>
       	</div>
</div>

</body>
</html>
