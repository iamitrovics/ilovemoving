//@prepros-prepend modernizr.js
//@prepros-prepend bootstrap4\bootstrap.bundle.js
//@prepros-prepend easing.js
//@prepros-prepend skip-link-focus-fix.js
//@prepros-prepend moment\moment-with-locales.min.js
//@prepros-prepend jquery.fancybox.min.js
//@prepros-prepend bootstrap-select.js
//@prepros-prepend jquery-ui.min.js
//@prepros-prepend slick.js
//@prepros-prepend sliding-menu.js

/* $ = jQuery.noConflict(); */
(function($) {
	jQuery(document).ready(function() {
		// Sticky header
		jQuery(window).scroll(function() {
		  if ($(this).scrollTop() > 0){  
		      $('#menu_area').addClass("sticky");
		    }
		    else{
		      $('#menu_area').removeClass("sticky");
		    }
		});


        $('.popup-header').click(function() {
            $(".sticky-popup").addClass("slide-hide");
        });


       
        $('#cookie-notice').addClass('slide-up');

        $('#close-notice, #accept-cookie').click(function(e) {
            e.preventDefault();
            $("#cookie-notice").removeClass("slide-up");
            $("#cookie-notice").addClass("slide-down");
        });


        // fancybox video
        $(".about-video .various").fancybox({
            maxWidth  : 800,
            maxHeight : 600,
            fitToView : false,
            width   : '90%',
            height    : '90%',
            autoSize  : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
        });

        $(".faq__accordion, .content__accordion").accordion({
            heightStyle: "content",
            autoHeight: false,
            clearStyle: true,
            active: 0,
            collapsible: true,
            header: '> div.faq-wrap >h3'
        });

		// desktop multilevel menu
		$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	      	if (!$(this).next().hasClass('show')) {
	        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	      }
	      var $subMenu = $(this).next(".dropdown-menu");
	      $subMenu.toggleClass('show');
	      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
	        $('.dropdown-submenu .show').removeClass("show");
	      });
	      return false;
	    })

	    // mobile multilevel menu
        $("#menu").slidingMenu();

	 	jQuery("#top__mobile .menu-btn").click(function(){
	    	jQuery(".menu-overlay").addClass("active-overlay");
            jQuery('.main-menu-sidebar').addClass("menu-active");
	    });
	   
	    jQuery('.main-menu-sidebar .close-menu-btn, .menu-overlay').click(function(){
	        jQuery('.main-menu-sidebar').removeClass("menu-active");
	        jQuery(".menu-overlay").removeClass("active-overlay");
	    });

        $(function () {
            
            var date1 = new Date('05/05/2021');
            var date2 = new Date('05/20/2021');

            var date3 = new Date('06/05/2021');
            var date4 = new Date('06/20/2021');

            var date5 = new Date('07/05/2021');
            var date6 = new Date('07/20/2021');                
                
            $(".date-picker-input").datepicker({
                minDate: '0',
                showOtherMonths: true,
                selectOtherMonths: true,
                
                
                beforeShowDay: function( date ) {
                    var highlight = date >= date1 && date <= date2
                    var highlight2 = date >= date3 && date <= date4
                    var highlight3 = date >= date5 && date <= date6
                    if( highlight || highlight2 || highlight3 ) {
                         return [true, "event", 'Tooltip text'];
                    } else {
                         return [true, '', ''];
                    }
                }
        
            });

    });

    $('.date-picker-input').on('click', function(e) {
      e.preventDefault();
      $(this).attr("autocomplete", "off");  
   });

   $(".date-picker-input").attr("autocomplete", "off");

        // Fancybox
        $('#gallery-page [data-fancybox="gallery"]').fancybox();

        $('#blog-page .blog-photo [data-fancybox="gallery"]').fancybox();
	
		//$('#top-cta .features-list .feature-box h3').matchHeight();

   
        $(document).on('click', '.moving-tips .moving-item h4 a', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top-150
            }, 500);
        });
         $("#toggle-tl").click(function(){
            $("#top-license p").slideToggle();
        });
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#go-to-top').addClass('on');
            } else {
                jQuery('#go-to-top').removeClass('on');
            }
        });
        jQuery('#go-to-top').click(function() {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
        });
        /*$('#city-reviews-slider').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            autoplay: false,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: false,
                        autoplaySpeed: 8000
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        autoplay: false,
                        autoplaySpeed: 8000
                    }
                },

                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: false,
                        infinite: false,
                        autoplaySpeed: 8000
                    }
                },

            ]
        });*/

        $(document).ready(function () {
			$("#car-form").hide();

            $('#move-type').change(function () {
                if ($("#move-type").val() == "I want to ship my car!") {
                    $("#car-form").show();
                    $("#move-size-form").hide();
        
                } else {
                    $("#move-size-form").show();
                    $("#car-form").hide();

                }
            });

		});

        $(document).ready(function () {
			$("#car-form-aside").hide();

            $('#move-type-aside').change(function () {
                if ($("#move-type-aside").val() == "I want to ship my car!") {
                    $("#car-form-aside").show();
                    $("#move-size-form-aside").hide();
        
                } else {
                    $("#move-size-form-aside").show();
                    $("#car-form-aside").hide();

                }
            });

		});

        $('#city-reviews-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            adaptiveHeight: true,
            arrows: true,
        });
        $(document).on('click', '#city-services .city-services-list .csl-item a', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top-125
            }, 500);
        });
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#go-to-top').addClass('on');
            } else {
                jQuery('#go-to-top').removeClass('on');
            }
        });
        jQuery('#go-to-top').click(function() {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
        });
	});
})(jQuery);
