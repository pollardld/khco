jQuery(function() {
	jQuery("#primary-nav").append("<li id='sliding-brdr'></li>");
	    
    /* Cache it */
    var $magicLine = jQuery("#sliding-brdr");
    
    $magicLine
        .width( jQuery(".current_page_item").width() )
        .css("left", jQuery(".current_page_item a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
        
    jQuery("#primary-nav li").find("a").hover(function() {
        $el = jQuery(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
    });

	/* Kick IE into gear */
    jQuery(".current_page_item_two a").mouseenter();
    
});