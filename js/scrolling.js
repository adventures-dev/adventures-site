

$(document).ready(function(){
		parallaxScroll();

    	
	$(window).bind('scroll',function(e){
    	parallaxScroll();

    	
    });
    
    $(window).bind('resize',function(e){
    	parallaxScroll();

    	
    });

			
});

function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	
	if(scrolled >= 0 && scrolled < 700){
		
		var overlay_opac = (65+(35-((700-scrolled)/20)))/100;
		$("#top_overlay").css("opacity", overlay_opac);
		
		var background_size_width = 2000-((700-(700-scrolled))/2);
		var background_size_height = background_size_width/1.99;
		$("#top_background").css("background-size", background_size_width+"px "+background_size_height+"px");
		
		
		
	}else if(scrolled < 0){
		$("#top_overlay").css("opacity", .65);
		
	}else{
		$("#top_overlay").css("opacity", 1);
	}
	
	
}