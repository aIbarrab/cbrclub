jQuery(document).ready(function($){

	// News Ticker
	 var quotes = $(".ticker-item");
	    var quoteIndex = -1;
	    
	    function showNextQuote() {
	        ++quoteIndex;
	        quotes.eq(quoteIndex % quotes.length)
	            .fadeIn(1000)
	            .delay(2000)
	            .fadeOut(1000, showNextQuote);
	    }
	    
	    showNextQuote();

	// Flexslider
	jQuery('#slider-box').flexslider({
		controlNav: false
	});
		    
	// Tinynav
	jQuery("#endolf").tinyNav();


});