jQuery(document).ready(function (){
	  jQuery('.creb').waypoint(function () {
        var anim = jQuery(this).attr('data-animate'),
                del = jQuery(this).attr('data-animation-delay');
        dur = jQuery(this).attr('data-animation-duration');
        jQuery(this).addClass('animated ' + anim).css({
            animationDelay: del + 'ms',
            animationDuration: dur + 'ms'
        });
    }, {offset: '100%', triggerOnce: true});
	// counter
	$(document).ready(function(){
			$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
			
		});
})

//
