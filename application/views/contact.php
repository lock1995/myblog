<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/contact.css">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0); 
		}, false); function hideURLbar(){
			window.scrollTo(0,1); 
		}
	</script>
</head>
<body>
	<div id="nav">
		<span class="nav-icon"></span>
		<div class="nav-menu-box">
			<div class="nav-menu-bg"></div>
			<ul class="nav-menu">
				<li><a href="<?php echo 'welcome/index'; ?>">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">PORTFOLIO</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>
			<span class="nav-close-icon"></span>
		</div>
	</div>
	<div id="contact">
		<div class="container">
			<div class="contact-left">
				<!-- <form action="welcome/message" method="post"> -->
					<div class="name info">
						<p>YOUR NAME:</p>
						<input type="text" name="username" class="textbox"  >
					</div>
					<div class="email info">
						<p>EMAIL:</p>
						<input type="text" name="email" class="textbox"  >
					</div>
					<div class="message info">
						<p>MESSAGE:</p>
						<textarea name="content" id="message" cols="30" rows="10" ></textarea>
					</div>
					<input type="button" value="submit" id="sub">
				<!-- </form> -->
			</div>
			<div class="contact-right">
				<h3>ADDRESS</h3>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non</p>
				<p>1-25-2568-897</p>
				<p><a href="#">mail@portfolio.com</a></p>
			</div>
			<div class="map"></div>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<div class="footer-left">Template by W3layouts</div>
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

	<script src="js/require.js" data-main="js/contact.js"></script>
</body>
</html>