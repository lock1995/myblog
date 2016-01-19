<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>single</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/single.css">
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
	<div id="single">
		<div class="container">
			<img src="<?php echo $blogs[0] -> blog_img;?>" alt="">
			<p><?php echo $blogs[0] -> content;?></p>
			<div class="comment-list">
				<h5>Written by <a href="#"><?php echo $blogs[0] -> admin_name;?></a></h5>
				<div class="comment-list-content">
					<div class="comment-list1">
						<img src="<?php echo $blogs[0] -> admin_photo;?>" alt="">
						<p>View all posts by:<a href="#"><?php echo $blogs[0] -> admin_name;?></a></p>
					</div>
				</div>
			</div>
			<div class="comment">
				<ul>
					<?php
						foreach($comments as $comment){
					?>
						<li>
							<p class="content">评论内容：<?php echo $comment -> subject; ?></p>
							<a href="#" class="name">评论人：<?php echo $comment -> comm_name; ?></a>
							<span class="data">评论时间：<?php echo $comment -> add_time; ?></span>
							<div class="clearfix"></div>
						</li>
					<?php
						}
					?>
				</ul>
			</div>
			<div class="comment-area">
				<h3>ADD NEW COMMENT</h3>
				<!-- <form action="welcome/comment?blog_id=<?php echo $blogs[0] -> blog_id;?>" method="post"> -->
					<p>
						<label>Name</label>
						<span>*</span>
						<input type="text" name="commname">
					</p>
					<p>
						<label>Email</label>
						<span>*</span>
						<input type="text" name="email">
					</p>
					<p>
						<label>Website</label>
						<span></span>
						<input type="text" name="website">
					</p>
					<p>
						<label>Subject</label>
						<span>*</span>
						<textarea name="subject" cols="30" rows="10"></textarea>
					</p>
					<p>
						<input type="button" value="SUBMIT COMMENT" id="submit" data-id="<?php echo $blogs[0] -> blog_id;?>">
					</p>
				<!-- </form> -->
			</div>
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

	<script src="js/require.js" data-main="js/single.js"></script>
</body>
</html>