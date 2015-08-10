<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--<link href="/E-LearningWeb/Application/Home/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />-->
	<!--<link href="/E-LearningWeb/Application/Home/Public/css/style.css" rel='stylesheet' type='text/css' />-->
	<!--<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<!--<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
	<!--&lt;!&ndash;Animation>&ndash;&gt;-->
	<!--<script src="/E-LearningWeb/Application/Home/Public/js/wow.min.js"></script>-->
	<!--<link href="/E-LearningWeb/Application/Home/Public/css/animate.min.css" rel='stylesheet' type='text/css' />-->
    <link href="../../Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Public/css/index.css" rel="stylesheet">



</head>
<body>
    <nav class="nav navbar navbar-default navbar-fixed-top" id="navbar" role="navigation">
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
                                <input class="form-control"  type="text" placeholder="Search">
                            </div>

                            <a href="#" class="btn btn-success">提问</a>
                        </form>
                    </li>
                    <li><a href="#">设置</a></li>
                    <li><a href="#">登陆</a></li>
                    <li><a href="#">注册</a></li>
                    <li><img class="small" src="img/icon.png" style="width:40px;height:40px"></li>

                </ul>
            </div>
        </div>

    </nav>
	<!--header-->

	<!-- content -->
	<div class="container main-content" >
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
						<ul class="list-unstyled">
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

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>