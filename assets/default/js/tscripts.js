$(function(){
$('#slides').slides({
	preload: true,
	generateNextPrev: true,
	generatePagination: true,
	preloadImage: 'img/loading.gif',
	play: 3000, 	// speed: change
	pause: 2500,
	hoverPause: false,
	effect: 'fade',
	crossfade: true,
	slideSpeed: 350,
	fadeSpeed: 1000,    // speed: fade
});
$('#slides_sp').slides({
	preload: true,
	generateNextPrev: true,
	generatePagination: true,
	preloadImage: 'img/loading.gif',
	play: 3000, 	// speed: change
	pause: 2500,
	hoverPause: false,
	effect: 'fade',
	crossfade: true,
	slideSpeed: 350,
	fadeSpeed: 1000,    // speed: fade
});

$('#slides li').each(function(){
	var $t = $(this);
	var $src = $t.find('img').attr('src');
	$t.css('background','url('+$src+') no-repeat center top');
});
 
$('.mainImg img:gt(0)').hide(); 
		setInterval(function(){$('.mainImg :first-child').fadeOut(1000).next('img').fadeIn().end().appendTo('.mainImg');}, 3000);

var mainH = $('.mainImg img').height();
$('.mainImg').height(mainH);
$('#slides_sp').height(mainH);
$(window).resize(function(){
	var mainH = $('.mainImg img').height();
	$('.mainImg').height(mainH);
	$('#slides_sp').height(mainH);
});
});