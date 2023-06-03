jQuery(document).ready(function($){
	$(document).ready(function(){
		var widthWindow = $(window).width();
        $.fancybox.defaults.btnTpl.counter = '<div><span data-fancybox-index></span> / <span data-fancybox-count></span></div>';
            console.log($('[data-fancybox="gallery"]').fancybox())
            $('[data-fancybox="gallery"]').fancybox({
            loop    : true,
            arrows  : true,
            infobar : true,
            margin  : [44,0,22,0],
            buttons : [
                'arrowLeft',
                'counter',
                'arrowRight',
                'close'
            ],
            thumbs : {
                autoStart : true,
                axis : 'x'
            }
            })
        $('.header-language-dropdown .close-click').click(function(){
            $('.mobile-nav .header-language-dropdown .nav-dropdown').hide();
            $('.mobile-nav .header-language-dropdown').removeClass('current-dropdown');
        });
        
        $(".list-menu-page .accordion .accordion-item:first-child .accordion-title").addClass('active');
        $(".list-menu-page .accordion .accordion-item:first-child .accordion-inner").show();
        // Mode Theme
        $('.btn-home span').after('<i class="fa-solid fa-arrow-right"></i>');
        $('.box-lammau .form-check input').change(function(){
            $('.loadding-form').addClass('active');
            $('.item-form').removeClass('active');
            $(this).closest('.item-form').next().addClass('active');
            setTimeout(function(){
                $('.loadding-form').removeClass('active');
            }, 1000);
        });

        $('.blog-post-inner button.button').html('<span>Đọc thêm</span> <i class="fa-solid fa-arrow-right"></i>');
        $('.more-icon').click(function(){
            $(this).next().toggleClass('active');
        });
		if(widthWindow < 550){
			$('.btn-table-contentshow').click(function(){
				$('.table-content-sidebar').show();
				$('.overlayCustom').addClass('active');
			});
			$('.btn-close-modal').click(function(){
				$('.table-content-sidebar').hide();
				$('.overlayCustom').removeClass('active');
			});
			$('.ez-toc-link').click(function(){
				$('.table-content-sidebar').hide();
				$('.overlayCustom').removeClass('active');
			});
		}
		var headerHeight = $('#header').innerHeight();
        var Content= $('#content').innerHeight();
        var topToContents = headerHeight + Content;
        var heightStop = topToContents - $('.table-content-sidebar #custom_html-2').innerHeight();
		if(widthWindow > 980){
			$(window).scroll(function () {
                var sticky = $('.table-content-sidebar #custom_html-2'),
                    scroll = $(window).scrollTop();
    
                if (scroll >= headerHeight && scroll < heightStop){
                    sticky.addClass('sticky');
                    sticky.removeClass('stopBottom');
                }else if(scroll >= headerHeight && scroll >  heightStop){
                    sticky.addClass('stopBottom');
                    sticky.removeClass('sticky');
                }else{
                    sticky.removeClass('sticky');
                    sticky.removeClass('stopBottom');
                }
            });
		}
        wow = new WOW(
        {
            animateClass: 'animated',
            offset:  100,
            callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
        );
        wow.init();
        $(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });
    });	
});

