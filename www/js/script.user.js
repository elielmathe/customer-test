$(function() {
	$("#start-live-chat-user").click(function() {
		if($("#live-chat-user").is(":visible")) {
			
		} else {
			$("#live-chat-user").addClass("popup-box-on");
		}
	});
	
	$("#btn-close-the-chat-user").click(function(){
		if($("#live-chat-user").is(":visible")) {
			$("#live-chat-user").removeClass("popup-box-on");
		} else {
			
		}
	});
}); 