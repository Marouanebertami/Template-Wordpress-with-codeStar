function Scroll(){
var ypos = window.pageYOffset;
if(ypos > 150) {
	$('.header').addClass('scroll');
	$('.img-logo-black').removeClass('display-n');
	$('.img-logo').addClass('display-n');
}
else{
	$('.header').removeClass('scroll');
	$('.img-logo-black').addClass('display-n');
	$('.img-logo').removeClass('display-n');
	}
}
	window.addEventListener("scroll",Scroll);
