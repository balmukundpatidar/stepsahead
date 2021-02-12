
/* =========/=========/=========/=========/=========/=========/=========
	
	* 1.  // Preloader *
	* 2.  // Responsive Menu *
	* 3.  // AddClass (current) *
	* 4.  // Search *
	* 5.  // Fixed menu *
	* 6.  // AOS  *
	* 7.  // Counter Up *
	* 8.  // Testimonial Slider *
	* 9. // Partner Carousel *
	* 10. // Tooltip *
	* 11. // Maps *
	* 12. // Scroll to top *
	* 13. // Contact Form *
	* 14. // Colorbox popup *
	* 15. // Colorbox popup Reply form *
	* 16. // Add class Active *
	* 17. // Placeholder on focus *
	
=========/=========/=========/=========/=========/=========/========= */
(function($) {
    
	"use strict";
		
		/*=========/=========/=========/=========/=========/=========/=========
			Preloader
		=========/=========/=========/=========/=========/=========/=========*/
		
		$(window).on('load', function() { 
			$('#loader').fadeOut(); 
			$('#preloader').delay(550).fadeOut('slow'); 
			$('body').delay(450).css({'overflow':'visible'});
		})
		
		/* =========/=========/=========/=========/=========/=========/=========
			Responsive Menu
		=========/=========/=========/=========/=========/=========/========= */

		$(document).ready(function () {
             $("#respMenu").aceResponsiveMenu({
				resizeWidth: '768',
				animationSpeed: 'fast',
				accoridonExpAll: false
             });
         });

		/* =========/=========/=========/=========/=========/=========/=========
			AddClass (current)
		=========/=========/=========/=========/=========/=========/========= */

		 $('.menu-toggle button').on('click',function(){
			if ( $(this).hasClass('current') ) {
				$(this).removeClass('current');
			} else {
				$('button.current').removeClass('current');
				$(this).addClass('current');
			}
		});
		
		/* =========/=========/=========/=========/=========/=========/=========
			Search
		=========/=========/=========/=========/=========/=========/========= */
		
		$(function () {
			$('a[href="#search"]').on('click', function(event) {
				event.preventDefault();
				$('#search').addClass('open');
				$('#search > form > input[type="search"]').focus();
			});
			$('#search, #search button.close').on('click keyup', function(event) {
				if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
					$(this).removeClass('open');
				}
			});
			$('form').submit(function(event) {
				event.preventDefault();
				return false;
			})
		});
		
		
		/* =========/=========/=========/=========/=========/=========/=========
			Fixed menu
		=========/=========/=========/=========/=========/=========/========= */
		
		$(window).on('scroll', function () {
			if ($(window).scrollTop() > 50) {
				$('.top-head').addClass('fixed-menu');
			} else {
				$('.top-head').removeClass('fixed-menu');
			}
		});
		

		/* =========/=========/=========/=========/=========/=========/=========
			Portfolio filters
		=========/=========/=========/=========/=========/=========/========= */
		
        $(".project-menu span").on('click', function () {
            $(".project-menu span").removeClass('active');
            $(this).addClass('active');
            var filterValue = $(this).attr('data-filter');
            $(".project-gird").isotope({
                filter: filterValue
            });
        }); 

		/* =========/=========/=========/=========/=========/=========/=========
			Scroll to top  
		=========/=========/=========/=========/=========/=========/========= */
		
		if ($('#scroll-to-top').length) {
			var scrollTrigger = 100, // px
				backToTop = function () {
					var scrollTop = $(window).scrollTop();
					if (scrollTop > scrollTrigger) {
						$('#scroll-to-top').addClass('show');
					} else {
						$('#scroll-to-top').removeClass('show');
					}
				};
			backToTop();
			$(window).on('scroll', function () {
				backToTop();
			});
			$('#scroll-to-top').on('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 700);
			});
		}

		
		/* =========/=========/=========/=========/=========/=========/=========
			Add class Active
		=========/=========/=========/=========/=========/=========/========= */
		var submitContact = $('#submit_contact'),
		message = $('#msg');
			submitContact.on('click', function(e){
				e.preventDefault();
				var $this = $(this);
				$.ajax({
					type: "POST",
					url: "/contact",
					// url: "http://localhost:85/project/creekrecriut/public/contact",

					dataType: 'json',
					cache: false,
					data: $('#contact-form').serialize(),
					error: function(returnval) {
						alert('error');
					},

					success: function(data) {
						console.log(data)
						alert('Your Message Sent successfully');
                        $(".messsage").append("<div class='alert alert-success' >Your Message Sent successfully</b></div>");
                        $("#contact-form")[0].reset();
					}
				});
			});		$('#accordion .card-header a').on( "click", function() {
			$('#accordion .card-header').removeClass('active');
			if(!$(this).closest('.card').find('.collapse').hasClass('show'))
				$(this).parents('.card-header').addClass('active');
		 });
		 
		$('#accordion-a .card-header a').on( "click", function() {
			$('#accordion-a .card-header').removeClass('active');
			if(!$(this).closest('.card').find('.collapse').hasClass('show'))
				$(this).parents('.card-header').addClass('active');
		 });
		 
		 
		/* =========/=========/=========/=========/=========/=========/=========
			Placeholder on focus 
		=========/=========/=========/=========/=========/=========/========= */
		  
        // $("input,textarea").each( function(){
			// $(this).data('holder',$(this).attr('placeholder'));
        //     $(this).on('focusin', function() {
        //         $(this).attr('placeholder','');
        //     });
        //     $(this).on('focusout', function() {
        //         $(this).attr('placeholder',$(this).data('holder'));
        //     });
        // });
		

		
		
		
		
		
		

		
})(jQuery);
