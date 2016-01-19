require(['jquery','toTop'], function($, tt){
	var $nav = $('#nav'),
		$navIcon = $('.nav-icon',$nav),
		$navMneuBox = $('.nav-menu-box',$nav),
		$navCloseIcon = $('.nav-close-icon',$nav),
		$toTop = $('#to-top'),
		$submit = $('#submit');

	//nav
	$navIcon.on('click',function(){
		$navMneuBox.animate({top:  0});
	});
	$navCloseIcon.on('click',function(){
		$navMneuBox.animate({top:  -192});
	});

	//回到顶部
	tt.top($toTop);

	//Ajax方式提交评论
	$submit.on('click',function(){
		var $commname = $('[name=commname]'),
			$email = $('[name=email]'),
			$website = $('[name=website]'),
			$subject = $('[name=subject]'),
			$ul = $('.comment ul'),
			blog_id = $(this).data('id'),
			d = new Date,
			year = d.getFullYear(),
			mon = d.getMonth() + 1,
			day = d.getDate(),
			h = d.getHours(),
			m = d.getMinutes(),
			s = d.getSeconds(),
			time = year+'-'+(mon<10?'0'+mon:mon)+'-'+(day<10?'0'+day:day)+' '+(h<10?'0'+h:h)+':'+(m<10?'0'+m:m)+':'+(s<10?'0'+s:s);
		$.post('welcome/comment',{
			commname: $commname.val(),
			email: $email.val(),
			website: $website.val(),
			subject: $subject.val(),
			blog_id: blog_id,
			add_time: time
		},function(res){
			// console.log(res);
			var comment = res.data;
			if(res == "fail"){
				alert('失败');
			}else{
				$div =  '<li>'
							+'<p class="content">'+'评论内容：'+comment.subject+'</p>'
							+'<a href="#" class="name">'+'评论人：'+comment.comm_name+'</a>'
							+'<span class="data">'+'评论时间：'+comment.add_time+'</span>'
							+'<div class="clearfix">'
							+'</div>'
						+'</li>';
				$ul.prepend($div);
			}
		},'json');
	});
});