// Show search on mobile
var bTool__searchBtn = document.getElementById('bTool__searchBtn');
if (bTool__searchBtn) {
    bTool__searchBtn.onclick = function () {
        document.getElementById('bTool').classList.toggle('showSearch')
    }
}

// Double click on product preview
var productPreviewEmptyLayer = document.getElementsByClassName('productPreview__emptyLayer');
if (productPreviewEmptyLayer) {
    for (var i in productPreviewEmptyLayer) {
        if (productPreviewEmptyLayer.hasOwnProperty(i)) {
            productPreviewEmptyLayer[i].onclick = function (e) {
                var hiddenElements = document.getElementsByClassName('productPreview__emptyLayer--hide')
                if (hiddenElements.length) {
                    hiddenElements[0].classList.remove('productPreview__emptyLayer--hide');
                }
                this.classList.add('productPreview__emptyLayer--hide');
            }
        }
    }
}

jQuery(document).ready(function ($) {

    "use strict";

    // Loader
    $('#page-preloader').fadeOut('slow');
    $('#page-preloader .spinner').fadeOut('slow');

    // Slider
    $('#sliderBanners__list').slick({
        arrows: false,
        dots: true,
        infinite: true,
        fade: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 7000
    });

    // Slider
    $('.productsListSlider').slick({
        arrows: false,
        dots: false,
        infinite: true,
        fade: false,
        speed: 500,
        autoplay: false,
        autoplaySpeed: 7000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 375,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // Timer
    var timer = new Timer();
    timer.start({
        countdown: true,
        precision: 'secondTenths',
        startValues: {
            days: 4,
            hours: 2,
            minutes: 10,
            seconds: 30
        }
    });
    timer.addEventListener('secondsUpdated', function (e) {
        $('#userPreview__box--countdown .days').html(timer.getTimeValues().days);
        $('#userPreview__box--countdown .hours').html(timer.getTimeValues().hours);
        $('#userPreview__box--countdown .minutes').html(timer.getTimeValues().minutes);
        $('#userPreview__box--countdown .seconds').html(timer.getTimeValues().seconds);
    });



});