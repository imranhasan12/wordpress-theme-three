(function (jQuery) {

    "use strict";

    // Navbar Area

    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 5) {
            jQuery('.header-area').addClass("bg-solid");
        } else {
            jQuery('.header-area').removeClass("bg-solid");
        }
    });


    //js code for mobile menu toggle
    jQuery(".menu-toggle").on("click", function () {
        jQuery(this).toggleClass("is-active");
    });
    

    // Full Screen Search
    jQuery(".search-btn").on('click', function () {
        jQuery(".search-full").removeClass("close");
        jQuery(".search-full").addClass("open");
    })

    jQuery(".search-close").on('click', function () {
        jQuery(".search-full").removeClass("open");
        jQuery(".search-full").addClass("close");
    })

    // Hero Area
    jQuery('.hero-slider').owlCarousel({
        loop: true,
        items: 1,
        nav: true,
        dots: true,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 4000,
        smartSpeed: 1500
    });

    // portfolio details
    jQuery('.image-slider').owlCarousel({
        loop: true,
        items: 1,
        nav: true,
        dots: false,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout: 4000,
        smartSpeed: 1500
    });

    //mixItUp
    jQuery('.portfolio-area').mixItUp();

    // Testimonial Area
    jQuery('.testimonials').owlCarousel({
        items: 1,
        loop: true,
        autoplay:true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: false
    });

   // Sidebar Sticky
   jQuery(".sidebar-sticky").stick_in_parent();

   // Preloader
   jQuery(window).on('load', function () {
        jQuery('.preloader').fadeOut(500);
    });

})(jQuery);
