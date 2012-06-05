jQuery(document).ready(function(){
	
	jQuery('body').hide();
	jQuery('body').fadeIn(2000);
	
    jQuery(".scroll").click(function(event){
        //prevent the default action for the click event
        event.preventDefault();
 
        //get the full url - like mysitecom/index.htm#home
        var full_url = this.href;
 
        //split the url by # and get the anchor target name - home in mysitecom/index.htm#home
        var parts = full_url.split("#");
        var trgt = parts[1];
 
        //get the top offset of the target anchor
        var target_offset = jQuery("#"+trgt).offset();
        var target_top = target_offset.top;
 
        //goto that anchor by setting the body scroll top to anchor top
        jQuery('html, body').animate({scrollTop:target_top}, 500);
    });
});

/*
jQuery(document).ready(function(){
// first locate all of the select tags on the page and hide them
jQuery("select.wpcf7-select").css('display','none');
//now, for each select box, run this function
jQuery("select.wpcf7-select").each(function(){
	
	var curSel = jQuery(this);
	// get the CSS width from the original select box
	var gddWidth = jQuery(curSel).css('width');
	var gddWidthL = gddWidth.slice(0,-2);
	var gddWidth2 = gddWidthL - 28;
	var gddWidth3 = gddWidthL - 16;
	// build the new div structure
	var gddTop = '<div style="width:' + gddWidthL + 'px" class="selectME" tabindex="0">';
	//get the default selected option
	var whatSelected = jQuery(curSel).children('option:selected').text();
	//write the default
	var gddFirst = '<div class="first"><span class="selectME gselected" style="width:'+ gddWidth2 +  'px;">'+ whatSelected +'</span><span id="arrowImg"></span></div><ul class="selectME">';
	// create a new array of div options from the original's options
	var addItems = new Array();
	jQuery(curSel).children('option').each( function() {
		var text = jQuery(this).text();
		var selVal = jQuery(this).attr('value'); 
		var before =  '<li style="width:' + gddWidthL + 'px;"><a href="#" rel="' + selVal + '" tabindex="0"  style="width:' + gddWidth3 + 'px;">';
		var after = '</a></li>';
		addItems.push(before + text + after);
	});
	//hide the default from the list of options 
	var removeFirst = addItems.shift();
	// create the end of the div selectbox and close everything off
	var gddBottom ='</ul></div>'
	//write everything after each selectbox
	var GDD = gddTop + gddFirst + addItems.join('') + gddBottom;
	jQuery(curSel).after(GDD);
	//this var selects the div select box directly after each of the origials
	var nGDD = jQuery(curSel).next('div.selectME');
	
	jQuery(nGDD).find('li:first').addClass("first");
	
	jQuery(nGDD).find('li:last').addClass('last');
	//handle the on click functions - push results back to old text box
	jQuery(nGDD).click( function(e) {
		 var myTarA = jQuery(e.target).attr('rel');
		 var myTarT = jQuery(e.target).text();
		 var myTar = jQuery(e.target);
		 //if closed, then open
		 if( jQuery(nGDD).find('li').css('display') == 'none')
			{
					//this next line closes any other selectboxes that might be open
					jQuery('div.selectME').find('li').css('display','none');
					jQuery(nGDD).find('li').css('display','block');
					
					//if user clicks off of the div select box, then shut the whole thing down
					jQuery(document.window || 'body').click( function(f) {
							var myTar2 = jQuery(f.target);
							if (myTar2 !== nGDD) {jQuery(nGDD).find('li').css('display','none');}
					});
							return false;
			}
			else
			{      
					if (myTarA == null){
						jQuery(nGDD).find('li').css('display','none');
								return false;
							}
							else {
								//set the value of the old select box
								jQuery(curSel).val(myTarA);
								//set the text of the new one
								 jQuery(nGDD).find('span.gselected').text(myTarT);
								 jQuery(nGDD).find('li').css('display','none');
								 return false;
							}
			}
	//handle the tab index functions
	 }).focus( function(e) {
		
		 jQuery(nGDD).find('li:first').addClass('currentDD');
		 jQuery(nGDD).find('li:last').addClass('lastDD');
		 function checkKey(e){
			//on keypress handle functions
			function moveDown() {
				var current = jQuery(nGDD).find('.currentDD:first');
				var next = jQuery(nGDD).find('.currentDD').next();
				if (jQuery(current).is('.lastDD')){
				return false;
				} else {
					jQuery(next).addClass('currentDD');
					jQuery(current).removeClass('currentDD');
				}
			}
			function moveUp() {
				var current = jQuery(nGDD).find('.currentDD:first');
				var prev = jQuery(nGDD).find('.currentDD').prev();
				if (jQuery(current).is('.first')){
				return false;
				} else {
					jQuery(prev).addClass('currentDD');
					jQuery(current).removeClass('currentDD');
				}
			}
			var curText = jQuery(nGDD).find('.currentDD:first').text();
			var curVal = jQuery(nGDD).find('.currentDD:first a').attr('rel');
		   switch (e.keyCode) {
				case 40:
					jQuery(curSel).val(curVal);
					jQuery(nGDD).find('span.gselected').text(curText);
					moveDown();
					return false;
					break;
				case 38:
					jQuery(curSel).val(curVal);
					jQuery(nGDD).find('span.gselected').text(curText);
					moveUp();
					return false;
					break;
				case 13:
					jQuery(nGDD).find('li').css('display','none');
					}
		}
		jQuery(document).keydown(checkKey);	
	}).blur( function() {
			jQuery(document).unbind('keydown');
	});
});
});

*/