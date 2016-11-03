	$(document).ready(function() {
	    // Hide menu once we know its width
	    $('#showmenu').click(function() {
	        var $menu = $('.menu');
	        if ($menu.is(':visible')) {
	            // Slide away
	            $menu.animate({right: -($menu.outerWidth() + 10)}, function() {
	                $menu.hide();
	            });
	        }
	        else {
	            // Slide in
	            $menu.show().animate({right: 0});
	        }
	    });

	    $('#hidemenu').click(function() {
	    	 var $menu = $('.menu');
	        if ($menu.is(':visible')) {
	            // Slide away
	            $menu.animate({right: -($menu.outerWidth() + 10)}, function() {
	                $menu.hide();
	            });
	        }
	        else {
	            // Slide in
	            $menu.show().animate({right: 0});
	        }

	    });

	    // show and hide submenu
	

		$(document).ready(function(){
			if ($(window).width() > 767) {

				$( "li.dropdown" )
				.mouseenter(function() {
					$(this).addClass('menu_open');
				    $('.menu_open .sub_menu').css('display', 'block');
				  })
				.mouseleave(function() {
				    $(this).removeClass('menu_open');
				    $('.sub_menu').css('display', 'none');
				  });
			}else{
				$('.menu').addClass('mobile-menu');
				$( "span.arrow_icon" ).click(function() {
				  $(this).parent().addClass('menu_open');
				    $('.menu_open .sub_menu').css('display', 'block');
				});
			}
		});

});
