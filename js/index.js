require(['jquery','lightbox','toTop'], function($, lb, tt){
	var $nav = $('#nav'),
		$navAbout = $('.about',$nav),
		$navServices = $('.services',$nav),
		$navPortfolio = $('.portfolio',$nav),
		$navBlog = $('.blog',$nav),
		$navContact = $('.contact',$nav),
		$navIcon = $('.nav-icon',$nav),
		$navMneuBox = $('.nav-menu-box',$nav),
		$navCloseIcon = $('.nav-close-icon',$nav),
		$portfolio = $('#portfolio'),
		$view = $('.view',$portfolio),
		$toTop = $('#to-top'),
		$scrollHeight = document.body.offsetHeight;

	//nav
	$navIcon.on('click',function(){
		$navMneuBox.animate({top:  0});
	});
	$navCloseIcon.on('click',function(){
		$navMneuBox.animate({top:  -192});
	});
	$navAbout.on('click',function(){
		$('body,html').animate({scrollTop: 880});
	});
	$navServices.on('click',function(){
		$('body,html').animate({scrollTop: 1530});
	});
	$navPortfolio.on('click',function(){
		$('body,html').animate({scrollTop: 2280});
	});
	$navBlog.on('click',function(){
		$('body,html').animate({scrollTop: 2800});
	});
	$navContact.on('click',function(){
		$('body,html').animate({scrollTop: $scrollHeight});
	});

	// $view.on('mousemove',function(){
	// 	$(this).find('.mask').stop().animate({opacity: 1},100);
	// }).on('mouseout',function(){
	// 	$(this).find('.mask').stop().animate({opacity: 0},100);
	// }).on('click',function(){
	// 	$overlay.css('display', 'block');
	// 	$overlayImg.css('display', 'block');
	// 	// alert('haha');
	// });

	//鼠标滑过图片放大并显示遮罩层
	// $view.hover(function(){
	// 	$(this).find('.photo').stop().animate({
	// 		width: 315,
	// 		height: 230,
	// 		marginLeft: -15,
	// 		marginTop: -10
	// 	});
	// 	$(this).find('.mask').stop().show().animate({
	// 		opacity: 0.84,
	// 		display: 'block'
	// 	});
	// }, function(){
	// 	$(this).find('.photo').stop().animate({
	// 		width: 285,
	// 		height: 210,
	// 		marginLeft: 0,
	// 		marginTop: 0
	// 	});
	// 	$(this).find('.mask').stop().animate({
	// 		opacity: 0,
	// 		display: 'none'
	// 	});
	// });

	//鼠标滑过图片放大并显示遮罩层
	$('#portfolio li').hover(function(){
		$(this).children('img').stop().animate({
			width:305,
			height:194,
			marginLeft:-10,
			marginTop:-7
		});
		$(this).children('.mask').stop().show().animate({opacity:0.84});
	},function(){
		$(this).children('img').stop().animate({
			width:285,
			height:180,
			marginLeft:0,
			marginTop:0
		});
		$(this).children('.mask').stop().animate({opacity:0},function(){
			$(this).hide();
		});
	});

	//弹出大图
	$('#portfolio li').on('click',function(){
		lb.open({
			src: $(this).data('src'),
			width: $(this).data('width'),
			height: $(this).data('height'),
			index: $(this).data('index')
		});
	});

	//鼠标点击图片放大（jQuery插件）
	// $('a',$view).Chocolat({linkImages:false});

	//回到顶部
	tt.top($toTop);
	// $(window).scroll(function(){
	// 	if($(window).scrollTop() > 200){
	// 		$toTop.css('display', 'block');
	// 	}else{
	// 		$toTop.css('display', 'none');
	// 	}
	// });
	// $toTop.on('click',function(){
	// 	$('body,html').animate({scrollTop: 0});
	// });

	// $.getJSON('blogs.json',function(data){
	// 	for(var i = 0; i < data.length; i++){
	// 		var blog = data[i];
	// 		var $minUl = getMinUl();
	// 		$minUl.append('<li><img src="'+blog.blog_img+'" alt="" /><p>'+blog.blog_content+'</p></li>');
	// 	}
	// });

	// function getMinUl(){
	// 	var $minUl = $('.col').eq(0);
	// 	var minUlHeight = $minUl.height();
	// 	for(var i = 1; i < 3; i++){
	// 		if(minUlHeight > $('.col').eq(i).height()){
	// 			$minUl = $('.col').eq(i);
	// 		}
	// 	}
	// 	return $minUl;
	// }

	//瀑布流
	//加载函数
	// function loadData(){
	// 	$('#loading').show();
	// 	$.getJSON('js/blogs.json', function(data){
	// 		setTimeout(function(){
	// 			for(var i=0; i<data.length; i++){
	// 				var blog = data[i];
	// 				var $minUl = getMinUl();
	// 				$minUl.append('<li><a href="#"><img src="images/'+blog.blog_img+'" alt=""></a><div class="text-area"><h3><a href="#">'+blog.blog_title+'</a></h3><h5><a href="#">'+blog.blog_date+'</a></h5><p>'+blog.blog_content+'</p><a href="#" class="button">SEE MORE</a><div class="clearfix"></div></li>');
	// 			}
	// 			$('#loading').hide();
	// 		});
	// 	});
	// }
	// loadData();

	// //滚动事件
	// $(window).on('scroll', function(){
	// 	var ul1 = $('.col').eq(0),
	// 	$minUl = getMinUl(),
	// 	scrollTop = $(window).scrollTop();
	// 	if(ul1.height() > 2000){
	// 		loadData.stop();
	// 	}else{		
	// 		if(scrollTop + $(window).height() >= $minUl.height() + 3000){
	// 			loadData();
	// 		}
	// 	}
	// });

	// //找最短ul
	// function getMinUl(){
	// 	var $minUl = $('.col').eq(0);
	// 	for(var i=1; i<3; i++){
	// 		if($minUl.height() > $('.col').eq(i).height()){
	// 			$minUl = $('.col').eq(i);
	// 		}
	// 	}
	// 	return $minUl;
	// }


			$blogHeadSection = $('#blog .head-section');
			var iHeadSectionTop = $blogHeadSection.offset().top,
				iHeadSectionHeight = $blogHeadSection.height();
			var bLoad = true;//判断是否该加载新数据
			var bLoaded = false;//判断本次请求的数据是不是加载完毕
			var isEnd = false;//判断是不是加载完数据库中的所有数据
			var page = 0;//控制分页

			function getMinUl(){
				$blogList = $('.blog-list');
				var $minUl =  $blogList.eq(0);
				for(var i=1; i<$blogList.length; i++){
					if($blogList.eq(i).height() < $minUl.height()){
						$minUl = $blogList.eq(i);
					}
				}
				return $minUl;
			}

			

			$(window).on('scroll', function(){

				if($(window).height()+$(window).scrollTop() >= iHeadSectionTop+iHeadSectionHeight && !isEnd){
					if(bLoad){
						bLoad = false;
						$.get('welcome/get_articles?page='+page, function(res){
							if(!res.isEnd){
								for(var i=0; i<res.data.length; i++){
									var blog = res.data[i];
									var html = '<li class="blog-artical">'
													+ '<div class="blog-artical-pic">'
														+ '<a href="welcome/single?blog_id='+blog.blog_id+'"><img src="'+blog.blog_img+'" title="img" /></a>'
													+ '</div>'
													+ '<div class="blog-artical-info">'
														+ '<h3><a href="#">'+blog.title+'</a></h3>'
														+ '<span>'+blog.admin_name+' | <a href="#">'+blog.add_time+'</a></span>'
														+ '<div class="content">'+blog.content+'</div>'
														+ '<a class="more-btn button" href="welcome/single?blog_id='+blog.blog_id+'">See More</a>'
														+ '<div class="clearfix"> </div>'
													+ '</div>'
												+ '</li>';
									var $minUl = getMinUl();
									$minUl.append(html);
								}
								bLoaded = true;
								page += 6;
							}else{
								isEnd = true;
							}
						}, 'json');

					}


					var $minUl = getMinUl();
					if($(window).height()+$(window).scrollTop() >= $minUl.offset().top+$minUl.height() && bLoaded){
						bLoad = true;
						bLoaded = false;
					}
				}


			});

});






















