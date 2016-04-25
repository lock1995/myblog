<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>myblog</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/chocolat.css" />
	<link rel="stylesheet" href="css/lightbox.css">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0); 
		}, false); function hideURLbar(){
			window.scrollTo(0,1); 
		}
	</script>
</head>
<body>
	<div id="header">
		<div id="nav">
			<span class="nav-icon"></span>
			<div class="nav-menu-box">
				<div class="nav-menu-bg"></div>
				<ul class="nav-menu">
					<li><a href="#">HOME</a></li>
					<li class="about"><a href="#">ABOUT</a></li>
					<li class="services"><a href="#">SERVICES</a></li>
					<li class="portfolio"><a href="#">PORTFOLIO</a></li>
					<li class="blog"><a href="#">BLOG</a></li>
					<li class="contact"><a href="#">CONTACT</a></li>
				</ul>
				<span class="nav-close-icon"></span>
			</div>
		</div>
		<div id="banner">
			<img src="images/pic.png" alt="photo" class="head-photo">
			<h1>刘炳男</h1>
			<p>WEB DEVELOPER</p>
			<div class="banner-button">	
				<ul>
					<li><a href="#">Hire Me</a></li>
					<li><a href="#">Follow Me</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="aboutme">
		<h1>ABOUT ME</h1>
		<span class="section"></span>
		<div class="aboutme-box">
			<div class="aboutme-text">
				<h2>1995年出生于油城大庆</h2><br/>
				<h3>现就读于哈尔滨理工大学 信息管理与信息管理专业</h3>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在班级担任团支书职务，主要协调老师和同学之间的事宜，人缘非常好，喜欢组织班级同学进行一些集体活动；学习成绩也还可以，能在班级排到前五名，并多次获得校奖学金和三好学生。</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2014年开始进行前端开发，深爱前端这个行业，个人认为前端是一个新兴的行业，不像后台那么枯燥，与用户的界面直接打交道，也富有挑战性。学习前端相关技术主要是通过观看网上教学视频和看一些前端开发人员的网站进行学习，做一些例子，不会的时候找手册，或者看一些大牛的博客，培养自己的自学能力，更快的接触新鲜事物。</p>
			</div>
			<div class="aboutme-pic">
				<a href="#">
					<img src="images/video.jpg" alt="video">
				</a>
			</div>
		</div>
	</div>
	<div id="service">
		<h1>MY SKILLS</h1>
		<span class="section"></span>
		<div class="container">
			<div class="service1 servicex">
				<span></span>
				<h3>HTML</h3>
				<p>精通HTML语法，能够独立编写HTML语句，了解HTML的语义化和W3C标准，对HTML5的语句也有了解，例如本地存储、canvas等。</p>
			</div>
			<div class="service2 servicex">
				<span></span>
				<h3>CSS</h3>
				<p>精通CSS，对CSS选择器和CSS3的新选择器能够熟练使用，了解CSS优化问题和兼容性问题，如CSS sprite等；对弹性盒模型和CSS3动画等也都有使用。</p>
			</div>
			<div class="service3 servicex">
				<span></span>
				<h3>JAVASCRIPT</h3>
				<p>精通JavaScript，了解ECMA标准，能够用原生的JS完成一些特效的制作，实现网页的交互；并且能够熟练运用jQuery，熟练使用其选择器和其它语句，完成页面的开发。</p>
			</div>
			<div class="service4 servicex">
				<span></span>
				<h3>AJAX</h3>
				<p>了解Ajax的基本原理,能够运用Ajax技术进行异步的前后台交互,并具有实际项目经验，例如本站的博客页面的评论实现了Ajax与后台交互。</p>
			</div>
			<div class="service5 servicex">
				<span></span>
				<h3>PHP</h3>
				<p>熟悉PHP和Mysql的基本语法,能用原生的PHP完成简单的后台开发，熟悉MVC模式,能在XAMPP环境下运用CI框架完成完整的网页后台开发。</p>
			</div>
			<div class="service6 servicex">
				<span></span>
				<h3>GITHUB</h3>
				<p>能够运用Github进行整体项目的团队开发；Github地址：<br/>https://github.com/lock1995</p>
			</div>
		</div>
	</div>
	<div id="portfolio">
		<h1>PORTFOLIO</h1>
		<span class="section"></span>
		<ul class="portfolio-list">
			<li data-src="images/port-pic1.jpg" data-width="662" data-height="416" data-index="1">
				<img src="images/port-pic1.jpg" alt="">
				<div class="mask">
					<img src="images/hover-icon.png" alt="info">
					<h3>Product Design</h3>
					<p>LimeLight</p>
				</div>
			</li>
			<li data-src="images/port-pic2.jpg" data-width="662" data-height="416" data-index="2">
				<img src="images/port-pic2.jpg" alt="">
				<div class="mask">
					<img src="images/hover-icon.png" alt="info">
					<h3>Product Design</h3>
					<p>LimeLight</p>
				</div>
			</li>
			<li data-src="images/port-pic3.jpg" data-width="662" data-height="416" data-index="3">
				<img src="images/port-pic3.jpg" alt="">
				<div class="mask">
					<img src="images/hover-icon.png" alt="info">
					<h3>Product Design</h3>
					<p>LimeLight</p>
				</div>
			</li>
			<li data-src="images/port-pic4.jpg" data-width="662" data-height="416" data-index="4">
				<img src="images/port-pic4.jpg" alt="">
				<div class="mask">
					<img src="images/hover-icon.png" alt="info">
					<h3>Product Design</h3>
					<p>LimeLight</p>
				</div>
			</li>
			<li data-src="images/port-pic5.jpg" data-width="662" data-height="416" data-index="5">
				<img src="images/port-pic5.jpg" alt="">
				<div class="mask">
					<img src="images/hover-icon.png" alt="info">
					<h3>Product Design</h3>
					<p>LimeLight</p>
				</div>
			</li>
			<li data-src="images/port-pic6.jpg" data-width="662" data-height="416" data-index="6">
				<img src="images/port-pic6.jpg" alt="">
				<div class="mask">
					<img src="images/hover-icon.png" alt="info">
					<h3>Product Design</h3>
					<p>LimeLight</p>
				</div>
			</li>
			<li data-src="images/port-pic7.jpg" data-width="662" data-height="416" data-index="7">
				<img src="images/port-pic7.jpg" alt="">
				<div class="mask">
					<img src="images/hover-icon.png" alt="info">
					<h3>Product Design</h3>
					<p>LimeLight</p>
				</div>
			</li>
			<li data-src="images/port-pic.jpg" data-width="662" data-height="416" data-index="8">
				<img src="images/port-pic.jpg" alt="">
				<div class="mask">
					<img src="images/hover-icon.png" alt="info">
					<h3>Product Design</h3>
					<p>LimeLight</p>
				</div>
			</li>
		</ul>
	</div>
<!-- 	<div id="myblog">
		<div class="container">
			<h1>MY BLOG</h1>
			<span class="section"></span>
			<div class="myblog-box">
				<ul class="col">
					<li>
						<a href="<?php echo 'welcome/single'; ?>">
							<img src="images/blog-post.jpg" alt="">
						</a>
						<div class="text-area">
							<h3><a href="#">DESIGN TREND 2014</a></h3>
							<h5><a href="#">BRUNO MARS | 13 COMMENTS</a></h5>
							<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.</p>
							<a href="<?php echo 'welcome/single'; ?>" class="button">SEE MORE</a>
							<div class="clearfix"></div>
						</div>
					</li>
					<li>
						<a href="<?php echo 'welcome/single'; ?>">
							<img src="images/blog-post3.jpg" alt="">
						</a>
						<div class="text-area">
							<h3><a href="#">DESIGN TREND 2014</a></h3>
							<h5><a href="#">BRUNO MARS | 13 COMMENTS</a></h5>
							<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA.</p>
							<a href="<?php echo 'welcome/single'; ?>" class="button">SEE MORE</a>
							<div class="clearfix"></div>
						</div>
					</li>
				</ul>
				<ul class="col">
					<li>
						<a href="<?php echo 'welcome/single'; ?>">
							<img src="images/blog-post1.jpg" alt="">
						</a>
						<div class="text-area">
							<h3><a href="#">DESIGN TREND 2015</a></h3>
							<h5><a href="#">BRUNO MARS | 13 COMMENTS</a></h5>
							<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE.</p>
							<a href="<?php echo 'welcome/single'; ?>" class="button">SEE MORE</a>
							<div class="clearfix"></div>
						</div>
					</li>
					<li>
						<a href="<?php echo 'welcome/single'; ?>">
							<img src="images/blog-post4.jpg" alt="">
						</a>
						<div class="text-area">
							<h3><a href="#">DESIGN TREND 2015</a></h3>
							<h5><a href="#">BRUNO MARS | 13 COMMENTS</a></h5>
							<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD.</p>
							<a href="<?php echo 'welcome/single'; ?>" class="button">SEE MORE</a>
							<div class="clearfix"></div>
						</div>
					</li>
				</ul>
				<ul class="col">
					<li>
						<a href="<?php echo 'welcome/single'; ?>">
							<img src="images/blog-post1.jpg" alt="">
						</a>
						<div class="text-area">
							<h3><a href="#">DESIGN TREND 2016</a></h3>
							<h5><a href="#">BRUNO MARS | 13 COMMENTS</a></h5>
							<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT LAOREET DOLORE MAGNA ALIQUAM ERAT IN HENDRERIT IN VULPUTATE VELIT.</p>
							<a href="<?php echo 'welcome/single'; ?>" class="button">SEE MORE</a>
							<div class="clearfix"></div>
						</div>
					</li>
					<li>
						<a href="<?php echo 'welcome/single'; ?>">
							<img src="images/blog-post5.jpg" alt="">
						</a>
						<div class="text-area">
							<h3><a href="#">DESIGN TREND 2016</a></h3>
							<h5><a href="#">BRUNO MARS | 13 COMMENTS</a></h5>
							<p>LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREETADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT IN VULPUTATE VELIT.</p>
							<a href="<?php echo 'welcome/single'; ?>" class="button">SEE MORE</a>
							<div class="clearfix"></div>
						</div>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<p class="check-out">Check Out My <a href="#">BLOG</a> And Subscribe To Get All The Updates</p>
		</div>
	</div> -->
	<div id="blog" class="blog">
		<div class="container">
			<!-- head-section -->
			<div class="head-section text-center">
				<h1>My Blog</h1>
				<span class="section"></span>
			</div>
			<!-- /head-section -->
			<!-- blog-articals -->
			<div class="blog-articals">
				<ul class="blog-list col">

				</ul>
				<ul class="blog-list col">

				</ul>
				<ul class="blog-list col" style="margin-right: 0;">

				</ul>
			</div>
			<div class="clearfix"> </div>
			<!-- blog-articals -->
			<p class="more-articals text-center check-out">Check Out My <a href="#">Blog</a> And Subscribe To Get All The Updates</p>
		</div>
	</div>
<!-- 	<div id="myblog">
		<div class="loading"></div>
		<div class="container">
			<h1>MY BLOG</h1>
			<span class="section"></span>
			<ul class="col"></ul>
			<ul class="col"></ul>
			<ul class="col"></ul>
			<div class="clearfix"></div>
			<p class="check-out">Check Out My <a href="#">BLOG</a> And Subscribe To Get All The Updates</p>
		</div>
	</div> -->
	<div id="project">
		<div class="project-box">	
			<div class="cycle"><span></span></div>
			<div class="project1">
				<p>75%</p>
				<p>前端</p>
			</div>
			<div class="project2">
				<p>50%</p>
				<p>PHP</p>
			</div>
			<div class="project3">
				<p>100%</p>
				<p>心态</p>
			</div>
		</div>
	</div>
	<div id="contact">
		<p>
			Realize me more ? 
			<a href="<?php echo 'welcome/contact'; ?>" class="catch">Contact Me</a>
		</p>
	</div>
	<div id="footer">
		<div class="container">
			<div class="footer-left">Temporary by Lock</div>
			<div class="footer-right">
				<ul>
					<li><a href="#"><span class="face"></span></a></li>
					<li><a href="#"><span class="twit"></span></a></li>
					<li><a href="#"><span class="dri"></span></a></li>
					<li><a href="#"><span class="tech"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div><span id="to-top"></span></div>
<!-- 	<div id="overlay">
	</div>
	<div id="overlay-img">
		<div class="close"></div>
		<div class="loading"></div>
		<div class="photo">
			<img src="images/port-pic.jpg" alt="">
		</div>
		<div class="description">
			<span class="description-name">name</span>
			<span class="description-via">| 1/16</span>
		</div>
	</div>
 -->
 
	<script src="js/require.js" data-main="js/index.js"></script>
</body>
</html>