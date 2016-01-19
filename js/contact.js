require(['jquery','toTop'], function($, tt){
	var $nav = $('#nav'),
		$navIcon = $('.nav-icon',$nav),
		$navMneuBox = $('.nav-menu-box',$nav),
		$navCloseIcon = $('.nav-close-icon',$nav),
		$sub = $('#sub'),
		$toTop = $('#to-top');

	//nav
	$navIcon.on('click',function(){
		$navMneuBox.animate({top:  0});
	});
	$navCloseIcon.on('click',function(){
		$navMneuBox.animate({top:  -192});
	});

	//提交数据到数据库
	$sub.on('click',function(){
		var $username = $('[name=username]');
		var $email = $('[name=email]');
		var $content = $('[name=content]');
		if($username.val() == ''){
			alert('请输入用户名');
			$username.focus();
		}else{
			$.post('welcome/message',{
				username: $username.val(),
				email: $email.val(),
				content: $content.val()
			},function(res){
				alert(res);
			});
		}
	});

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
});
