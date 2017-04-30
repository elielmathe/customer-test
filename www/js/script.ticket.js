$(function(){
	var data = [[1,3],[43,43]];
	data = [
				{
					label:"Urgent",
					data:20,
					color:"red"
				},
				{
					label:"Closed",
					data:30,
					color:"#00ffec"
				},
				{
					label:"Completed",
					data:30,
					color:"#3edb1a"
				}
			];
	var options = {
		series:{
			pie:{
				show:true
			}
		}
	};
	$("#graphic-tickets").plot(data,options);
	
	tinymce.init({ selector:'.wysiwyg-editor',height:200,theme:'modern'});
	//$(".nice-select").niceSelect();
	
	//$(".wysiwyg-editor").css("background","white").css("width","15cm").css("height","10cm");
	//$("#editor").wysiwyg();
});
