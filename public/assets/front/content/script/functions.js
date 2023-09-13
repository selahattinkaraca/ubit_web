jQuery(document).ready(function ($) {

    'use strict';
    //***************************
    // Sticky Header Function
    //***************************
    jQuery(window).scroll(function () {
        if ($(window).innerWidth() > 767) {
            if (jQuery(this).scrollTop() > 170) {
                jQuery('body').addClass("bkbasketbol-sticky");
            }
            else {
                jQuery('body').removeClass("bkbasketbol-sticky");
            }
        }
    });

    //***************************
    // BannerOne Functions
    //***************************
    jQuery('.bkbasketbol-banner-one').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        infinite: true,
        dots: false,
        arrows: true,
        fade: true,
        prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
        nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //***************************
    // fixtureSlider Functions
    //***************************
    jQuery('.bkbasketbol-fixture-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots: false,
        prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
        nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
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
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //***************************
    // FeaturedSlider Functions
    //***************************
    jQuery('.bkbasketbol-featured-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots: false,
        prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
        nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //***************************
    // ThumbSlider Functions
    //***************************
    jQuery('.bkbasketbol-player-slider-image').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        asNavFor: '.bkbasketbol-player-slider-nav'
    });
    jQuery('.bkbasketbol-player-slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.bkbasketbol-player-slider-image',
        dots: false,
        vertical: true,
        arrows: false,
        centerMode: false,
        autoplay: true,
        autoplaySpeed: 2000,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    vertical: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    vertical: true,
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    vertical: true,
                }
            }
        ],
    });
    //***************************
    // BannerOne Functions
    //***************************
    jQuery('.bkbasketbol-ticker-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        infinite: true,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //***************************
    // ThumbSlider Functions
    //***************************
    jQuery('.widget-images-thumb').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.widget-images-list'
    });
    jQuery('.widget-images-list').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.widget-images-thumb',
        dots: false,
        vertical: false,
        prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
        nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
        centerMode: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    vertical: false,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    vertical: false,
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    vertical: false,
                }
            }
        ],
    });
    //***************************
    // counter Functions
    //***************************
    jQuery('.counter-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots: false,
        prevArrow: "<span class='slick-arrow-left'><i class='icon-arrows-2'></i></span>",
        nextArrow: "<span class='slick-arrow-right'><i class='icon-arrows-2'></i></span>",
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
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //***************************
    // BannerTwo Functions
    //***************************
    jQuery('.bkbasketbol-banner-two').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots: true,
        arrows: false,
        fade: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //***************************
    // PartnerSlider Functions
    //***************************
    jQuery('.bkbasketbol-partner-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots: false,
        prevArrow: "<span class='slick-arrow-left'><i class='icon-arrows-2'></i></span>",
        nextArrow: "<span class='slick-arrow-right'><i class='icon-arrows-2'></i></span>",
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
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    //***************************
    // Widget Awards Functions
    //***************************
    jQuery('.widget_awards').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        dots: false,
        prevArrow: "<span class='slick-arrow-left'><i class='icon-arrows-2'></i></span>",
        nextArrow: "<span class='slick-arrow-right'><i class='icon-arrows-2'></i></span>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //***************************
    // Click to Top Button
    //***************************
    jQuery('.bkbasketbol-back-top,.bkbasketbol-top-back').on("click", function () {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    //***************************
    // Parent AddClass Function
    //***************************
    jQuery(".bkbasketbol-dropdown-menu,.bkbasketbol-megamenu").parent("li").addClass("subdropdown-addicon");

    //***************************
    // Fancybox Function
    //***************************
    jQuery(".fancybox").fancybox({
        openEffect: 'elastic',
        closeEffect: 'elastic',
    });

    //***************************
    // Counter Function
    //***************************
    jQuery('#word-count1').jQuerySimpleCounter({
        end: 3500,
        duration: 5000
    });
    jQuery('#word-count2').jQuerySimpleCounter({
        end: 124,
        duration: 5000
    });
    jQuery('#word-count3').jQuerySimpleCounter({
        end: 179,
        duration: 5000
    });
    jQuery('#word-count4').jQuerySimpleCounter({
        end: 300,
        duration: 5000
    });
    jQuery(function () {
        // Masonry Functions
        jQuery('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                fitWidth: true
            }
        });
    });
    //***************************
    // CartToggle Function
    //***************************
    jQuery('a.bkbasketbol-open-cart').on("click", function () {
        jQuery('.bkbasketbol-cart-box').slideToggle('slow');
        return false;
    });
    jQuery('html').on("click", function () { jQuery(".bkbasketbol-cart-box").fadeOut(); });

    //***************************
    // Progressbar Function
    //***************************
    jQuery('.progressbar1').progressBar({
        percentage: false,
        animation: true,
        backgroundColor: "#ececec",
        barColor: "#ffdc11",
        height: "12",
    });

    //***************************
    // Countdown Function
    //***************************
    jQuery(function () {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 2, 1 - 1, -600);
        jQuery('#bkbasketbol-countdown,#bkbasketbol-game-countdown,#bkbasketbol-banner-countdown').countdown({
            until: austDay
        });
        jQuery('#year').text(austDay.getFullYear());
    });


});



//$(document).ready(function () {
//    if ($(window).width() < 770) {
//        $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull .bkbasketbol-player.bkbasketbol-player-list li.col-md-6").addClass("d_none");
//        $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull .bkbasketbol-player.bkbasketbol-player-list li.col-md-6").first().removeClass("d_none");
//    }
//    if ($(window).width() > 770) {
//        $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull .bkbasketbol-player.bkbasketbol-player-list li.col-md-6").addClass("d_none");
//        $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull .bkbasketbol-player.bkbasketbol-player-list li.col-md-6").slice(0, 2).removeClass("d_none");        
//    }
//    $(".bkbasketbol-main-content.standingsDisplay .bkbasketbol-main-section table tr").addClass("d_none");
//    $(".bkbasketbol-main-content.standingsDisplay .bkbasketbol-main-section table tr").slice(0, 3).removeClass("d_none");
//    $(".bkbasketbol-main-content.fixturesDisplay .bkbasketbol-fixture.bkbasketbol-fixture-list ul li").addClass("d_none");
//    $(".bkbasketbol-main-content.fixturesDisplay .bkbasketbol-fixture.bkbasketbol-fixture-list ul li").slice(0, 1).removeClass("d_none");
//    $(".bkbasketbol-main-content.staticsDisplay .bkbasketbol-main-section table tr").addClass("d_none");
//    $(".bkbasketbol-main-content.staticsDisplay .bkbasketbol-main-section table tr").slice(0, 3).removeClass("d_none");
//});

//$(document).ready(function () {
//    $(".bkbasketbol-subheader #fixturesBtn").click(function () {
//        $(".bkbasketbol-main-content.fixturesDisplay").toggleClass("d_full");
//        $(".bkbasketbol-main-content.fixturesDisplay .bkbasketbol-fixture.bkbasketbol-fixture-list ul li").toggleClass("d_none");
//        $(".bkbasketbol-main-content.fixturesDisplay .bkbasketbol-fixture.bkbasketbol-fixture-list ul li").slice(0, 1).removeClass("d_none");
//    });
//    $(".bkbasketbol-subheader #staticsBtn").click(function () {
//        $(".bkbasketbol-main-content.staticsDisplay").toggleClass("d_full");
//        $(".bkbasketbol-main-content.staticsDisplay .bkbasketbol-main-section table tr").toggleClass("d_none");
//        $(".bkbasketbol-main-content.staticsDisplay .bkbasketbol-main-section table tr").slice(0, 3).removeClass("d_none");
//    });
//    $(".bkbasketbol-subheader #standingsBtn").click(function () {
//        $(".bkbasketbol-main-content.standingsDisplay").toggleClass("d_full");
//        $(".bkbasketbol-main-content.standingsDisplay .bkbasketbol-main-section table tr").toggleClass("d_none");
//        $(".bkbasketbol-main-content.standingsDisplay .bkbasketbol-main-section table tr").slice(0, 3).removeClass("d_none");
//    });
//    if ($(window).width() < 770) {
//        $(".bkbasketbol-subheader #playersBtn").click(function () {
//            $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull .bkbasketbol-player.bkbasketbol-player-list li.col-md-6").toggleClass("d_none");
//            $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull .bkbasketbol-player.bkbasketbol-player-list li.col-md-6").first().removeClass("d_none");
//            $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull").toggleClass("d_full");
//        });
       
//    }
//    if ($(window).width() > 770) {
//        $(".bkbasketbol-subheader #playersBtn").click(function () {  
//            $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull .bkbasketbol-player.bkbasketbol-player-list li.col-md-6").toggleClass("d_none");
//            $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull .bkbasketbol-player.bkbasketbol-player-list li.col-md-6").slice(0, 2).removeClass("d_none");
//            $(".bkbasketbol-main-content.playersDisplay .bkbasketbol-player-listfull").toggleClass("d_full");            
           
//        });       
//    }
//});



//***************************
// Map Function
//***************************

// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 11,

        // The latitude and longitude to center the map (always required)
        //center: new google.maps.LatLng(40.6700, -73.9400), // New York//
        center: new google.maps.LatLng(41.050629, 29.005525), // Ayhan Şahenk Spor Salonu  
        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{ "featureType": "road.highway", "elementType": "labels", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "off" }] }, { "featureType": "landscape.natural", "elementType": "all", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "on" }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "hue": "#ffe94f" }, { "saturation": 100 }, { "lightness": 4 }, { "visibility": "on" }] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [{ "hue": "#ffe94f" }, { "saturation": 100 }, { "lightness": 4 }, { "visibility": "on" }] }, { "featureType": "water", "elementType": "geometry", "stylers": [{ "hue": "#333333" }, { "saturation": -100 }, { "lightness": -74 }, { "visibility": "off" }] }]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(41.042455, 29.009227),
        map: map,
        title: 'Snazzy!'
    });
}

