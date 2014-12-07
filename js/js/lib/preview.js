$(document).ready(	
	function() {
		var $container = $(".container");	
		$container.watsupScroller({
					num_display:6,
					slide_width:150,
					slide_height:100,
					slide_margin:1,
					button_width:35,
					ctrl_height:25,
					margin:10,	
					auto_scroll:false,
					delay:4000,
					scroll_speed:1000,
					easing:"",
					auto_scale:false,
					move_one:false,
					ctrl_type:"scrollbar",
					display_buttons:true,
					mouseover_buttons:true,
					display_caption:true,
					mouseover_caption:true,
					caption_effect:"slide",
					caption_align:"bottom",
					caption_position:"inside",					
					cont_nav:true,
					shuffle:false,
					mousewheel_scroll:true
				});
		
		$("a[rel='scroller']").watsupLightBox({
			rotate:true,
			delay:4000,
			duration:600,
			display_number:true,
			display_dbuttons:true,
			display_timer:true,
			display_caption:true,
			caption_position:"outside",
			cont_nav:true,
			auto_fit:true,
			easing:"",
			type:"GET"
		});
		
		function init() {
			$ctrlTypes.val("scrollbar").attr("disabled", true)
			$captionEffects.val("slide").attr("disabled", true);
			$captionPositions.val("inside_bottom").attr("disabled", true);
			$scrollEasing.val("").attr("disabled", true);
			$lbTextPositions.val("outside").attr("disabled", true);
			$lightboxEasing.val("").attr("disabled", true);
		}
		
		init();
	}
);