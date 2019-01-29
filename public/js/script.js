document.onscroll = my_func;

function my_func() {
	
	var sc = jQuery(document).scrollTop();
	
	if(sc > 500 && jQuery("#on-top").css("display") != "block") {
		jQuery("#on-top").css({"display":"block"});
		block_in(0.1,jQuery("#on-top"));
		
	}
	else if(sc < 500 && jQuery("#on-top").css("display") != "none") {
		block_out(jQuery("#on-top").css("opacity"),jQuery("#on-top"));
	}
}

function block_in(op,elem) {
	elem.css({"opacity":op});
	op +=0.1;
	
	if(op < 1) {
		setTimeout(
					function () {
						block_in(op,elem)
					},
					100
		);
	}
}

function block_out(op,elem) {
	elem.css({"opacity":op});
	op -=0.1;
	if(op > 0) {
		setTimeout(
					function () {
						block_out(op,elem)
					},
					100
		);
	}
	else {
		jQuery("#on-top").css({"display":"none"});
	}
}


function to_top() {
	var root = jQuery(document);
	var scrol = root.scrollTop();
	
	scrol -= 10;
	
	root.scrollTop(scrol);
	
	if(scrol > 0) {
		setTimeout(to_top,1);
	}
}

