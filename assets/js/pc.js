if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
	var wowObj = {
	    offset: 0
	};
	$('.article,.subnav_class,.more-url-foot,.page,.grid,.sidebar').addClass('wow zoomIn');
	var wow = new WOW(wowObj);
	wow.init();
};

$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	//var winh = $(window).height();
	//$('.to-top').stop(true).animate({top: (scrollTop + winh - 120)},500);
	if (scrollTop>20){
		$(".header-bg").addClass('fixed');
	} else {
		$(".header-bg").removeClass('fixed');
	}
});