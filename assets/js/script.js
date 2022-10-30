$(function(){
/* ==================================================

	縦線

=================================================== */

	$(window).scroll(function(){

		var $verticalLine = $(".js-verticalLine");

		$verticalLine.each(function(){
			var position     = $(this).offset().top;
			var scroll       = $(window).scrollTop();
			var windowHeight = $(window).height();

			if (scroll > position - windowHeight){
				$(this).addClass('is-active');
			}
		});
	});

/* ==================================================

	スクロールエフェクト

=================================================== */
	var $fadeIn = $('.js-fadeIn');

	$(window).on('scroll', function () {
		$fadeIn.each(function () {
			var offset = $(this).offset().top;
			var scroll = $(window).scrollTop(); 
			var windowHeight = $(window).height();

			if (scroll > offset - windowHeight + 150) {
				$(this).addClass("in-scroll");
			}
		});
	});

/*=================================================================

    スマホメニュー

================================================================= */
    var $spHeaderMenu_toggle = $(".js-headerToggle");
    var $spHeaderMenu        = $(".js-headerToggleMenu");
    var $spHeaderMenuList    = $(".js-spHeaderMenuClose");

    $spHeaderMenu_toggle.on('click',function(){
        $spHeaderMenu_toggle.toggleClass('is-active');
        $spHeaderMenu.toggleClass("is-open");
    });

    $spHeaderMenuList.on('click', function(){
        if($spHeaderMenu_toggle.hasClass('is-active')) {
            $spHeaderMenu_toggle.removeClass("is-active");
        }

        if($spHeaderMenu.hasClass('is-open')) {
            $spHeaderMenu.removeClass("is-open");
        }
    });

});
