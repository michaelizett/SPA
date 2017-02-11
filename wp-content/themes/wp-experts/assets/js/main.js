jQuery(document).ready(function($) {
	"use strict";
	
	/* window */
	var window_width, window_height, scroll_top;
	
	/* admin bar */
	var adminbar = $('#wpadminbar');
	var adminbar_height = 0;
	
	/* header menu */
	var header = $('#cshero-header');
	var header_top = 0;
	
	/* scroll status */
	var scroll_status = '';
	
	/**
	 * window load event.
	 * 
	 * Bind an event handler to the "load" JavaScript event.
	 * @author Fox
	 */
	$(window).on('load', function() {
		
		/** current scroll */
		scroll_top = $(window).scrollTop();
		
		/** current window width */
		window_width = $(window).width();
		
		/** current window height */
		window_height = $(window).height();
		
		/* get admin bar height */
		adminbar_height = adminbar.length > 0 ? adminbar.outerHeight(true) : 0 ;
		
		/* get top header menu */
		header_top = header.length > 0 ? header.offset().top - adminbar_height : 0 ;
		
		/* check sticky menu. */
		if(CMSOptions.menu_sticky == '1'){
			cms_stiky_menu(scroll_top);
		}
		
		/* check video size */
		cms_auto_video_width();

		/* check mobile menu */
		cms_mobile_menu();

		/* page loading */
		cms_page_loading();

		/* Encroll */
		cms_enscroll();

		/* CMS Add Class */
		cms_add_class();

		cms_scroll_to_content();

		demos();
		
		/* check back to top */
		if(CMSOptions.back_to_top == '1'){
			/* add html. */
			$('body').append('<div id="back_to_top" class="back_to_top"><span class="go_up"></span></div><!-- #back-to-top -->');
			cms_back_to_top();
		}
		$(".cms-carousel-attorney-layout1").css('opacity','1');
		$(".view-demos").css('opacity','1');
		$(".vc_row-o-full-height").addClass('row-show').css('opacity','1');
		$('a[href="'+window.location.href+'"]').trigger('click');
	});
	
	/**
	 * reload event.
	 * 
	 * Bind an event handler to the "navigate".
	 */
	window.onbeforeunload = function(){ cms_page_loading(1); }

	/**
	 * resize event.
	 * 
	 * Bind an event handler to the "resize" JavaScript event, or trigger that event on an element.
	 * @author Fox
	 */
	$(window).on('resize', function(event, ui) {
		/** current window width */
		window_width = $(event.target).width();
		
		/** current window height */
		window_height = $(window).height();
		
		/** current scroll */
		scroll_top = $(window).scrollTop();
		
		/* check sticky menu. */
		if(CMSOptions.menu_sticky == '1'){
			cms_stiky_menu(scroll_top);
		}
		
		/* check mobile menu */
		cms_mobile_menu();

		/* check video size */
		cms_auto_video_width();

		/* Encroll */
		cms_enscroll();

		demos();
	});
	
	/**
	 * scroll event.
	 * 
	 * Bind an event handler to the "scroll" JavaScript event, or trigger that event on an element.
	 * @author Fox
	 */
	var lastScrollTop = 0;
	
	$(window).on('scroll', function() {
		/** current scroll */
		scroll_top = $(window).scrollTop();
		/** check scroll up or down. */
		if(scroll_top < lastScrollTop) {
			/* scroll up. */
			scroll_status = 'up';
		} else {
			/* scroll down. */
			scroll_status = 'down';
		}
		
		lastScrollTop = scroll_top;
		
		/* check sticky menu. */
		if(CMSOptions.menu_sticky == '1'){
			cms_stiky_menu();
		}
		
		/* check back to top */
		cms_back_to_top();
	});

	/**
	 * Stiky menu
	 * 
	 * Show or hide sticky menu.
	 * @author Fox
	 * @since 1.0.0
	 */
	function cms_stiky_menu() {
		if (header_top < scroll_top) {
			switch (true) {
				case (window_width > 0):
					header.addClass('header-fixed');
					break;
			}
		} else {
			header.removeClass('header-fixed');
		}
	}
	
	/**
	 * Mobile menu
	 * 
	 * Show or hide mobile menu.
	 * @author Fox
	 * @since 1.0.0
	 */
	
	$('body').on('click', '#cshero-menu-mobile .cms-icon-menu', function(){
		var navigation = $(this).parents().find('#cshero-header-navigation');
		if(!navigation.hasClass('collapse')){
			navigation.addClass('collapse');
		} else {
			navigation.removeClass('collapse');
		}
	});
	/**
	 * Page Loading.
	 */
	function cms_page_loading($load) {
		switch ($load) {
		case 1:
			$('#cms-loadding').css('display','block')
			break;
		default:
			$('#cms-loadding').css('display','none')
			break;
		}
	}
	/* check mobile screen. */
	function cms_mobile_menu() {
		var menu = $('#cshero-header-navigation');
		
		/* active mobile menu. */
		switch (true) {
		case (window_width <= 992 && window_width >= 768):
			menu.removeClass('phones-nav').addClass('tablets-nav');
			/* */
			cms_mobile_menu_group(menu);
			break;
		case (window_width <= 768):
			menu.removeClass('tablets-nav').addClass('phones-nav');
			break;
		default:
			menu.removeClass('mobile-nav tablets-nav');
			menu.find('li').removeClass('mobile-group');
			break;
		}	
	}
	function demos() {
		var demo_content_h = $('.view-demos-content').height();
		$('.view-demos').css('margin-bottom',-demo_content_h+'px');
		$('.view-demos .open').on('click', function() {
	    	$('.view-demos').toggleClass('opened');
	    })
	}
	/**
	 * One page
	 * 
	 * @author Fox
	 */
	if(CMSOptions.one_page == true){
		
		var one_page_options = {'filter' : '.onepage'};
		
		if(CMSOptions.one_page_speed != undefined) one_page_options.speed = parseInt(CMSOptions.one_page_speed);
		if(CMSOptions.one_page_easing != undefined) one_page_options.easing =  CMSOptions.one_page_easing;
		$('#site-navigation').singlePageNav(one_page_options);
	}
	
	/* Group Sub Menu */
	function cms_mobile_menu_group(nav) {
		nav.each(function(){
			$(this).find('li').each(function(){
				if($(this).find('ul:first').length > 0){
					$(this).addClass('mobile-group');
				}
			});
		});
	}

	/* Scroll To Content */
	function cms_scroll_to_content() { 
		$('.scroll-to-content').on('click', function(e) {
			var id_scroll = $(this).attr('href');
			var sticky_height = $('.header-fixed').height();
			e.preventDefault();
			$("html, body").animate({ scrollTop: $(id_scroll).offset().top - 55 }, 800);
		});
	}

    /* CMS Image Popup */
    $('.cms-image-zoom').magnificPopup({
	  delegate: 'a.p-view', // child items selector, by clicking on it popup will open
	  type: 'image',
	  mainClass: 'mfp-fade',
	  // other options
	});

	/* Video Light Box */
	$('.cms-button-video').magnificPopup({
		//disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
	/**
	 * Parallax.
	 * 
	 * @author Fox
	 * @since 1.0.0
	 */
	var cms_parallax = $('.cms_parallax');
	if(cms_parallax.length > 0){
		cms_parallax.each(function() {
			"use strict";
			var speed = $(this).attr('data-speed');
			
			speed = (speed != undefined && speed != '') ? speed : 0.1 ;
			
			$(this).parallax("50%", speed);
		});
	}
	
	
	/**
	 * Back To Top
	 * 
	 * @author Fox
	 * @since 1.0.0
	 */
	$('body').on('click', '#back_to_top', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
    });

    /* Show Tooltip */
    $('.cs-social.default [data-rel="tooltip"]').tooltip();
    $('.single-gallery-wrap [data-rel="tooltip"]').tooltip();
	/* Replae placeholder input mail newsletter */
	$('#sidebar #searchform').find("input[type='text']").each(function(ev) {
	    if(!$(this).val()) { 
	        $(this).attr("placeholder", "Search...");
	    }
	});
	$('#searchform').find("input[type='text']").each(function(ev) {
	    if(!$(this).val()) { 
	        $(this).attr("placeholder", "Type Your Search Words");
	    }
	});

	$('.tnp-field-email').find("input[type='email']").each(function(ev) {
	    if(!$(this).val()) { 
	        $(this).attr("placeholder", "Subscribe Our Newsletter");
	    }
	});

	/* Show or Hide Buttom  */
	function cms_back_to_top(){
		/* Back To Top */
        if (scroll_top < window_height) {
        	$('#back_to_top').addClass('off').removeClass('on');
        } else {
        	$('#back_to_top').removeClass('off').addClass('on');
        }
	}
	
	/* Hide Search Form. */
	$(document).on('click',function(e){
		
		if(e.target.className == 'widget-search-header open')
		
		$('.widget-search-header').removeClass('open');
    });

	/**
	 * Auto width video iframe
	 * 
	 * Youtube Vimeo.
	 * @author Fox
	 */
	function cms_auto_video_width() {
		$('.entry-video iframe').each(function(){
			var v_width = $(this).width();
			
			v_width = v_width / (16/9);
			$(this).attr('height',v_width + 35);
		})
	}	
	/**
	 * Enscroll
	 * 
	 * 
	 * @author Fox
	 */
	function cms_enscroll() {
		$('.cshero-hidden-sidebar .sidebar-inner').enscroll();
		$('#cshero-header-left').enscroll();
	}

	 /* CMS Gallery Popup */
    $('.cms-gallery-item').magnificPopup({
	  delegate: 'a.p-view', // child items selector, by clicking on it popup will open
	  type: 'image',
	  gallery: {
	     enabled: true
	  },
	  mainClass: 'mfp-fade'
	});

	/**
	 * Add Class
	 * 
	 * 
	 * @author Fox
	 */
	function cms_add_class() {
	    $(".cart-contents").on('click',function(){
			$('.widget_shopping_cart').toggleClass('open');
	    })
	    $(".nav-button-icon .fa-search").on('click',function(){
			$('.widget-search-header').toggleClass('open');
	    })
	    $(".nav-button-icon .h-cart-wrapper").on('click',function(){
			$('.widget_shopping_cart').toggleClass('open');
	    })

	    $("#cshero-header-navigation .hidden-sidebar").on('click',function(){
			$('.cshero-hidden-sidebar').toggleClass('open');
			$('#cms-theme').toggleClass('hidden-sidebar-active');
	    })
	    $(".get-form-quote").on('click',function(){
			$('.quote-form-popup-wrapper').addClass('open');
	    })
	    $(".quote-form-popup-wrapper .form-close").on('click',function(){
			$('.quote-form-popup-wrapper').removeClass('open');
	    })
	}
	/* Woo - Add class */
    $('.plus').on('click', function(){
    	$(this).parent().find('input[type="number"]').get(0).stepUp();
    });
    $('.minus').on('click', function(){
    	$(this).parent().find('input[type="number"]').get(0).stepDown();
    });
	/* Remove Search Popup & Hidden Sidebar */
	$(document).on('keyup',function(evt) {
	    if (evt.keyCode == 27) {
	       $('.quote-form-popup-wrapper').removeClass('open');
	       $('#cms-theme').removeClass('hidden-sidebar-active');
	    }
	});
	$(document).on('click',function(e){
		
		if(e.target.className == 'quote-form-popup-wrapper open')
		
		$('.quote-form-popup-wrapper').removeClass('open');
    });
	$('.sidebar-close').on('click',function(){
    	$('.cshero-hidden-sidebar').removeClass('open');
    	$('#cms-theme').removeClass('hidden-sidebar-active');
    });
    /* Add Class Input Contact Form */
    $(".wpcf7-form-control").focus(function(){
        $('.input-filled').removeClass('input-filled-active');
        $(this).parents('.input-filled').addClass('input-filled-active');
    })
    $(".wpcf7-form-control").focusout(function(){
        $(this).parents('.input-filled').removeClass('input-filled-active');
    });
    $(".br-style8").parents('#page-wrapper').addClass('pt-style8');
    $(".br-style8").parents('#cms-theme').addClass('header-pt-style8');

    /* Disnable Link */
    $(".dislink a").click(function() { return false; });

    /* Login + Register */

	$('.login-open').on('click',function(){
		$('.cms-login-wrap').addClass('open');
    });
    $('.register-open').on('click',function(){
		$('.cms-register-wrap').addClass('open');
    });
    $('.switch_to_login').on('click',function(){
    	$('.cms-register-wrap').removeClass('open');
		$('.cms-login-wrap').addClass('open');
    });
    $('.switch_to_sign_up').on('click',function(){
    	$('.cms-login-wrap').removeClass('open');
		$('.cms-register-wrap').addClass('open');
    });
    $(document).on('keyup',function(evt) {
	    if (evt.keyCode == 27) {
	       $('.cms-login-wrap').removeClass('open');
	       $('.cms-register-wrap').removeClass('open');
	    }
	});
	$(document).on('click',function(e){
		
		if(e.target.className == 'cms-login-wrap cms-popup open') {
			$('.cms-login-wrap').removeClass('open');
		}
		if(e.target.className == 'cms-register-wrap cms-popup open') {
			$('.cms-register-wrap').removeClass('open');
		}
    });

    /* Mobile Menu Left */
    $('#cshero-menu-left-mobile').on('click',function(){
    	$('#cshero-menu-left-mobile .popup_menu').toggleClass('active');
    	$('.header-21').toggleClass('menu-left-open');
    });
    
});