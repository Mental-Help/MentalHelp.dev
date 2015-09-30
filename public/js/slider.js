$(function(){
	// $('.event-slider').Thumbelina({
	// 	$bwdBut:$('.event-slider .left'),    // Selector to left button.
	// 	$fwdBut:$('.event-slider .right')    // Selector to right button.
	// });
	
	// $('.story-slider').Thumbelina({
	// 	$bwdBut:$('#.story-slider.left'),    // Selector to left button.
	// 	$fwdBut:$('#.story-slider.right')    // Selector to right button.
	// });

	$('#slider3').Thumbelina({
		orientation:'vertical',         // Use vertical mode (default horizontal).
		$bwdBut:$('#slider3 .top'),     // Selector to top button.
		$fwdBut:$('#slider3 .bottom')   // Selector to bottom button.
	});
})();