// Wow Initiate
// wow animation
wow = new WOW({
    boxClass: "wow", // default
    animateClass: "animated", // default
    offset: 0, // default
    mobile: false, // default
    live: true, // default
});
wow.init();



// Popular Courses
$('.hero-banner .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false
});



// Top Trainer
$('.sec-member .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    items: 4,
    responsive: {
        0: {
            items: 1,
            margin: 15
        },
        767: {
            items: 2
        },
        992: {
            items: 4
        },
        1000: {
            items: 4
        }
    }
});


//Loader
$(window).on('load', function () {
    $('.loader').fadeOut(1500);
});

// Light Gallery
$("#lightGallery").lightGallery();


var heightH = $('header').height();
var heightF = $('footer').height();
var heightT = heightH + heightF;

//Main wrapper subtract height from header and footer on resize
$(window).on('load resize scroll', function (e) {

    $('main').css({
        'min-height': 'calc(100vh - ' + heightT + 'px)',
        // 'margin-top': heightH
    });

});


$(window).on('load resize', function (e) {
    $('.sec-hero-banner').css({
        'height': 'calc(100vh - ' + heightH + 'px)',
    });

});



// sticky header
$(window).scroll(function () {
    var st = $(this).scrollTop();
    if (st > heightH) {
        $("header").addClass("sticky");
    } else {
        $("header").removeClass("sticky");
    }
});



// Mobile toggle
$('.mobile-toggles').click(function () {
    $('body').toggleClass('open');
});
$('.overlay').click(function () {
    $('body').removeClass('open');
});

// Lettering 
$(".sec-hero-text h2").lettering('words');


$(document).ready(function () {
    var $gallery = $('#gallery');
    var $boxes = $('.portfolio-item');
    $boxes.hide();

    $gallery.imagesLoaded({
        background: true
    }, function () {
        $boxes.fadeIn();

        $gallery.isotope({
            // options
            sortBy: 'original-order',
            layoutMode: 'fitRows',
            itemSelector: '.portfolio-item',
            stagger: 30,
        });
    });

    $('.portfolio-button').on('click', function () {
        var filterValue = $(this).attr('data-filter');
        $('#gallery').isotope({
            filter: filterValue
        });
        $gallery.data('lightGallery').destroy(true);
        $gallery.lightGallery({
            selector: filterValue.replace('*', '')
        });
    });
});

$(document).ready(function () {
    $("#gallery").lightGallery({
        subHtmlSelectorRelative: true,
        thumbnail: false
    });
});

//button active mode
$('.portfolio-button').click(function () {
    $('.portfolio-button').removeClass('is-checked');
    $(this).addClass('is-checked');
});



// News Slider
$('#news-slider').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        }
    }
})

// Testimonial

$('#testimonial').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})


// our partner

$('#our-partner').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})

// toggle button


//toggle
$("#nav-icon").click(function () {
    $(this).toggleClass("open");
    $("body").toggleClass("menu-open");
});

$(".overlay-close, header ul li a").click(function () {
    $("#nav-icon").removeClass("open");
    $("body").removeClass("menu-open");
});

// radio button popup

$('.no-radio').click(function () {
    $('#radioModal').modal('show');

});
// radio button popup

$('.no-radio2').click(function () {
    $('#radioModal2').modal('show');

});