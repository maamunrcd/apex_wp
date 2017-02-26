/******************************************
 -	PREPARE PLACEHOLDER FOR SLIDER	-
 ******************************************/
var setREVStartSize = function () {
    var tpopt = new Object();
    tpopt.startwidth = 1170;
    tpopt.startheight = 500;
    tpopt.container = jQuery('#rev_slider_8_1');
    tpopt.fullScreen = "off";
    tpopt.forceFullWidth = "off";
    tpopt.container.closest(".rev_slider_wrapper").css({height: tpopt.container.height()});
    tpopt.width = parseInt(tpopt.container.width(), 0);
    tpopt.height = parseInt(tpopt.container.height(), 0);
    tpopt.bw = tpopt.width / tpopt.startwidth;
    tpopt.bh = tpopt.height / tpopt.startheight;
    if (tpopt.bh > tpopt.bw)
        tpopt.bh = tpopt.bw;
    if (tpopt.bh < tpopt.bw)
        tpopt.bw = tpopt.bh;
    if (tpopt.bw < tpopt.bh)
        tpopt.bh = tpopt.bw;
    if (tpopt.bh > 1) {
        tpopt.bw = 1;
        tpopt.bh = 1
    }
    if (tpopt.bw > 1) {
        tpopt.bw = 1;
        tpopt.bh = 1
    }
    tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
    if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on")
        tpopt.height = tpopt.startheight;
    if (tpopt.fullScreen == "on") {
        tpopt.height = tpopt.bw * tpopt.startheight;
        var cow = tpopt.container.parent().width();
        var coh = jQuery(window).height();
        if (tpopt.fullScreenOffsetContainer != undefined) {
            try {
                var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                jQuery.each(offcontainers, function (e, t) {
                    coh = coh - jQuery(t).outerHeight(true);
                    if (coh < tpopt.minFullScreenHeight)
                        coh = tpopt.minFullScreenHeight
                })
            } catch (e) {
            }
        }
        tpopt.container.parent().height(coh);
        tpopt.container.height(coh);
        tpopt.container.closest(".rev_slider_wrapper").height(coh);
        tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
        tpopt.container.css({height: "100%"});
        tpopt.height = coh;
    } else {
        tpopt.container.height(tpopt.height);
        tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
        tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
    }
};
/* CALL PLACEHOLDER */
setREVStartSize();
var tpj = jQuery;
tpj.noConflict();
var revapi8;


/*===Bootstrap Dropdoen Menu Smooth Js*/
jQuery('.navbar .dropdown,.dropdown-submenu').hover(function () {
    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideToggle(300);
}, function () {
    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideToggle(300)
});/*==== Bootstrap Dropdown Menu Smooth Js End =====*/





tpj(document).ready(function () {
//    setInterval(getWeather, 10000);
    if (tpj('#rev_slider_8_1').revolution == undefined) {
        revslider_showDoubleJqueryError('#rev_slider_8_1');
    } else {
        revapi8 = tpj('#rev_slider_8_1').show().revolution({
            dottedOverlay: "none", //threexthree, threexthreewhite, twoxtwo, twoxtwowhite, none
            delay: 10000,
            startwidth: 1170, // Slider Container width
            startheight: 500, //Slider Height
            hideThumbs: 200, // Delay Time for Hide Thumbnails, Bullets and Arrows

            thumbWidth: 100, // Numerical Value for Thumbnail Images width 
            thumbHeight: 50, // Numerical Value for Thumbnail Images Height 
            thumbAmount: 5, //  Numerical Value for Thumbnail Images Amount 


            simplifyAll: "off",
            navigationType: "none", //bullet, none, thumb;
            navigationArrows: "solo",
            navigationStyle: "square", //square, preview4, preview4,preview3, preview2, preview1, none

            touchenabled: "on", // Trigger Slider Next or Previous on Swipe
            onHoverStop: "off", // on, off (When Mouse Hover on Slider, Then it Stop or Not)
            nextSlideOnWindowFocus: "off",
            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,
            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
            keyboardNavigation: "off", // on, off (Trigger Slider Next or Previous by Keyboard Right Arrow or Left Arrow)

            navigationHAlign: "center", // left, right, center (Navigation Bullets Horizontal Alignment)
            navigationVAlign: "bottom", // top, bottom, center (Navigation Bullets Vertical Alignment)
            navigationHOffset: 0, // Numerical Value to Customize Positioning for Horizontal Allignment. 
            navigationVOffset: 20, // Numerical Value to Customize Positioning for Vertical Allignment. 

            soloArrowLeftHalign: "left", // left, right, cenrer ( Left Arrow Propositioning, when {navigationStyle:"none"} )
            soloArrowLeftValign: "center", // top, bottom, center ( Left Arrow Propositioning, when {navigationStyle:"none"} )
            soloArrowLeftHOffset: 20, // Numerical Value to Customize Horizontal Positioning for Left Arrow, when {navigationStyle:"none"}
            soloArrowLeftVOffset: 0, // Numerical Value to Customize Vertical Positioning for Left Arrow, when {navigationStyle:"none"}

            soloArrowRightHalign: "right", // left, right, cenrer ( Right Arrow Propositioning, when {navigationStyle:"none"} )
            soloArrowRightValign: "center", // top, bottom, center ( Right Arrow Propositioning, when {navigationStyle:"none"} )
            soloArrowRightHOffset: 20, // Numerical Value to Customize Horizontal Positioning for Right Arrow, when {navigationStyle:"none"}
            soloArrowRightVOffset: 0, // Numerical Value to Customize Vertical Positioning for Left Right, when {navigationStyle:"none"}

            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",
            spinner: "spinner2",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0
        });
    }

    /*===== Fan page code =====*/
    tpj('.jcarousel').jcarousel().jcarouselAutoscroll();
    /*===== Code for custom scrollbar =====*/
    tpj("html").niceScroll({
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
    if ((tpj(window).height() + 100) < tpj(document).height()) {
        tpj('#back_to_top').removeClass('hidden').affix({
            offset: {top: 100}
        });
    }

    /*===== Code for Search option in mobile =====*/
    tpj(".search_button_phone").click(function () {
        tpj(".search_form").fadeIn();
    })
    tpj(".search_disable").click(function () {
        tpj(".search_form").fadeOut("fast");
    })

    /*===== Code for Bootstrap Selectpicker =====*/
    tpj('.selectpicker').selectpicker();
    /*===== Code for waypoint =====*/
    tpj('.sj').waypoint(function () {
        var anim = tpj(this).attr('data-animate'),
                del = tpj(this).attr('data-animation-delay');
        dur = tpj(this).attr('data-animation-duration');
        tpj(this).addClass('animated ' + anim).css({
            animationDelay: del + 'ms',
            animationDuration: dur + 'ms'
        });
    }, {offset: '100%', triggerOnce: true});
    /*===== Code for Mobile Menu =====*/
    tpj('.navbar-toggle').click(function () {
        tpj(this).toggleClass('collapsed');
        tpj('body').toggleClass('menu_opened');
    })
    /*===== Code for Fixed Menubar =====*/

    var top_bar_height = tpj('.top_bar').outerHeight();
    var banner_height = tpj('.banner').outerHeight();
    var header_height = top_bar_height + banner_height;
    tpj(document).scroll(function () {
        var total_scrolled = tpj(document).scrollTop();
        if (total_scrolled > header_height) {
            tpj('.main_memu').addClass('navbar-fixed-top');
        } else {
            tpj('.main_memu').removeClass('navbar-fixed-top');
        }
    })
    tpj('.main_memu.navbar-default .search_form').css('padding-top', header_height);
    /*===============JS for gallery pop up icon================*/
    jQuery('.image_overlay').each(function () {
        jQuery(this).css('padding-top', (jQuery(this).height() / 2) - 20);
        jQuery(this).click(function () {
        })
    });
    /*===============JS for jQuery Magnific Pop up ===========*/
    jQuery('.grid').each(function () {
        var jQuerycontainer = jQuery(this);
        var jQueryimageLinks = jQuerycontainer.find('.item');
        var items = [];
        jQueryimageLinks.each(function () {
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
                beforeOpen: function () {
                    var index = jQueryimageLinks.index(this.st.el);
                    if (-1 !== index) {
                        this.goTo(index);
                    }
                }
            }
        })



    });
    /*===============JS for jQuery Datepicker ===========*/
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    var checkin = jQuery('#check_in').datepicker({
        onRender: function (date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }
        checkin.hide();
        jQuery('#check_out')[0].focus();
    }).data('datepicker');
    var checkout = jQuery('#check_out').datepicker({
        onRender: function (date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        checkout.hide();
    }).data('datepicker');
    jQuery(".datepicker").datepicker();

    /*===============JS for jQuery accordion===========*/
    jQuery('.collapse').on('shown.bs.collapse', function () {
        jQuery(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hidden.bs.collapse', function () {
        jQuery(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });

    /*===============JS for Special offer carousel Swipe===========*/
    jQuery(".carousel").swipe({
        swipe: function (event, direction, distance, duration, fingerCount, fingerData) {

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
    jQuery('[id^=carousel-selector-]').click(function () {
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
    jQuery('#location_photos').on('slid.bs.carousel', function (e) {
        var id = jQuery('.item.active').data('slide-number');
        jQuery('#carousel-text').html(jQuery('#slide-content-' + id).html());
    });


    /*===============Management tooltip js===========*/
    jQuery(function () {
        jQuery('[data-toggle="tooltip"]').tooltip()
    })

});
/*===============JS for Pageload Alert===========*/
//setTimeout(function () {
//    tpj('#myModal').modal('hide');
//}, 7000);
//jQuery(window).load(function ()
//{
//    jQuery('#myModal').modal('show');
//});