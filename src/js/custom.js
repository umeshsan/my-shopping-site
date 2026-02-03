$(document).ready(function() {
    initScrollToTop();

    // Tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map((el) => new bootstrap.Tooltip(el));


    // svg img to svg code
    jQuery('img.svg').each(function() {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            var $svg = jQuery(data).find('svg');

            // Add replaced image's classes to the new SVG
            if (imgID) {
                $svg.attr('id', imgID);
            }

            // Add replaced image's classes to the new SVG
            if (imgClass) {
                $svg.attr('class', imgClass + ' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg.removeAttr('xmlns:a');

            $img.replaceWith($svg);
        }, 'xml');
    });

    //sticky navigation-menu
    function stickyNav() {
        const scrollTop = $(window).scrollTop();
        const $header = $('.header-bottom');

        if (scrollTop > 185) {
            $header.addClass('is-sticky shadow');
        } else {
            $header.removeClass('is-sticky shadow');
        }
    }
    stickyNav();
    $(window).on('scroll', stickyNav);

    //gsap effects
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    // Initialize ScrollSmoother
    ScrollSmoother.create({
        wrapper: '.smooth-wrapper',
        content: '.smooth-content',
        smooth: 2, // how smooth the scroll is
        effects: true, // enable data-speed and data-lag attributes for parallax effects
    });


    // AOS EFFECTS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out-sine',
        once: true
    });


    // Fancybox
    Fancybox.bind("[data-fancybox]", {
        Carousel: {
            Zoomable: {
                Panzoom: {
                    clickAction: "iterateZoom",
                    maxScale: 2,
                },
            },
        },
    });


    // matchheight
    $('.matchHeightPara').matchHeight();


    // Gallery Swiper
    var swiper = new Swiper(".heroSwiperSlider", {
        slidesPerView: 1,
        autoplay: {
            delay: 3000, // 3 seconds
            disableOnInteraction: false, // Continue after user clicks
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });


    // Smooth scroll for anchor links (same page)
    $('a[href^="#"]').on('click', function(e) {
        const targetId = this.getAttribute('href');

        // ignore empty hash or "#"
        if (targetId.length <= 1) return;

        const $target = $(targetId);
        if ($target.length) {
            e.preventDefault();

            $('html, body').stop().animate({
                scrollTop: $target.offset().top - getHeaderOffset()
            }, 800);
        }
    });


    // Smooth scroll when coming from another page with hash
    if (window.location.hash) {
        const hash = window.location.hash;

        setTimeout(function() {
            const $target = $(hash);
            if ($target.length) {
                $('html, body').stop().animate({
                    scrollTop: $target.offset().top - getHeaderOffset()
                }, 800);
            }
        }, 300); // wait for page layout
    }

});


function getHeaderOffset() {
    const $header = $('.header-navigation');
    return $header.length ? $header.outerHeight() : 0;
}


// Scroll to top button functionality
function debounce(func, wait) {
    let timeout;
    return function() {
        const context = this;
        const args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(context, args), wait);
    };
}


function initScrollToTop() {
    const $topButton = $('.topTop');
    if (!$topButton.length) return;

    $(window).scroll(debounce(function() {
        const scrollTop = $(window).scrollTop();
        const docHeight = $(document).height();
        const winHeight = $(window).height();
        const scrollPercent = Math.round((scrollTop / (docHeight - winHeight)) * 100);

        $topButton.css({
            opacity: scrollPercent > 15 ? 1 : 0,
            transform: scrollPercent > 15 ? 'translateX(0)' : 'translateX(calc(100% + 5px))'
        });
    }, 100));

    $topButton.click(function() {
        $('html, body').stop().animate({ scrollTop: 0 }, 1000);
        return false;
    });
}