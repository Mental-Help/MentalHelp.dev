$(function(){
	// $('.event-slider').Thumbelina({
	// 	$bwdBut:$('.event-slider .left'),    // Selector to left button.
	// 	$fwdBut:$('.event-slider .right')    // Selector to right button.
	// });
	
	// $('.story-slider').Thumbelina({
	// 	$bwdBut:$('#.story-slider.left'),    // Selector to left button.
	// 	$fwdBut:$('#.story-slider.right')    // Selector to right button.
	// });

	$('#event-slider').Thumbelina({
		orientation:'vertical',         // Use vertical mode (default horizontal).
		$bwdBut:$('#event-slider .top'),     // Selector to top button.
		$fwdBut:$('#event-slider .bottom')   // Selector to bottom button.
	});
})();