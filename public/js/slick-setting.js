jQuery(function($){//コンフリクト回避
  $(document).ready(function(){
		var $slideshow = $('.top-slider');
			var $slide = $('.top-slider-item');
			function randomize(selector){
			  $slideshow.find(selector).sort(function(){
			    return Math.round(Math.random()) - 0.5;
			  }).detach().appendTo($slideshow);
			}
			$(function(){
			  randomize('.top-slider-item');
			  $slideshow.slick({
					$slide,
					autoplay: false,
					// 自動再生で切り替えをする時間
					//autoplaySpeed: 4000,
					accessibility: false,
					//arrows: false,
					// 自動再生や左右の矢印でスライドするスピード
					speed: 1000,
					slidesToShow: 1,
					slidesToScroll: 1,
					centerPadding: '0px',
					prevArrow: '<button type="button" class="slick-prev"></button>',
					nextArrow: '<button type="button" class="slick-next"></button>',
					responsive:[
						{
							breakpoint: 480,
							settings: {
								vertical: false,
								speed: 1000,
								slidesToShow: 1,
								slidesToScroll: 1,
								//centerMode: true,
								//centerPadding: '10%',
								infinite:true,
								arrows: true,
						 }
					 }
				 ]
				});
			});
});
});
