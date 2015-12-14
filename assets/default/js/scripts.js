$(function(){
		   
$('.biggerlink li').biggerlink();
			
// menu BEGIN
$('.g-menu').click(function(){
	$(this).toggleClass('menuAtv');
	if($(this).is('.menuAtv')){
		$('#g-nav').addClass('gNavAtv');
		$('body').addClass('bdOverflow');
	}
	else {
		$('#g-nav').removeClass('gNavAtv');
		$('#g-nav').find('.active').removeClass('active');	
		$('#g-nav').find(".sublink:not(:animated)").slideUp("fast");
		$('body').removeClass('bdOverflow');
	}
});

//gNav
sublink();
function sublink(){
	$(".sub>a").click(function(){
			$(this).parents('.sub').find(".sublink:not(:animated)").slideToggle("fast");
			$(this).parents('.sub').toggleClass('active');
		});
		
		$(".sublink a").click(function(){
			$('#g-nav').removeClass('gNavAtv');
			$('#g-nav').find('.active').removeClass('active');	
			$('#g-nav').find(".sublink:not(:animated)").slideUp("fast");
			$('body').removeClass('bdOverflow');
			$('.g-menu').toggleClass('menuAtv');
		});
		
}
// menu END

// btn more BEGIN
		$('.btnRutgon').addClass('displayNone');
		$('.newsContent').slideUp(0);
		$('.btnChitiet').click(function(){
			var $t = $(this);
			var speed = 200;
			$('.btnChitiet').removeClass('displayNone');
			$t.addClass('displayNone');
			$('.btnRutgon').addClass('displayNone');
			$t.prev().removeClass('displayNone');
			if($t.parents().is('.prevContent')){
				$('.newsContent').slideUp(speed);
				/*$('.btnRutgon').addClass('displayNone');*/
				$t.parents().parents().next('.newsContent').slideDown(speed);
			}
			else {
				$('.newsContent').slideUp(speed);
				$t.parents().parents().next('.newsContent').slideDown(speed);
			}
			
		});
		$('.btnRutgon').click(function(){
			var $t = $(this);
			var speed = 200;
			$t.addClass('displayNone');
			$t.next().removeClass('displayNone');
			if($t.parents().parents().is('.prevContent')){
				$t.parents().parents().prev('.newsContent').slideUp(speed);
			}
			else {
				$t.parents().parents().next('.newsContent').slideUp(speed);
			}
		});
// btn more END

// pagetop BEGIN
$(".pageTop").hide();
$(window).scroll(function () {
	if ($(this).scrollTop() > 200) {
	$(".pageTop").fadeIn();
	} else {
	$(".pageTop").fadeOut();
	}
});
// pagetop END
});