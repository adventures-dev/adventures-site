

$(document).ready(function(){

       if($(window).width() >= 767) {	
       
       		parallaxScroll();
       	
			$(window).bind('scroll',function(e){
		    	parallaxScroll();
		
		    	
		    });
		}
  

			
});
$(window).resize(function() {
   if($(window).width() >= 767) {	
	   	parallaxScroll();
	    $(window).unbind("scroll");
	
	    $(window).bind('scroll',function(e){
	    	parallaxScroll();
	
	    });
    }else{
       $(window).unbind("scroll");
       
       	var overlay_opac = .65;
		$("#top_overlay").css("opacity", overlay_opac);
       
       	var background_size_width = 2000;
		var background_size_height = background_size_width/1.99;
		$("#top_background").css("background-size", background_size_width+"px "+background_size_height+"px");
        $("#top_overlay").css("position", "absolute");
        $("#top_background").css("position", "absolute");
    }


});

function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	    $("#top_overlay").css("position", "fixed");
        $("#top_background").css("position", "fixed");
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