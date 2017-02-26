
/*===Bootstrap Dropdoen Menu Smooth Js*/
jQuery('.navbar .dropdown,.dropdown-submenu').hover(function() {
    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideToggle(300);
}, function() {
    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideToggle(300)
});/*==== Bootstrap Dropdown Menu Smooth Js End =====*/



jQuery(document).ready(function() {
    /*====================Air Tickting Section=========*/
    jQuery(".on_wey").click(function() {
        jQuery('.returning_section').hide('slow');
        jQuery('.onweay_section').show('slow');
    });
    jQuery(".return_class").click(function() {
        jQuery('.onweay_section').hide('slow');
        jQuery('.returning_section').show('slow');
    });

    /*===== Fan page code =====*/
    jQuery('.jcarousel').jcarousel().jcarouselAutoscroll();
    /*===== Code for custom scrollbar =====*/
    jQuery("html").niceScroll({
        cursorcolor: "#1e7bbd",
        cursorwidth: "10px",
        cursorborder: "0px solid transparent",
        cursorborderradius: "0px",
        mousescrollstep: 60,
        autohidemode: false,
        background: "rgba(0,0,0,.3)",
        horizrailenabled: false
    });
    /*===== Code for Back to Top =====*/
    if ((jQuery(window).height() + 100) < jQuery(document).height()) {
        jQuery('#back_to_top').removeClass('hidden').affix({
            offset: {top: 100}
        });
    }

    /*===== Code for Search option in mobile =====*/
    jQuery(".search_button_phone").click(function() {
        jQuery(".search_form").fadeIn();
    })
    jQuery(".search_disable").click(function() {
        jQuery(".search_form").fadeOut("fast");
    })

    /*===== Code for Bootstrap Selectpicker =====*/
    jQuery('.selectpicker').selectpicker();
    /*===== Code for waypoint =====*/
    jQuery('.sj').waypoint(function() {
        var anim = jQuery(this).attr('data-animate'),
                del = jQuery(this).attr('data-animation-delay');
        dur = jQuery(this).attr('data-animation-duration');
        jQuery(this).addClass('animated ' + anim).css({
            animationDelay: del + 'ms',
            animationDuration: dur + 'ms'
        });
    }, {offset: '100%', triggerOnce: true});
    /*===== Code for Mobile Menu =====*/
    jQuery('.navbar-toggle').click(function() {
        jQuery(this).toggleClass('collapsed');
        jQuery('body').toggleClass('menu_opened');
    })
    /*===== Code for Fixed Menubar =====*/

    var top_bar_height = jQuery('.top_bar').outerHeight();
    var banner_height = jQuery('.banner').outerHeight();
    var header_height = top_bar_height + banner_height;
    jQuery(document).scroll(function() {
        var total_scrolled = jQuery(document).scrollTop();
        if (total_scrolled > header_height) {
            jQuery('.main_memu').addClass('navbar-fixed-top');
        } else {
            jQuery('.main_memu').removeClass('navbar-fixed-top');
        }
    })
    jQuery('.main_memu.navbar-default .search_form').css('padding-top', header_height);
    /*===============JS for gallery pop up icon================*/
    jQuery('.image_overlay').each(function() {
        jQuery(this).css('padding-top', (jQuery(this).height() / 2) - 20);
        jQuery(this).click(function() {
        })
    });
    /*===============JS for jQuery Magnific Pop up ===========*/
    jQuery('.grid').each(function() {
        var jQuerycontainer = jQuery(this);
        var jQueryimageLinks = jQuerycontainer.find('.item');
        var items = [];
        jQueryimageLinks.each(function() {
            var jQueryitem = jQuery(this);
            var type = 'image';
            if (jQueryitem.hasClass('magnific-youtube')) {
                type = 'iframe';
            }
            var magItem = {
                src: jQueryitem.attr('href'),
                type: type
            };
            magItem.title = jQueryitem.data('title');
            items.push(magItem);
        });
        jQueryimageLinks.magnificPopup({
            mainClass: 'mfp-with-zoom',
            items: items,
            gallery: {
                enabled: true,
                tPrev: jQuery(this).data('prev-text'),
                tNext: jQuery(this).data('next-text')
            },
            callbacks: {
                beforeOpen: function() {
                    var index = jQueryimageLinks.index(this.st.el);
                    if (-1 !== index) {
                        this.goTo(index);
                    }
                }
            }
        })

    });






    /*===============JS for jQuery Datepicker ===========*/
    jQuery('.date_datepicker').datepicker().on('changeDate', function(e) {
        jQuery(this).datepicker('hide');
    });

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    var checkin = jQuery('#check_in').datepicker({
        onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }
        checkin.hide();
        jQuery('#check_out')[0].focus();
    }).data('datepicker');
    var checkout = jQuery('#check_out').datepicker({
        onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function(ev) {
        checkout.hide();
    }).data('datepicker');




    /*===============JS for Special offer carousel Swipe===========*/
    jQuery(".carousel").swipe({
        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left')
                jQuery(this).carousel('next');
            if (direction == 'right')
                jQuery(this).carousel('prev');
        },
        allowPageScroll: "vertical"
    });



    /*===============Packages Photos Gallary JS ===========*/
    jQuery('#location_photos').carousel({
        interval: 5000
    });

    //Handles the carousel thumbnails
    jQuery('[id^=carousel-selector-]').click(function() {
        var id_selector = jQuery(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#location_photos').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
    // When the carousel slides, auto update the text
    jQuery('#location_photos').on('slid.bs.carousel', function(e) {
        var id = jQuery('.item.active').data('slide-number');
        jQuery('#carousel-text').html(jQuery('#slide-content-' + id).html());
    });


    /*===============Management tooltip js===========*/
    jQuery(function() {
        jQuery('[data-toggle="tooltip"]').tooltip()
    });
    /*====================Air Tickting Section=========*/


    jQuery('.marquee .content').marquee({
        pauseOnHover: true
    });

});