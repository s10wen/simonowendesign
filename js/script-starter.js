//plugin
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

//usage w/ smoothscroll
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

});