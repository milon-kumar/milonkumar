$(document).ready(function () {
    var typed = new Typed('.typed', {
        strings: ["Web Designer.","Ux/Ui Designer.","Web Developer.","Graphics Designer.","API Developer."],
        typeSpeed: 110,
        backSpeed: 80,
        loop:true,
    });



    var mixer = mixitup('.box-list');

    // $('.circlechart').circlechart();

    (function($) {
        /*
         * Example 2:
         *
         * - default gradient
         * - listening to `circle-animation-progress` event and display the animation progress: from 0 to 100%
         */
        $('.first.circle').circleProgress({
            value: 1,
            size:100,
            thickness:'ff3777',
            fill: {
                gradient: ['#0088ff', '#ff00b7']
            },
            emptyFill: 'rgb(198,198,198)',
            animation: {
                duration: 7200,
                easing: 'circleProgressEasing'
            },
            canvas: null,
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(120 * progress));
        });

        $('.second.circle').circleProgress({
            value: 0.66,
            size:100,
            thickness:'ff3777',
            fill: {
                gradient: ['#03ffb3', '#0066ff']
            },
            emptyFill: 'rgb(191,191,191)',
            animation: {
                duration: 7200,
                easing: 'circleProgressEasing'
            },
            canvas: null,
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(66 * progress));
        });

        $('.therd.circle').circleProgress({
            value: 0.66,
            size:100,
            thickness:'ff3777',
            fill: {
                gradient: ['#ff0303', '#ffb700']
            },
            emptyFill: 'rgb(191,191,191)',
            animation: {
                duration: 7200,
                easing: 'circleProgressEasing'
            },
            canvas: null,
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(87 * progress));
        });

        $('.forth.circle').circleProgress({
            value:100,
            size:100,
            thickness:'ff3777',
            fill: {
                gradient: ['#03ff07', '#00ffc4']
            },
            emptyFill: 'rgb(191,191,191)',
            animation: {
                duration: 7200,
                easing: 'circleProgressEasing'
            },
            canvas: null,
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(3600 * progress));
        });

    })(jQuery);




    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
        // live handler
        lc_lightbox('.elem', {
            wrap_class: 'lcl_fade_oc',
            gallery : true,
            thumb_attr: 'data-lcl-thumb',

            skin: 'minimal',
            radius: 0,
            padding	: 0,
            border_w: 0,
        });
});
