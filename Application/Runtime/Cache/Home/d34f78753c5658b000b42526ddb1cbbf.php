<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Services</title>
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
<!------ light-box-script ----->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script --->
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
					  	<li class="active"><a href="services.html">我的大学</a></li>
					  	<li><a href="blog.html">讨论区</a></li>
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
		       <div class="about-grids service_box">
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s5.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic12.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">外国语学院</a></h3>
							<p class="service_desc">南京大学外国语学院与国内外若干所院校建立了广泛的合作和交流关系，多次举办有影响的国际国内学术会议。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s6.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic13.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">计算机科学与技术系</a></h3>
							<p class="service_desc">南京大学计算机科学与技术系所建计算机科学与技术一级学科是国家一级重点学科和江苏省重中之重学科。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s8.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic15.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">天文与空间科学学院</a></h3>
							<p class="service_desc">南京大学天文与空间科学学院成立于2011年3月，其前身天文学系始建于1952年，是目前全国高校中历史最悠久、培养人才最多的天文学专业院系。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s1.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic8.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">历史学系</a></h3>
							<p class="service_desc">南京大学历史学系前身溯源于1902年建立的三江师范学堂国史科。1952年院系调整时，由原中央大学历史系、边疆政治系和金陵大学历史系合并而成。</p>
						</div>
				        <div class="clearfix"> </div>
	           </div>
	           <div class="about-grids service_box">
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s7.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic14.jpg" class="/E-LearningWeb/Application/Home/Public/img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">哲学系</a></h3>
							<p class="service_desc">南京大学哲学系的前身是中央大学哲学系和金陵大学哲学系，创立于1920年。迄今已发展成为人才培养层次完备，师资力量雄厚的哲学教学与研究基地。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s9.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic16.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">数学系</a></h3>
							<p class="service_desc">南京大学数学系，是国家理科基础科学研究和教学人才培养基地，数学为国家一级重点学科。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s10.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic17.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">建筑与城市规划学院</a></h3>
							<p class="service_desc">南京大学建筑与城市规划学院，是拥有国家甲级资质的建筑规划设计研究院和城市规划设计研究院。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s11.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic18.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">生命科学学院</a></h3>
							<p class="service_desc">南京大学生命科学院成立于1990年，1999年进入实体化运行，它是国家基础学科生物学人才培养基地之一。</p>
						</div>
				        <div class="clearfix"> </div>
	           </div>
	           <div class="about-grids">
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s2.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic9.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">电子科学与工程学院</a></h3>
							<p class="service_desc">南京大学电子科学与工程学院是是南京大学电子信息领域主要的人才培养和科学研究基地， “211工程”和“985工程”重点建设的学科。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s3.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic10.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">商学院</a></h3>
							<p class="service_desc">南京大学商学院（School of business nanjing university）是中国MBA顶级院校、中国工商管理高等教育的摇篮，并且在中国经济学史上占有重要地位。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s4.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic11.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">法学院</a></h3>
							<p class="service_desc">南京大学法学院的前身是原中央大学法学院，1952年院系调整时被撤销，1981年恢复法律系并招生。1994年由法律系变更为法学院。</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="/E-LearningWeb/Application/Home/Public/images/s12.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="/E-LearningWeb/Application/Home/Public/images/pic19.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="/E-LearningWeb/Application/Home/Public/images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h3><a href="#">文学院</a></h3>
							<p class="service_desc">南京大学文学院，可溯至清光绪二十八年（1902）创立的三江师范学堂与光绪十四年（1888）成立的基督教汇文书院。</p>
						</div>
				        <div class="clearfix"> </div>
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