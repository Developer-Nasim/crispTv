(function ($) {
    "use strict";

    $(window).on('load', function () {
        //===== Prealoder
        $('.preloader').delay(500).fadeOut(500);
    });

    $(document).ready(function ($) {

        jQuery('.mainmenu nav').meanmenu({
            meanMenuContainer: '.mobile-menu-container',
            meanScreenWidth: "993"
        });

        $('.testimonials').owlCarousel({
            loop: true,
            items: 1,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
        });

        $('.team-say-about-crisptv-slides').owlCarousel({
            loop: true,
            items: 3,
            margin: 15,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 1
                },
                992: {
                    items: 3
                }
            }
        });

        var btn = $('.scroll-top');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });


        // WOW active
        new WOW().init();





    });



}(jQuery));