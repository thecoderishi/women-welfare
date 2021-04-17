// JavaScript Document
<?php session_start(); ?>
	$(document).ready(function(){
	
	/* Submittion of Email ID  */
	$(document).on('submit','#submit-id',function(){
	  
	   $.post("check_login.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			    // $("#submit-id")[0].reset();
		     });	
		 });   
	     return false;
    });
	
	/*If Email Id is correct load Enter Password*/
		
	$("#btn-submit-id").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('enter_pass.php');
		});
	});

	
	
	
	/* Submittion of Password */
	$(document).on('submit','#submit-pass',function(){
	  
	   $.get("check_enter_pass.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#submit-pass")[0].reset();
		     });	
		 });   
	     return false;
    });

	 if( <?php $_SESSION['num'] ?>==1) 
	{

	/*If Password is correct load OTP*/
	$("#btn-submit-pass").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('enter_otp.php');
		});
	});
	
	}
	
	
		/* Submittion of OTP */
	$(document).on('submit','#submit-otp',function(){
	  
	   $.post("check_enter_otp.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#submit-pass")[0].reset();
		     });	
		 });   
	     return false;
    });


	/*If OTP is correct load Index Page*/
	$("#btn-submit-otp").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('index.php');
		});
	});

});



































