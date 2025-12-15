(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Hero Header carousel
    $(".header-carousel").owlCarousel({
        animateOut: 'fadeOut',
        items: 1,
        margin: 0,
        stagePadding: 0,
        autoplay: true,
        smartSpeed: 500,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });


    // attractions carousel
    $(".blog-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    document.addEventListener("DOMContentLoaded", function () {
        const spinWrapper = document.querySelector(".about-spec-frame .spin-wrapper");
        if (!spinWrapper) return;

        const spinDuration = 3000; // match new CSS duration in ms
        const spinInterval = 8000; // how often to spin

        setInterval(() => {
            spinWrapper.classList.add("spin-360");

            setTimeout(() => {
                spinWrapper.classList.remove("spin-360");
                spinWrapper.style.transform = "rotateY(0deg)";
            }, spinDuration);
        }, spinInterval);
    });

    var owl = $('.brand-slider');

    owl.owlCarousel({
        loop: true,
        margin: 25,
        nav: false,         // disable Owl default nav
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 600,
        responsive: {
            0: { items: 1 },
            576: { items: 2 },
            992: { items: 3 }
        }
    });

    // Custom Button Controls
    $('.brand-next').click(function () {
        owl.trigger('next.owl.carousel');
    });

    $('.brand-prev').click(function () {
        owl.trigger('prev.owl.carousel');
    });

   document.addEventListener("DOMContentLoaded", function() {
    const titleElement = document.querySelector(".text-dcba");
    const desc = document.querySelector(".section-desc");

    if (!titleElement || !desc) return;

    const title = titleElement.innerText.trim().toLowerCase();

    let content = "";

    if (title === "wear your shape") {
        content = "Discover frames that perfectly match your face shape, enhancing your natural features.";
    } 
    else if (title === "our features") {
        content = "We bring you unique optical solutions designed to improve clarity and comfort.";
    } 
    else if (title === "benefits we offer") {
        content = "Experience unmatched quality, comfort, and eye care services tailored for your needs.";
    }

    desc.innerText = content;
});

document.addEventListener("DOMContentLoaded", function() {
    const collectionSwiper = new Swiper(".collection-slider", {
        slidesPerView: 2,   // show 2 cards at once
        slidesPerGroup: 1,  // slide starts after 2nd card
        spaceBetween: 20,
        loop: true,
        speed: 600,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },

        breakpoints: {
            320:  { slidesPerView: 1 },
            576:  { slidesPerView: 1 },
            768:  { slidesPerView: 2 }, // 2 visible, sliding starts after 2nd
            992:  { slidesPerView: 2 }, 
            1200: { slidesPerView: 2 }
        }
    });
});


})(jQuery);