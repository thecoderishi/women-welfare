// JavaScript Document

$(document).ready(function(){
	
	
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
	$(document).on('submit', '#emp-UpdateForm', function() {
	 
	   $.post("update.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
			     $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#emp-UpdateForm")[0].reset();
				 $("body").fadeOut('slow', function()
				 {
					$("body").fadeOut('slow');
					window.location.href="../";
				 });				 
		     });	
		});   
	    return false;
    });
	/* Update Record  */
});
