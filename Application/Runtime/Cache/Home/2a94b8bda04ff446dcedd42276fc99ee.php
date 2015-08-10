<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="/E-LearningWeb/Application/Home/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="/E-LearningWeb/Application/Home/Public/css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!--Animation>-->
	<script src="/E-LearningWeb/Application/Home/Public/js/wow.min.js"></script>
	<link href="/E-LearningWeb/Application/Home/Public/css/animate.min.css" rel='stylesheet' type='text/css' />
	<script>
	new WOW().init();
	</script>

</head>
<body>
<<<<<<< HEAD
	<div class="header-home">
		<div class="fixed-header">
			<div class="logo wow fadeInDown" data-wow-delay="0.2s">
				<a href="index.html">
					<span class="secondary">大学生的知乎</span>
					<span class="main">E-Learning</span>
				</a>
			</div>
			<div class="top-nav wow bounce" data-wow-delay="0.2s">
				<span class="menu"> </span>
				<ul>
					<li class="active"><a href="index.html">首页</a></li>
					<li><a href="about.html">我的课程</a></li>
					<li><a href="services.html">我的大学</a></li>
					<li><a href="blog.html">讨论区</a></li>
					<li><a href="contact.html">联系我们</a></li>		
				</ul>
				<!-- script-nav -->

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
=======


<nav class="nav navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="cotainer">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navtabs">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">E-Learning</a>
        </div>


        <div id="navtabs" class="collapse navbar-collapse" >
            <ul class="nav navbar-nav">
                <li class="active nav-current" role="presentation"><a href="#">Home</a></li>
                <li><a href="#">My Courses</a></li>
                <li><a href="#">Topics</a></li>
                <li><a href="#">Files</a></li>
                <li><a href="#">ContactUs</a> </li>
            </ul>

            <ul id="settings" class="nav navbar-nav navbar-right">
                <li class="right">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search">
                        </div>

                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                </li>
                <li><a href="#">设置</a></li>
                <li><a href="#">登陆</a></li>
                <li><a href="#">注册</a></li>
                <li><img class="small" src="/E-LearningWeb/Application/Home/Public/img/icon.png" style="width:40px;height:40px"></li>

            </ul>
        </div>
    </div>

</nav>
>>>>>>> origin/master
	<!--header-->

	<!-- content -->
	<div class="row wow fadeInDown" data-wow-delay="1s">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
					<div class="row" style="margin-top:50px;">
						<div class="col-md-12">
						</div>
					</div>
					<div style="margin-left:70px;">
						<h3>
							院系专题
						</h3>
						<ul class="unstyled">
							<li>
								<h3>
									新闻资讯
								</h3>
							</li>
							<li>
								<h3>
									体育竞技
								</h3>
							</li>
							<li>
								<h3>
									娱乐八卦
								</h3>
							</li>
							<li>
								<h3>
									前沿科技
								</h3>
							</li>
							<li>
								<h3>
									环球财经
								</h3>
							</li>
							<li>
								<h3>
									天气预报
								</h3>
							</li>
							<li>
								<h3>
									房产家居
								</h3>
							</li>
							<li>
								<h3>
									网络游戏
								</h3>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6" style="margin-top:20px;">
					<div class="tabbable" id="tabs-363493">
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#panel-656096">最新</a>
							</li>
							<li>
								<a data-toggle="tab" href="#panel-261220">热门</a>
							</li>
						</ul>
						<div class="tab-content wow fadein" data-wow-delay="1s">
							<div class="tab-pane active" id="panel-656096">
								<!-- 第一部分内容 -->
								<h2>
									标题1
								</h2>
								<p>
									本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
								</p>
								<p>
									<a class="btn" href="<?php echo U('Index/concrete');?>">查看全部 »</a>
									<a class="btn" href="#">评论 »</a>
								</p>
								<h2>
									标题2
								</h2>
								<p>
									本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
								</p>
								<p>
									<a class="btn" href="#">查看更多 »</a>
								</p>
								<h2>
									标题3
								</h2>
								<p>
									本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
								</p>
								<p>
									<a class="btn" href="#">查看更多 »</a>
								</p>
							</div>
							<div class="tab-pane" id="panel-261220">
								<!-- 第二部分内容. -->
								<h2>
									标题4
								</h2>
								<p>
									本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
								</p>
								<p>
									<a class="btn" href="#">查看更多 »</a>
								</p>
								<h2>
									标题5
								</h2>
								<p>
									本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
								</p>
								<p>
									<a class="btn" href="#">查看更多 »</a>
								</p>
								<h2>
									标题6
								</h2>
								<p>
									本可视化布局程序在HTML5浏览器上运行更加完美, 能实现自动本地化保存, 即使关闭了网页, 下一次打开仍然能恢复上一次的操作.
								</p>
								<p>
									<a class="btn" href="#">查看更多 »</a>
								</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
					<div class="row" style="margin-top:50px;">
						<div class="col-md-12">
						</div>
					</div>
					<div style="margin-left:70px;">
						<h3>
							热门话题
						</h3>
						<ul class="unstyled">
							<li>
								<h3>
									新闻资讯
								</h3>
							</li>
							<li>
								<h3>
									体育竞技
								</h3>
							</li>
							<li>
								<h3>
									娱乐八卦
								</h3>
							</li>
							<li>
								<h3>
									前沿科技
								</h3>
							</li>
							<li>
								<h3>
									环球财经
								</h3>
							</li>
							<li>
								<h3>
									天气预报
								</h3>
							</li>
							<li>
								<h3>
									房产家居
								</h3>
							</li>
							<li>
								<h3>
									网络游戏
								</h3>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer wow fadeInUp" data-wow-delay="0.4s">
	<div class="container">
		<div class="footer_top">
			<div class="col-sm-3">
				<ul class="list1">
					<h3>浏览</h3>
					<li><a href="#">我的大学</a></li>
					<li><a href="#">我的课程</a></li>
					<li><a href="#">讨论区</a></li>
					<li><a href="#">联系我们</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<ul class="list1">
					<h3>下个功能等你来猜</h3>
					<li><a href="#">博客</a></li>
					<li><a href="#">管理</a></li>
					<li><a href="#">历史</a></li>
					<li><a href="#">文学</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<ul class="list1">
					<h3>关于学习</h3>
					<li><a href="#">关于我们</a></li>
					<li><a href="#">应用</a></li>
					<li><a href="#">学习环境</a></li>
					<li><a href="#">注册</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<ul class="socials">
					<li><a href="#"><i class="fa fb fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa tw fa-twitter"></i></a></li>
				</ul>
				<ul class="list2">
					<li><strong class="phone">+8618668775879</strong><br><small>周一到周五 / 9.00AM - 06.00PM</small></li>
					<li>Questions? <a href="malito:mail@demolink.org">hcw13@software.nju.edu.cn</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="copy">
	<p>Copyright &copy; 2015.E-Learning团队。</p>
</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>