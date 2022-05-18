(function($){

	console.log('lets go!')

	let mainDivHeight= document.querySelector('.height-guide').offsetHeight
	$('.height-follower-23').css({minHeight:  mainDivHeight * 0.66666666666});
	$('.height-follower-13').css({maxHeight:  mainDivHeight * 0.33333333333});
	console.log('parentblock height', mainDivHeight * 0.66666666666);
	
})(jQuery)

