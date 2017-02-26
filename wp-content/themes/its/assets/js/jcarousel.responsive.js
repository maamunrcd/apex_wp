(function ($) {
    $(function () {
        /*===== Jcarousel Slider for Client Logos =====*/
        var jcarousel = $('.jcarousel.our_partner_slider');
        jcarousel.on('jcarousel:reload jcarousel:create', function () {
            var carousel = $(this),
                    width = carousel.innerWidth();
            win_width = $(window).width();
            if (win_width > 1199) {
                width = width / 6;
            } else if (win_width > 991) {
                width = width / 4;
            } else if (win_width > 570) {
                width = width / 3;
            } else if (win_width > 480) {
                width = width / 2;
            }
            carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
        }).jcarousel({
            wrap: 'circular'
        });

        /*===== Jcarousel slider for footer logos =====*/
        var jcarousel_footer = $('.jcarousel.footer_carousel');
        jcarousel_footer.on('jcarousel:reload jcarousel:create', function () {
            var carousel = $(this),
                    width = carousel.innerWidth();
            win_width = $(window).width();
            if (win_width > 1199) {
                width = width / 4 - (3);
            } else if (win_width > 991) {
                width = width / 4 - (3);
            } else if (win_width > 570) {
                width = width / 3;
            } else if (win_width > 480) {
                width = width / 2;
            }
            carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
        }).jcarousel({
            wrap: 'circular'
        });


        /*===== Jcarousel Our Packages  =====*/
        var jcarousel_footer = $('.jcarousel.our_packages_items');
        jcarousel_footer.on('jcarousel:reload jcarousel:create', function () {
            var carousel = $(this),
                    width = carousel.innerWidth();
            win_width = $(window).width();
            if (win_width > 1199) {
                width = width / 3-(20);
            } else if (win_width > 991) {
                width = width / 3-(20);
            } else if (win_width > 570) {
                width = width / 2-(20);
            } else if (win_width > 480) {
                width = width / 1;
            }
            carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
        }).jcarousel({
            wrap: 'circular'
        });


        $('.jcarousel-control-prev')
                .jcarouselControl({
                    target: '-=1'
                });

        $('.jcarousel-control-next')
                .jcarouselControl({
                    target: '+=1'
                });

        $('.jcarousel-pagination')
                .on('jcarouselpagination:active', 'a', function () {
                    $(this).addClass('active');
                })
                .on('jcarouselpagination:inactive', 'a', function () {
                    $(this).removeClass('active');
                })
                .on('click', function (e) {
                    e.preventDefault();
                })
                .jcarouselPagination({
                    perPage: 1,
                    item: function (page) {
                        return '<a href="#' + page + '">' + page + '</a>';
                    }
                });
    });

})(jQuery);
