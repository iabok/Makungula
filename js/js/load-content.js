 

$(document).ready(function() {

	//Speed of the slideshow
	var speed = 5000;
	
	//You have to specify width and height in #slider CSS properties
	//After that, the following script will set the width and height accordingly
	$('#mask-gallery, #gallery li').width($('#slider').width());	
	$('#gallery').width($('#slider').width() * $('#gallery li').length);
	$('#mask-gallery, #gallery li, #mask-excerpt, #excerpt li').height($('#slider').height());
	
	//Assign a timer, so it will run periodically
	var run = setInterval('newsscoller(0)', speed);	
	
	$('#gallery li:first, #excerpt li:first').addClass('selected');

	//Pause the slidershow with clearInterval
	$('#btn-pause').click(function () {
		clearInterval(run);
		return false;
	});

	//Continue the slideshow with setInterval
	$('#btn-play').click(function () {
		run = setInterval('newsscoller(0)', speed);	
		return false;
	});
	
	//Next Slide by calling the function
	$('#btn-next').click(function () {
		newsscoller(0);	
		return false;
	});	

	//Previous slide by passing prev=1
	$('#btn-prev').click(function () {
		newsscoller(1);	
		return false;
	});	
	
	//Mouse over, pause it, on mouse out, resume the slider show
	$('#slider').hover(
	
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('newsscoller(0)', speed);	
		}
	); 	
	
});


function newsscoller(prev) {

	//Get the current selected item (with selected class), if none was found, get the first item
	var current_image = $('#gallery li.selected').length ? $('#gallery li.selected') : $('#gallery li:first');
	var current_excerpt = $('#excerpt li.selected').length ? $('#excerpt li.selected') : $('#excerpt li:first');

	//if prev is set to 1 (previous item)
	if (prev) {
		
		//Get previous sibling
		var next_image = (current_image.prev().length) ? current_image.prev() : $('#gallery li:last');
		var next_excerpt = (current_excerpt.prev().length) ? current_excerpt.prev() : $('#excerpt li:last');
	
	//if prev is set to 0 (next item)
	} else {
		
		//Get next sibling
		var next_image = (current_image.next().length) ? current_image.next() : $('#gallery li:first');
		var next_excerpt = (current_excerpt.next().length) ? current_excerpt.next() : $('#excerpt li:first');
	}

	//clear the selected class
	$('#excerpt li, #gallery li').removeClass('selected');
	
	//reassign the selected class to current items
	next_image.addClass('selected');
	next_excerpt.addClass('selected');

	//Scroll the items
	$('#mask-gallery').scrollTo(next_image, 800);		
	$('#mask-excerpt').scrollTo(next_excerpt, 800);					
	
}

   $(document).ready(
				function(){
					$('ul#img').innerfade({
						speed: 1000,
						timeout: 5000,
						type: 'sequence'
					});
					
					 

			});
$(window).load(function() {	
 
var status1=$('#status_home');
status1.html('<img src="images/loading.gif" />').fadeIn(1000);
  $.ajax({
  url: "http://localhost/cms2/lastest/watsups.php",
  cache: false,
  success: function(html){
  $("#wpt-content").append(html);
  
status1.html('<img src="images/loading.gif" />').fadeOut(1000); 
	}			   
    });			 
}); 

$(window).load(function() {	
 
var status1=$('#status_home');
status1.html('<img src="images/loading.gif" />').fadeIn(1000);
  $.ajax({
  url: "http://localhost/cms2/lastest/lovecafe.php",
  cache: false,
  success: function(html){
  $("#wpt-content-lovecafe").append(html);
  
status1.html('<img src="images/loading.gif" />').fadeOut(1000); 
	}			   
    });			 
}); 

$(window).load(function() {	
 
var status1=$('#status_home');
status1.html('<img src="images/loading.gif" />').fadeIn(1000);
  $.ajax({
  url: "http://localhost/cms2/lastest/features.php",
  cache: false,
  success: function(html){
  $("#wpt-content-features").append(html);
  
status1.html('<img src="images/loading.gif" />').fadeOut(1000); 
	}			   
    });			 
}); 
 
 
