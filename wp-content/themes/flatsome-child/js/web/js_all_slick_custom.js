jQuery(document).ready(function($){
	$(document).ready(function(){
		$('.slider-TinhTrang').slick({
			dots: false,
            infinite: true,
            speed: 1000,
            slidesToScroll: 1,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<i class="btn-prev"></i>',
            nextArrow: '<i class="btn-next"></i>',
			swipeToSlide: true,
			allowTouchMove: false,
			pauseOnHover:false,
			focusOnSelect: true,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1,
						infinite: true,
						}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});

		$('.child-slider-top').slick({
			dots: false,
            infinite: true,
            speed: 1000,
            slidesToScroll: 1,
            slidesToShow: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            prevArrow: '<i class="btn-prev"></i>',
            nextArrow: '<i class="btn-next"></i>',
			swipeToSlide: true,
			allowTouchMove: false,
			focusOnSelect: true,
			pauseOnHover:false,
			asNavFor: '.syc-slider',
		});
		$('.child-slider-bottom').slick({
			dots: false,
            infinite: true,
            speed: 1000,
            slidesToScroll: 1,
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 2500,
            prevArrow: '<i class="btn-prev"></i>',
            nextArrow: '<i class="btn-next"></i>',
			swipeToSlide: true,
			allowTouchMove: false,
			focusOnSelect: true,
			pauseOnHover:false,
			asNavFor: '.syc-slider',
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});

		$('.inner_slider_team').slick({
			dots: false,
            infinite: true,
            speed: 1000,
            slidesToScroll: 1,
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<i class="btn-prev"></i>',
            nextArrow: '<i class="btn-next"></i>',
			swipeToSlide: true,
			allowTouchMove: false,
			pauseOnHover:false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});
	});
});