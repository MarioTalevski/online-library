$(document).ready(function(){
// user box
	$(".header-login #panel-button").click(function(){
		$(".header-login #panel-content").slideToggle("slow");
		$(this).toggleClass("active"); return false;
	}); 
	
// error message
	$('.messageerror').click(function() {
		$(this).fadeOut(200, function() {
			$(this).hide();
		});
	});

// success message
	$('.messagesuccess').mouseover(function() {
		$(this).fadeOut(500, function() {
			$(this).hide();
		});
	});
});