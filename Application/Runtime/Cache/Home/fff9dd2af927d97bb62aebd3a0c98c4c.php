<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="/E-LearningWeb/Application/Home/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/E-LearningWeb/Application/Home/Public/js/jquery-1.11.1.min.js"></script>
<script src="/E-LearningWeb/Application/Home/Public/js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="/E-LearningWeb/Application/Home/Public/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_about"> </div>
   <div class="header-home">
	<div class="fixed-header">
		<div class="logo">
			<a href="index.html">
	          <span class="secondary">大学生的知乎</span>
	          <span class="main">E-Learning</span>
	        </a>
		</div>
				<div class="top-nav">
				    <span class="menu"> </span>
					<ul>
						<li><a href="index.html">首页</a></li>
					  	<li><a href="about.html">我的课程</a></li>
					  	<li><a href="services.html">我的大学</a></li>
					  	<li  class="active"><a href="blog.html">讨论区</a></li>
					  	<li><a href="contact.html">联系我们</a></li>	
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
   <div class="grid_4">
		<div class="container"> 
			<h1 class="blog_head">Forum</h1>
		   <div class="blog_grid span2">
		     <div class="col-md-6 blog_box">
		        <a href="single.html" class="mask"><img src="/E-LearningWeb/Application/Home/Public/images/b1.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">软件开发</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>march 14, 2015</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>软件开发是根据用户要求建造出软件系统或者系统中的软件部分的过程。软件开发是一项包括需求捕捉、需求分析、设计、实现和测试的系统工程。软件一般是用某种程序设计语言来实现的。</p>
		        <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
		     </div>  
		     <div class="col-md-6 blog_box">
		        <a href="single.html" class="mask"><img src="/E-LearningWeb/Application/Home/Public/images/b2.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">物理化学</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>March 22, 2015</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>物理化学是在物理和化学两大学科基础上发展起来的。它以丰富的化学现象和体系为对象，大量采纳物理学的理论成就与实验技术，探索、归纳和研究化学的基本规律和理论，构成化学科学的理论基础。</p>
		        <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
		     </div>  
		     <div class="clearfix"> </div>
		   </div>
		    <div class="blog_grid">
		     <div class="col-md-6 blog_box">
		        <a href="single.html" class="mask"><img src="/E-LearningWeb/Application/Home/Public/images/b3.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">生物医药</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>March 30, 2015</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>生物医学工程是综合应用生命科学与工程科学的原理和方法，从工程学角度在分子、细胞、组织、器官乃至整个人体系统多层次认识人体的结构、功能和其他生命现象，研究用于防病、治病、人体功能辅助及卫生保健的人工材料、制品、装置和系统技术的总称。</p>
		        <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
		     </div>  
		     <div class="col-md-6 blog_box">
		        <a href="single.html" class="mask"><img src="/E-LearningWeb/Application/Home/Public/images/b4.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
		     	<h3><a href="single.html">计算机科学</a></h3>
		     	<div class="links">
		  		    <ul>
		  				<li><i class="fa blog-icon fa-calendar"> </i><span>march 30, 2015</span></li>
		  				<li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
		  				<li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
		  		    </ul>
		  		</div>
		     	<p>计算机科学，研究计算机及其周围各种现象和规律的科学，亦即研究计算机系统结构、程序系统（即软件）、人工智能以及计算本身的性质和问题的学科。</p>
		        <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
		     </div>  
		   </div>
		   <div class="pagination">
		    <ul><li class="pagination-start firstItem"><span class="pagenav">Start</span></li>
		    	<li class="pagination-prev"><span class="pagenav">Prev</span></li><li>
		    	<span class="pagenav">1</span></li><li><a href="#" class="pagenav">2</a></li>
		    	<li class="pagination-next"><a title="" href="#" class="border pagenav" data-original-title="Next">Next</a></li>
		    	<li class="pagination-end lastItem"><a title="" href="#" class="border pagenav" data-original-title="End">End</a></li>
		    </ul>	
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