<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>  </title>
<link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="../assets/jquery-2.0.3.js"></script>
<script type="text/javascript" src="../../bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../phpmailer/js/index.js"></script>
	<style type="text/css">
#dis{
	display:none;
}
</style>
<script>	
var t;
 var s=10;
 var m=0;
function display()
{
	
	
	//setInterval("show();",1000);
	document.getElementById("mytime").innerHTML=m+":"+s;
	/*var minute=document.getElementById("mytime").value;*/
	
	if(m==0 && s==0)
	{
		tpause();
	}
	if(s==0)
	{
		m=m-1;
		s=59;
	}
	s=s-1;
}
function atimer()
{
		t = setInterval("display();",1000);
}

function tstart()
{
	atimer();
}
function tpause()
{
	clearInterval(t);
	window.location.href="login.php";
}

</script>

</head>

<body>
	<?php
	require_once '../datalink/dbconfig.php';
	//require_once 'jscriptlogin.php';
	
	if(isset($_REQUEST['id'])&&$_REQUEST['id']==0)
	{
		 echo "<div class='alert alert-dangerous'><h3>Wrong Id</h3></div>";
	}
	if(isset($_REQUEST['pass'])&&$_REQUEST['pass']==1)
	{
		 echo "<div class='holder'><h3 style='color:red'>";
		 echo 'Retry after 3 minute ';
		 ?> <script> atimer();</script> <?php
		echo " Wrong Password<h3> </div>";
	}
	if(isset($_REQUEST['otp'])&&$_REQUEST['otp']==1)
	{
		 echo "<div class='holder'><h3 style='color:red'>";
		 echo 'Wrong Password Retry after  ';
		 ?> <script> atimer();</script> <?php
		echo " minute <h3> </div>";
	}
	
    ?>
	   

   
           
 	<div class="content-loader">
    <span id="mytime">
    <!--mytime to dispaly time-->
    <span>
    
    
	<form method='get' id='submit-id' action="check_login.php">
 
    <table>
 
        <tr>
            <td> Enter id</td>
            <td><input type='text' name='txtId' placeholder='Enter Your ID' required/></td>
		</tr>  
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-submit-id" id="btn-submit-id">
    		<span class="glyphicon glyphicon-plus"></span> Submit
			</button>  
            </td>
        </tr>
  </table>
</form>
</div><!---end of content_loader -->

</body>
</html>