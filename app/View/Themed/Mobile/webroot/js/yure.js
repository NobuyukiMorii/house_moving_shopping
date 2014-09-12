(function($) {
    $.extend({
		yure: function yure(target){
				target.css("position","relative");
				target.animate({left:"-5px"},100)
					.animate({left:"5px"},100)
					.animate({left:"-2.5px"},100)
					.animate({left:"2.5px"},100)
					.animate({left:"-1.25px"},100)
					.animate({left:"1.25px"},100)
					.animate({left:"-0.625px"},100)
					.animate({left:"0.625px"},100)
					.animate({left:""},100);
			}
	});
})(jQuery);