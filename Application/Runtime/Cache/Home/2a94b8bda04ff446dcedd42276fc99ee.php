<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/E-LearningWeb/Application/Home/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/E-LearningWeb/Application/Home/Public/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="/E-LearningWeb/Application/Home/Public/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="/E-LearningWeb/Application/Home/Public/fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!--Animation-->
<script src="/E-LearningWeb/Application/Home/Public/js/wow.min.js"></script>
<link href="/E-LearningWeb/Application/Home/Public/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>

</head>
<body>
<div class="header wow fadeInUpBig" data-wow-delay="0.4s">
   <div class="container">
	  <div class="header_top">
		<h1>Welcome</h1>
		<h2>to E-Learning</h2>
	  </div>
   </div>
 </div>
  <div class="header-home">
	<div class="fixed-header">
		<div class="logo wow bounceInDown" data-wow-delay="0.2s">
			<a href="index.html">
	          <span class="secondary">大学生的知乎</span>
	          <span class="main">E-Learning</span>
	        </a>
		</div>
				<div class="top-nav wow bounce" data-wow-delay="0.2s">
				    <span class="menu"> </span>
					<ul>
						<li class="active"><a href=<?php echo U('index');?>>首页</a></li>
					  	<li><a href=<?php echo U('about');?>>我的课程</a></li>
					  	<li><a href=<?php echo U('class');?>>我的大学</a></li>
					  	<li><a href=<?php echo U('blog');?>>讨论区</a></li>
					  	<li><a href=<?php echo U('contact');?>>联系我们</a></li>		
					</ul>
				<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<!-- //script-nav -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
        <!--script-->
		<script>
			$(document).ready(function(){
				$(".top-nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--//header-->
    </div>
	<div class="grid_1">
		<div class="container">
		  <div class="box_1  wow fadeInUpBig" data-wow-delay="0.4s">
			<h3>欢迎使用E-Learning教学支持系统</h3>
			<p>本系统提供课件共享、讨论等功能。给你带来全新的体验！</p>
		  </div>
		  <div class="box_2">
			  <div class="col-md-6">
			  	<div class="feature  wow fadeInRight" data-wow-delay="0.4s">
	                   <i class="fa fa-film"> </i>
	                   <h4>概率论与数理统计</h4>
	                    <p>
	                        网易云课堂《概率论与数理统计》的视频，由陈振宇、范红军老师主讲的有关数学概率的一个容易入门的学习资料。
	                    </p>
	            </div>
			  </div>
			  <div class="col-md-6">
			  	<div class="feature wow fadeInLeft" data-wow-delay="0.4s">
	                   <i class="fa fa-check"> </i>
	                   <h4>南京大学数学系线性代数课件</h4>
	                    <p>
	                        C9高校南京大学数学系陆宏老师的课程资料，包括上课的习题的复习资料。
	                    </p>
	            </div>
		      </div>
		      <div class="clearfix"> </div>
		  </div>
		   <div class="box_3 wow bounce" data-wow-delay="0.4s">
			  <div class="col-md-6">
			  	<div class="feature">
	                   <i class="fa fa-trophy"> </i>
	                   <h4>PhotoShop简单入门教程</h4>
	                    <p>
	                        一个非常简单的PS入门级教程，让你很快就能对Photoshop有一个大致的了解，并能基本掌握PS的一些基本技巧。
	                    </p>
	            </div>
			  </div>
			  <div class="col-md-6">
			  	<div class="feature">
	                   <i class="fa fa-microphone"> </i>
	                   <h4>中国IT行业发展.pdf</h4>
	                    <p>
	                        讲诉了IT在中国发展的历史进程，让你对目前中国IT行业的发展有一个大致的了解。
	                    </p>
	            </div>
		      </div>
		      <div class="clearfix"> </div>
		  </div>
		</div>
	</div>
	<div class="grid_2">
		<div class="container"> 
			<h3 class="head_1 wow rotateInUpLeft" data-wow-delay="0.4s">大学分区</h3>
		  <div class="col-md-4 box_6 wow rotateInDownLeft " data-wow-delay="0.4s">
		  	<img src="/E-LearningWeb/Application/Home/Public/images/pic1.jpg" class="img-responsive" alt=""/>
		  	<div class="desc">
		  		<h4>清华大学</h4>
		  		<p>清华大学（Tsinghua University），简称清华，诞生于1911年，因北京西北郊清华园得名，依托美国退还的部分“庚子赔款”建立，初称清华学堂，是清政府设立的留美预备学校，后更名为清华学校。</p>
		  		<div class="more"><a href="#"><img src="/E-LearningWeb/Application/Home/Public/images/more.png" alt=""></a></div>
		  	</div>
		  </div>
		   <div class="col-md-4 box_6 wow lightSpeedIn" data-wow-delay="0.4s">
		  	<img src="/E-LearningWeb/Application/Home/Public/images/pic2.jpg" class="img-responsive" alt=""/>
		  	<div class="desc">
		  		<h4>北京大学</h4>
		  		<p>北京大学（Peking University），简称北大，创建于1898年，初名京师大学堂，是中国近代第一所国立大学，也是中国近代最早以“大学”身份和名称建立的学校。</p>
		  		<div class="more"><a href="#"><img src="/E-LearningWeb/Application/Home/Public/images/more.png" alt=""></a></div>
		  	</div>
		  </div>
		  <div class="col-md-4 box_6 wow rotateIn " data-wow-delay="0.4s">
		  	<img src="/E-LearningWeb/Application/Home/Public/images/pic3.jpg" class="img-responsive" alt=""/>
		  	<div class="desc">
		  		<h4>南京大学</h4>
		  		<p>南京大学，简称南大，是一所源远流长的高等学府。近代校史肇始于1902年筹办的三江师范学堂，1949年“国立中央大学”易名“国立南京大学”，翌年径称“南京大学”，沿用至今。</p>
		  		<div class="more"><a href="#"><img src="/E-LearningWeb/Application/Home/Public/images/more.png" alt=""></a></div>
		  	</div>
		  </div>
	   </div>
	</div>
    <div class="team">
		<div class="container">
			<h3 class="head_2 wow rollIn" data-wow-delay="0.4s">欢迎来到E-Learning大家族</h3>
			<div class="img-wrapper wow slideInLeft" data-wow-delay="0.4s">
              <a href="#"><img src="/E-LearningWeb/Application/Home/Public/images/pic6.jpg" class="img-responsive" alt=""/></a>
              <a href="#"><img src="/E-LearningWeb/Application/Home/Public/images/pic7.jpg" class="img-responsive" alt=""/></a>
              <a href="#"><img src="/E-LearningWeb/Application/Home/Public/images/pic4.jpg" class="img-responsive" alt=""/></a>
            </div>
            <blockquote class="blockquote1">
              <div class="block_info wow slideInRight" data-wow-delay="0.4s">
                <span class="heading">E-Learning——中国大学生的知乎网</span>
                E-Learning可以找到你想要的高校课件，可以同每个专业的大神们在线讨论，可以方便地提交作业。
              </div>
              <span class="author wow bounce" data-wow-delay="0.4s"><a href="#">快来探索吧！</a></span>
            </blockquote>
		</div>
	</div>
	<div class="students wow  zoomInDown" data-wow-delay="0.4s">
		<div class="container">
			<h3>快乐学习</h3>
			<div class="custom_testimonials_wrap_inner">
				<address><img src="/E-LearningWeb/Application/Home/Public/images/pic5.jpg" class="img-responsive" alt=""/></address>
				<div class="extra-wrap">
				<i class="fa quote fa-quote-left"></i>
				<p>在这里，你能找到本专业的大神，能找到志同道合的朋友，一切你想要的都在这里!（真的不是吹牛）</p>
				<p class="m_2"><a href="#">----&nbsp;&nbsp; E-Learning开发组</a></p>
				</div>
				<div class="clearfix"></div> 
			</div>
		</div>
	</div>
	<div class="footer wow fadeInRight" data-wow-delay="0.4s">
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
</body>
</html>