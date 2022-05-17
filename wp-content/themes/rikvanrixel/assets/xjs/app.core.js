function reloadScrollBars() {
	document.documentElement.style.overflow = 'auto';  // firefox, chrome
	document.body.scroll = "yes"; // ie only
}

function unloadScrollBars() {
	document.documentElement.style.overflow = 'hidden';  // firefox, chrome
	document.body.scroll = "no"; // ie only
}

var scrollpos = window.scrollY;
const header = document.getElementById("header-menu");

function add_class_on_scroll() {
	header.classList.add("fade-in");
}

function remove_class_on_scroll() {
	header.classList.remove("fade-in");
}

$(document).ready(function(){
	console.log('ready or not...GO!')
	window.addEventListener('scroll', function(){
		scrollpos = window.scrollY;

		if(scrollpos > 60){
			add_class_on_scroll();
		}
		else {
			remove_class_on_scroll();
		}
		console.log(scrollpos);
	});
});