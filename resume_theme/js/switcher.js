/* ================================================================= */
/* CSS Style Switcher By FIFO THEMES
====================================================================== */

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function($) {
	
		// Color Changer
		
		$(".turquoise" ).click(function(){
			$(".colors" ).attr("href", "css/colors/turquoise.css" );
			return false;
		});
		
		$(".peterriver" ).click(function(){
			$(".colors" ).attr("href", "css/colors/peterriver.css" );
			return false;
		});
		
		$(".asphalt" ).click(function(){
			$(".colors" ).attr("href", "css/colors/asphalt.css" );
			return false;
		});
		
		
		$(".alizarin" ).click(function(){
			$(".colors" ).attr("href", "css/colors/alizarin.css" );
			return false;
		});

		$(".amethyst" ).click(function(){
			$(".colors" ).attr("href", "css/colors/amethyst.css" );
			return false;
		});

		$(".carrot" ).click(function(){
			$(".colors" ).attr("href", "css/colors/carrot.css" );
			return false;
		});
		
		
		$(".sunflower" ).click(function(){
			$(".colors" ).attr("href", "css/colors/sunflower.css" );
			return false;
		});
		
		$(".concrete" ).click(function(){
			$(".colors" ).attr("href", "css/colors/concrete.css" );
			return false;
		});
		
	
		
	

		$("#style-switcher h2 a").click(function(e){
			e.preventDefault();
			var div = $("#style-switcher");
			console.log(div.css("left"));
			if (div.css("left") === "-206px") {
				$("#style-switcher").animate({
					left: "0px"
				}); 
			} else {
				$("#style-switcher").animate({
					left: "-206px"
				});
			}
		});


		$("#layout-switcher").on('change', function() {
			$('#layout').attr('href', $(this).val() + '.css');
		});

		$(".colors li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
		});
		

			

	});