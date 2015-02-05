			
			
$(document).ready(function(){
	/*Expands form 2 when next button clicked and contracts form 1*/
	$("#next1").click(function(){
		$("#form1").slideUp("slow");
		$("#form2").slideDown("slow");
	});
	$("#next2").click(function(){
		$("#form2").slideUp("slow");
		$("#form3").slideDown("slow");
	});
	
	/*Both functions below expand form 1 and 2 (respectively) after their orange headers are clicked*/
	$("#step_1_head").click(function(){
		$("#form1").slideDown("slow");
	});
	$("#step_2_head").click(function(){
		$("#form2").slideDown("slow");
	});
});