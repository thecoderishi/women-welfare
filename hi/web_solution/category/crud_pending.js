// JavaScript Document


$(document).ready(function(){
	
	/* Data Insert Starts Here */
	$(document).on('submit', '#category-SaveForm', function() {
	  
	   $.post("create.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			    $("#category-SaveForm")[0].reset();
				//$('#txtState').val('');
				//$('#txtHState').val('');
				//$('#txtGState').val('');
				//$('#emajorsubject').val('');
				$('#cid').focus();
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
				$(".content-loader").load('edit_form_pending.php?edit_id='+edit_id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		return false;
	});
	/* Get Edit ID  */
	
	/* Update Record  */
	$(document).on('submit', '#category-UpdateForm', function() {
	 
	   $.post("update_pending.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
			     $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#category-UpdateForm")[0].reset();
				 $("body").fadeOut('slow', function()
				 {
					$("body").fadeOut('slow');
					window.location.href="pending.php";
				 });				 
		     });	
		});   
	    return false;
    });
	/* Update Record  */
	
	/* */
	$("#btn-approv").click(function()
	{
		window.location.href="index.php";
	});
	
	
	/* */
	$("#btn-pending").click(function()
	{
		/*$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('pending.php');
			 });*/
		  window.location.href="pending.php";
	});
	
	

	$(".approved").click(function(){
		
		if ($(this).is(':checked')){
			//alert(this.value );
			var a= this.value;
			//alert(a);
			window.location.href="approved.php?cid="+a;
			
			}
		
		
	});
	
	
	
	/* for english to hindi*/
	$("#btn-lng-hi").click(function(){
			
		$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('pendingH.php');
			 });
	});
	
	/* for english to gujarati*/
	$("#btn-lng-gu").click(function(){
			
		$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('pendingG.php');
			 });
	});
	
	/* for english to gujarati*/
	$("#btn-lng-en").click(function(){
			
		window.location.href="pending.php";
	});
});
