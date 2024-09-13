$(document).ready(function(){
	
	$(".close-pane").click(function(){
		$(".btn-close").click();
	});

	$(".img-upload").click(function(){
		$(".upload-photo").click();
	});

	$(".img-upload").hover(
	
		function(){
			$(".show-upload-text").show(300);
		} ,
		
		function(){
			$(".show-upload-text").hide(300);
		}
	
	);
	
   $(".create-switch").click(function(){
	   $(".sign-in-pane").hide(300);
	   $(".sign-up-pane").slideDown(300);
   });

   $(".login-switch").click(function(){
	   $(".sign-in-pane").slideDown(300);
	   $(".sign-up-pane").hide(300);
   });
	
});