define(['jquery'],function(){
	return {
		open: function(opt){
			// elem.on('click',function(){
			// 	alert($(this).data('src'));
			// });
			// alert(opt.src);
			var 
				$lightbox = $('<div class="lightbox"></div>'),
				$lightboxImg = $('<div class="lightbox-img"><div class="close"></div><div class="loading">loading</div></div>'),
				$description = $('<div class="description"><span class="description-name">name</span><span class="description-via">| '+opt.index+'/8</span></div>'),
				iWidth = opt.width,
				iHeight = opt.height,
				that = this;
			if(iWidth > 600){
				iHeight = 600 * iHeight / iWidth;
				iWidth = 600;
			}else{
				iHeight = opt.height;
				iWidth = opt.width;

			}

			$lightbox.appendTo(document.body).animate({opacity: 0.63},function(){
				$lightboxImg.css({
					width: iWidth,
					height: iHeight,
					left: ($(window).width() - iWidth) / 2,
					top: ($(window).height() - opt.height) / 2
				}).appendTo(document.body).animate({opacity: 1},2000);

				var oImg = new Image();
				oImg.onload = function(){
					$lightboxImg.children('.loading').hide();
					this.width = iWidth;
					this.height = iHeight;
					$lightboxImg.append(oImg);
				};
				oImg.src = opt.src;
				$description.css({
					width: iWidth,
					left: ($(window).width() - iWidth) / 2,
					top: ($(window).height() - opt.height) / 2 + iHeight
				}).appendTo(document.body);
			});
			$lightbox.on('click',function(){
				that.close({
					lightbox: $lightbox,
					lightboxImg: $lightboxImg,
					description: $description
				});
			});
			$lightboxImg.children('.close').on('click',function(){
				that.close({
					lightbox: $lightbox,
					lightboxImg: $lightboxImg,
					description: $description
				});
			});
		},
		close: function(opt){
			$(opt.lightbox).remove();
			$(opt.lightboxImg).remove();
			$(opt.description).remove();
			
		}
	};
});



