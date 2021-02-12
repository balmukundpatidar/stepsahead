// Wow Initiate
new WOW().init();



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



// Sticky Header
let header = document.getElementsByTagName("header")[0];
let prevScrollpos = window.pageYOffset;

window.onscroll = () => {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        header.classList.remove('sticky');
    } else {
        header.classList.add('sticky');
    }
    prevScrollpos = currentScrollPos;
}

// Main wrapper subtract height from header and footer on resize
$(window).on('load resize scroll', function (e) {
    var heightH = $('header').height();
    var heightF = $('footer').height();
    var heightT = heightH + heightF;
    $('main').css({
        'min-height': 'calc(100vh - ' + heightT + 'px)'
    });
    if ($('header').hasClass("sticky")) {
        $('.sticky').css({
            'top': -heightH - 30
        });
    } else {
        $('header').css({
            'top': ''
        });
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


// Isotope 
function portfolio_isotope() {
    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.portfolio-item',
        masonry: {
            columnWidth: '.isotope-sizer'
        },
        getSortData: {
            name: '.name',
            symbol: '.symbol',
            number: '.number parseInt',
            category: '[data-category]',
            weight: function (itemElem) {
                var weight = $(itemElem).find('.weight').text();
                return parseFloat(weight.replace(/[\(\)]/g, ''));
            }
        }
    });

    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function () {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function () {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };

    // filter button click
    $('#filters').on('click', '.portfolio-button', function () {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({
            filter: filterValue
        });
    });

    //  sort button click
    $('#sorts').on('click', '.portfolio-button', function () {
        var sortByValue = $(this).attr('data-sort-by');
        $grid.isotope({
            sortBy: sortByValue
        });
    });

    // change is-checked class on buttons
    $('.portfolio-buttons').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', '.portfolio-button', function () {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });
}

$(window).on("load", function () {
    portfolio_isotope();
});


// News Slider
$('#news-slider').owlCarousel({
    loop: true,
    margin: 15,
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
    loop: false,
    margin: 0,
    nav: false,
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

// map


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