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
	<!--<!--Animation>-->
	<!--<script src="/E-LearningWeb/Application/Home/Public/js/wow.min.js"></script>-->
	<!--<link href="/E-LearningWeb/Application/Home/Public/css/animate.min.css" rel='stylesheet' type='text/css' />-->
    <link href="../../Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Public/css/index-nav.css" rel="stylesheet">
    <link href="../../Public/css/index.css" rel="stylesheet">
    <link href="/E-LearningWeb/Application/Home/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/E-LearningWeb/Application/Home/Public/css/index-nav.css" rel="stylesheet">
    <link href="/E-LearningWeb/Application/Home/Public/css/index.css" rel="stylesheet">
</head>
<body>


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
                <li><img class="small" src="../../Public/img/icon.png" style="width:40px;height:40px"></li>

            </ul>
        </div>
    </div>

</nav>
	<!--header-->

	<!-- content -->
<div class="container main-content" style="padding-top: 40px">
    <div class="row">
        <div class="col-lg-3 siderbar container">
            <div class="sidebar-department-list">

                <div class="department-list-search">

                </div>

                <div class="department-list">
                    <ul class="list-unstyled">
                        <li><a href="#"><h3>软件学院</h3></a></li>
                        <li><a href="#"><h3>数学系</h3></a></li>
                        <li><a href="#"><h3>历史学系</h3></a></li>
                        <li><a href="#"><h3>哲学系</h3></a></li>
                        <li><a href="#"><h3>物理学院</h3></a></li>
                        <li><a href="#"><h3>政府管理学院</h3></a></li>
                    </ul>
                </div>


                <div class="list-more">
                    <a  class="btn btn-default" style="width:100%">更多院系</a>
                </div>

            </div>
        </div>
        <div class="nav-tabs">

            <div class="col-lg-6">
                <ul class="topic-list list-unstyled list-group">
            <li>
                <div class="topic-head">
                    <h2 align="left"><?php echo ($title); ?></h2>
                    <div class="topic-meta">
                        <span class="author"><a href="#">gaoyang</a></span>
                        &nbsp;&nbsp;&nbsp;
                        <span>软件学院</span>
                        &nbsp;&nbsp;&nbsp;
                        <span>大二</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>2015年8月15日</span>
                    </div>
                </div>
                <hr>
                <div class="topic-content">
                    <p >为什么曹二这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么
                        蠢这么蠢这么蠢这么蠢</p>
                </div>

                <div class="topic-readmore-btn">
                    <a class="btn btn-default">阅读全文</a>
                </div>

                <hr>
                <div class="topic-tips">
                    <ul class="list-inline">
                        <li><a href="#">Comment:<small>100</small></a></li>
                        <li><a href="#">Likes:<small>50</small></a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="topic-head">
                    <h2 align="left">这是一个问题</h2>
                    <div class="topic-meta">
                        <span class="author"><a href="#">gaoyang</a></span>
                        &nbsp;&nbsp;&nbsp;
                        <span>软件学院</span>
                        &nbsp;&nbsp;&nbsp;
                        <span>大二</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>2015年8月15日</span>
                    </div>
                </div>
                <hr>
                <div class="topic-content">
                    <p >为什么曹二这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么
                        蠢这么蠢这么蠢这么蠢</p>
                </div>

                <div class="topic-readmore-btn">
                    <a class="btn btn-default">阅读全文</a>
                </div>

                <hr>
                <div class="topic-tips">
                    <ul class="list-inline">
                        <li><a href="#">Comment:<small>100</small></a></li>
                        <li><a href="#">Likes:<small>50</small></a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="topic-head">
                    <h2 align="left">这是一个问题</h2>
                    <div class="topic-meta">
                        <span class="author"><a href="#">gaoyang</a></span>
                        &nbsp;&nbsp;&nbsp;
                        <span>软件学院</span>
                        &nbsp;&nbsp;&nbsp;
                        <span>大二</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>2015年8月15日</span>
                    </div>
                </div>
                <hr>
                <div class="topic-content">
                    <p >为什么曹二这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么
                        蠢这么蠢这么蠢这么蠢</p>
                </div>

                <div class="topic-readmore-btn">
                    <a class="btn btn-default">阅读全文</a>
                </div>

                <hr>
                <div class="topic-tips">
                    <ul class="list-inline">
                        <li><a href="#">Comment:<small>100</small></a></li>
                        <li><a href="#">Likes:<small>50</small></a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="topic-head">
                    <h2 align="left">这是一个问题</h2>
                    <div class="topic-meta">
                        <span class="author"><a href="#">gaoyang</a></span>
                        &nbsp;&nbsp;&nbsp;
                        <span>软件学院</span>
                        &nbsp;&nbsp;&nbsp;
                        <span>大二</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>2015年8月15日</span>
                    </div>
                </div>
                <hr>
                <div class="topic-content">
                    <p >为什么曹二这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么
                        蠢这么蠢这么蠢这么蠢</p>
                </div>

                <div class="topic-readmore-btn">
                    <a class="btn btn-default">阅读全文</a>
                </div>

                <hr>
                <div class="topic-tips">
                    <ul class="list-inline">
                        <li><a href="#">Comment:<small>100</small></a></li>
                        <li><a href="#">Likes:<small>50</small></a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="topic-head">
                    <h2 align="left">这是一个问题</h2>
                    <div class="topic-meta">
                        <span class="author"><a href="#">gaoyang</a></span>
                        &nbsp;&nbsp;&nbsp;
                        <span>软件学院</span>
                        &nbsp;&nbsp;&nbsp;
                        <span>大二</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>2015年8月15日</span>
                    </div>
                </div>
                <hr>
                <div class="topic-content">
                    <p >为什么曹二这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么
                        蠢这么蠢这么蠢这么蠢</p>
                </div>

                <div class="topic-readmore-btn">
                    <a class="btn btn-default">阅读全文</a>
                </div>

                <hr>
                <div class="topic-tips">
                    <ul class="list-inline">
                        <li><a href="#">Comment:<small>100</small></a></li>
                        <li><a href="#">Likes:<small>50</small></a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="topic-head">
                    <h2 align="left">这是一个问题</h2>
                    <div class="topic-meta">
                        <span class="author"><a href="#">gaoyang</a></span>
                        &nbsp;&nbsp;&nbsp;
                        <span>软件学院</span>
                        &nbsp;&nbsp;&nbsp;
                        <span>大二</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>2015年8月15日</span>
                    </div>
                </div>
                <hr>
                <div class="topic-content">
                    <p >为什么曹二这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么
                        蠢这么蠢这么蠢这么蠢</p>
                </div>

                <div class="topic-readmore-btn">
                    <a class="btn btn-default">阅读全文</a>
                </div>

                <hr>
                <div class="topic-tips">
                    <ul class="list-inline">
                        <li><a href="#">Comment:<small>100</small></a></li>
                        <li><a href="#">Likes:<small>50</small></a></li>
                    </ul>
                </div>
            </li>

            <li>
                <div class="topic-head">
                    <h2 align="left">这是一个问题</h2>
                    <div class="topic-meta">
                        <span class="author"><a href="#">gaoyang</a></span>
                        &nbsp;&nbsp;&nbsp;
                        <span>软件学院</span>
                        &nbsp;&nbsp;&nbsp;
                        <span>大二</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>2015年8月15日</span>
                    </div>
                </div>
                <hr>
                <div class="topic-content">
                    <p >为什么曹二这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么蠢这么
                        蠢这么蠢这么蠢这么蠢</p>
                </div>

                <div class="topic-readmore-btn">
                    <a class="btn btn-default">阅读全文</a>
                </div>

                <hr>
                <div class="topic-tips">
                    <ul class="list-inline">
                        <li><a href="#">Comment:<small>100</small></a></li>
                        <li><a href="#">Likes:<small>50</small></a></li>
                    </ul>
                </div>
            </li>
            </ul>
                <div class="load-more">
                    <a href="#">查看更多</a>
                </div>
            </div>
        </div>


        <div class="col-lg-3 sidebar container">
            <div class="sidebar-hot-topics">
                <div class="list-title">
                    <h3>热门话题</h3>
                </div>
                <hr>
                <div class="list-content">
                    <ul class="list-unstyled hot-topic-list">
                        <li><a><strong>为什么花儿这样红，曹二这么二</strong></a></li>
                        <hr>
                        <li><a><strong>为什么花儿这样红，曹二这么丑</strong></a></li>
                        <hr>
                        <li><a><strong>为什么花儿这样红，曹二这么傻</strong></a></li>
                        <hr>
                        <li><a><strong>为什么花儿这样红，曹二这么蠢</strong></a></li>
                    </ul>
                </div>
                <hr>
                <div class="list-more">
                    <a style="text-align: right">了解更多>></a>
                </div>

            </div>

            <div class="sidebar-hot-files">
                <div class="list-title">
                    <h3>热门资料</h3>
                </div>
                <hr>
                <div class="list-content">
                    <ul class="list-unstyled hot-file-list">
                        <li><a><strong><i>&lt;&lt;本草纲目&gt;&gt;</i></strong></a></li>
                        <hr>
                        <li><a><strong><i>&lt;&lt;九阳真经&gt;&gt;</i></strong></a></li>
                        <hr>
                        <li><a><strong><i>&lt;&lt;毛概大全&gt;&gt;</i></strong></a></li>
                        <hr>
                        <li><a><strong><i>&lt;&lt;呵呵呵呵&gt;&gt;</i></strong></a></li>
                    </ul>
                </div>
                <hr>
                <div class="list-more">
                    <a  class="btn btn-default">了解更多</a>
                </div>

            </div>



        </div>
    </div>

</div>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widght">
                    <div class="widght-content hot-topic">
                        <h4 class="title">热门</h4>
                        <ul class="list-unstyled footer-list">
                            <li>
                                <a href="#">天气为什么这么棒</a>
                                <div class="date">March 4th,2015</div>
                            </li>
                            <li>
                                <a href="#">天气为什么这么棒</a>
                                <div class="date">March 4th,2015</div>

                            </li>
                            <li>
                                <a href="#">天气为什么这么棒</a>
                                <div class="date">March 4th,2015</div>

                            </li>
                            <li>
                                <a href="#">天气为什么这么棒</a>
                                <div class="date">March 4th,2015</div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widght">
                    <div class="wight-content tag-cloud">
                        <h4 class="title">标签云</h4>

                        <span><a href="#" class="btn btn-default">玩转课堂</a></span>
                        <span><a href="#" class="btn btn-default">软件</a></span>
                        <span><a href="#" class="btn btn-default">经济</a></span>
                        <span><a href="#" class="btn btn-default">股票</a></span>
                        <span><a href="#" class="btn btn-default">校园大使</a></span>
                        <span><a href="#" class="btn btn-default">文艺汇演</a></span>
                        <span><a href="#" class="btn btn-default">十大歌星</a></span>
                        <span><a href="#" class="btn btn-default">学生会</a></span>
                    </div>

                </div>

            </div>

            <div class="col-md-4">
                <div class="widght">
                    <div class="widght-content about-us">
                        <h4 class="title">关于我们</h4>
                        <div class="cols list-group" style="line-height: 3em">
                            <a href="#" >成员构成</a><br>
                            <a href="#" >公司介绍</a><br>
                            <a href="#" >联系我们</a><br>
                            <a href="#" >E-Mail:394481226@qq.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>