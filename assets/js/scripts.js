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

    // Product slider
    $('#pProductGallery').slick({
        arrows: false,
        dots: false,
        infinite: true,
        fade: true,
        speed: 500,
        autoplay: false,
        autoplaySpeed: 7000,
        asNavFor: '#pProductGalleryNav',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    dots: true
                }
            }
        ]
    });
    $('#pProductGalleryNav').slick({
        arrows: false,
        dots: false,
        infinite: true,
        fade: false,
        speed: 500,
        autoplay: false,
        autoplaySpeed: 7000,
        asNavFor: '#pProductGallery',
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
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

    $('.footerMenu__title').each(function () {
        $(this).on('click', function () {
            $(this).next('.footerMenu__list').slideToggle(300);
        })
    });

    // Like
    $('.productPreview__like, .pProduct__like').each(function () {
        $(this).on('click', function () {
            $(this).addClass('active');
            return false;
        })
    })

    // Select
    $('.eSelect').each(function () {
        $(this).find('.eSelect__value').on('click', function () {
            $(this).next('.eSelect__list').toggle();
        });
    });
    $('body').on('click', function(e) {
        if (!$(e.target).parents().hasClass('eSelect')) {
            $(".eSelect__list").hide();
        }
    });

});