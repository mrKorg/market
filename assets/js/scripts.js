jQuery(document).ready(function($) {
    
    "use strict";

    // Loader
    $('#page-preloader').fadeOut('slow');
    $('#page-preloader .spinner').fadeOut('slow');

    // Slider
    $('.js-w-slider').slick({
        arrows: false,
        dots: true,
        infinite: true,
        fade: true,
        speed: 50,
        autoplay: true,
        autoplaySpeed: 7000
    });
    $(".js-w-slider").on("init", function (event, slick, direction) {
        var currentSlide = slick.slick("slickCurrentSlide");
    }).on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        slick.$slides.eq(currentSlide).find(".w-slider__item").addClass("disable");
        slick.$slides.eq(currentSlide).find(".w-slider__item").removeClass("active");
        slick.$slides.eq(nextSlide).find(".w-slider__item").removeClass("active");
    }).on("afterChange", function (event, slick, currentSlide) {
        slick.$slides.eq(currentSlide).find(".w-slider__item").removeClass("disable");
        slick.$slides.eq(currentSlide).find(".w-slider__item").addClass("active");
    });

    // Modal video
    $('.js-m-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // Modal
    $('.open-popup-link').magnificPopup({
        type:'inline',
        midClick: true 
    });

    // Gallery
    $('.js-m-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });
});