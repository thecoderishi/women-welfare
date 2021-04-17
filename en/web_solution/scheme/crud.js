// JavaScript Document

$(document).ready(function(){
	
	/* Data Insert Starts Here */
	$(document).on('submit', '#scheme-SaveForm', function() {
	  
	   $.post("create.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			    // $("#scheme-SaveForm")[0].reset();
				$('#txtScheme').val('');
				$('#txtHScheme').val('');
				$('#txtGScheme').val('');
				//$('#emajorsubject').val('');
				//$('#cid').focus();
				 		     });	
		 });   
	     return false;
    });
	/* Data Insert Ends Here */
	
	
	/* Data Delete Starts Here */
	$(".delete-link").click(function()
	{
		var id = $(this).attr("id");
		var del_id = id;
		var parent = $(this).parent("td").parent("tr");
		
			$.post('delete.php', {'del_id':del_id}, function(data)
			{
				parent.fadeOut('slow');
			});	
				return false;
	});
	/* Data Delete Ends Here */
	
	/* Get Edit ID  */
	$(".edit-link").click(function()
	{
		var id = $(this).attr("id");
		var edit_id = id;
		
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('edit_form.php?edit_id='+edit_id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		return false;
	});
	/* Get Edit ID  */
	
	/* Update Record  */
	$(document).on('submit', '#scheme-UpdateForm', function() {
	 
	   $.post("update.php", $(this).serialize())
        .done(function(data){
			
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
			     $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#scheme-UpdateForm")[0].reset();
				 $("body").fadeOut('slow', function()
				 {
					$("body").fadeOut('slow');
					window.location.href="index.php";
				 });				 
		     });	
		});   
	    return false;
    });
	/* Update Record  */
	
	/****language button*****************/
	
	$("#btn-lng-gu").click(function()
	{
			$(".content-loader").fadeOut('slow', function()
			 {
				window.location.href="Gindex.php";
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		return false;
	});
	
	$("#btn-lng-hi").click(function()
	{
			$(".content-loader").fadeOut('slow', function()
			 {
				window.location.href="Hindex.php";
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		return false;
	});
	
	$("#btn-lng-en").click(function()
	{
			$(".content-loader").fadeOut('slow', function()
			 {
				window.location.href="index.php";
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		return false;
	});
});
