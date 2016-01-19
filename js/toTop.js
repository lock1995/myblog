define(['jquery'],function(){
	return {
		top: function(elem){
			$(window).scroll(function(){
				if($(window).scrollTop() > 200){
					elem.css('display', 'block');
				}else{
					elem.css('display', 'none');
				}
			});
			elem.on('click',function(){
				$('body,html').animate({scrollTop: 0});
			});
		}
	};
});



