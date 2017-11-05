// JavaScript Document
$(document).ready(function() {
	$("body").on("click","#liKind", function(){
		var id = $(this).attr("kindID");
		
		$.post("ajax/kindProduct.php",{id:id},function(data){
		
		
			$("#dataProduct").html(data);	
			
		});
	});
	

	
   
});