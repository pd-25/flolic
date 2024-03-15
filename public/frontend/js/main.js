(function ($) {
    $(function () {
        $(window).on('scroll', function () {
            var _fixed_height = $('header > .navbar').height();
            var _win_scoll = $(this).scrollTop();
            var _header = $('header');
            if (_win_scoll > _fixed_height && !_header.hasClass('sticky'))
            {
                _header.addClass('sticky');
            } else if (_win_scoll <= _fixed_height && _header.hasClass('sticky'))
            {
                _header.removeClass('sticky');
            }
        });
        $("#home-text").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true
        });
        var owl = $('#home-text');
        owl.on('changed.owl.carousel', function (event) {
            var item = event.item.index - 2;     // Position of the current item
            $('.items').removeClass('animated bounceInDown');
            $('.owl-item').not('.cloned').eq(item).find('.items').addClass('animated bounceInDown');
        });
        $("#our-team").owlCarousel({
            responsive: {
                0: {
                    items:1,
                    loop:true,
                    dots:false,
                    autoplay:true
                },
                480: {
                    items:2,
                    loop:true,
                    dots:false,
                    autoplay:true,
                    margin:20
                },
                768: {
                    items:4,
                    loop:true,
                    dots:false,
                    autoplay:true,
                    nav:true,
                    margin:20,
                    navText:['<span class="zmdi zmdi-chevron-left"></span>','<span class="zmdi zmdi-chevron-right"></span>']
                }
            }
        });
        $("#testimonial").owlCarousel({
            responsive: {
                0: {
                    items: 1,
                    autoplay: true,
                    loop: true,
                    dots: false
                },
                480: {
                    items: 2,
                    autoplay: true,
                    loop: true,
                    margin: 20,
                    dots: false,
                    nav: true,
                    navText: ['<span class="zmdi zmdi-chevron-left"></span>', '<span class="zmdi zmdi-chevron-right"></span>']
                },
                768: {
                    items: 4,
                    autoplay: true,
                    loop: true,
                    margin: 20,
                    dots: false,
                    nav: true,
                    navText: ['<span class="zmdi zmdi-chevron-left"></span>', '<span class="zmdi zmdi-chevron-right"></span>']
                }
            }
        });
    });
})(jQuery);