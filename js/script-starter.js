// To The Top
jQuery.fn.topLink = function(settings) {
	return this.each(function() {
		//listen for scroll
		var el = $(this);
		el.hide(); //in case the user forgot
		$(window).scroll(function() {
			if($(window).scrollTop() >= settings.min)
			{
				el.fadeIn(settings.fadeSpeed);
			}
			else
			{
				el.fadeOut(settings.fadeSpeed);
			}
		});
	});
};

$(document).ready(function() {


	// To The Top - Custom
	var scroll = '.scroll';

	//set the link
	$(scroll).topLink({
		min: 400,
		fadeSpeed: 500
	});
	//smoothscroll
	$(scroll).click(function(e) {
		e.preventDefault();
		$.scrollTo(0,300);
	});


	// Facebook style menu
	var pagebody = $("body");
	var topbar   = $("#toolbarnav");
	var content  = $("section");
	var viewport = {
		width  : $(window).width(),
		height : $(window).height()
	};
	// retrieve variables as
	// viewport.width / viewport.height
	
	function openme() {
		$(function () {
			topbar.animate({
				left: "290px"
			}, { duration: 300, queue: false });
			pagebody.animate({
				left: "290px"
			}, { duration: 300, queue: false });
		});
	}
	
	function closeme() {
		$(function() {
			topbar.animate({
				left: "0px"
			}, { duration: 180, queue: false });
			pagebody.animate({
				left: "0px"
			}, { duration: 180, queue: false });
		});
	}

	// checking whether to open or close nav menu
	$("#menu-btn").live("click", function(e){
		e.preventDefault();
		var leftval = pagebody.css('left');
		
		if(leftval == "0px") {
			openme();
		}
		else {
			closeme();
		}
	});
	
	// loading page content for navigation
	$("a.navlink").live("click", function(e){
		e.preventDefault();
		var linkurl     = $(this).attr("href");
		var linkhtmlurl = linkurl.substring(1, linkurl.length);
		
		var imgloader   = '<center style="margin-top: 30px;"><img src="img/preloader.gif" alt="loading..." /></center>';
		
		closeme();
		
		$(function() {
			topbar.css("top", "0px");
			window.scrollTo(0, 1);
		});
		
		content.html(imgloader);
		
		setTimeout(function() {
			content.load(linkhtmlurl, function() { /* no callback */ });
		}, 1200);
	});
});

// Move footer to navigation
if (document.documentElement.clientWidth < 768) {
	$("footer").appendTo("nav");
}