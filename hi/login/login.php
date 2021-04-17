<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Women Welfare</title>
<link href="../../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../../assets/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<!--<link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet" media="screen"> 
<link href="../assets/datatables.min.css" rel="stylesheet" type="text/css">-->
<link href="../../css/login.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../assets/jquery/jquery-2.0.3.js"></script>
	<style type="text/css">
#dis
{
	display:none;
}
.login
{
    background:#fafafa;
    background-size:cover;
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


	<?php
	require_once '../../assets/datalink/dbconfig.php';
	require_once 'jscriptlogin.php';
	
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


<body class="login">
<div class="loginbox radius">

	<div class="loginboxinner radius">
    	<div class="loginheader">
   		<h1 class="title" align="center">Login</h1>
        <!--	<div class="logo"><img src=""/></div>-->
    	</div><!--loginheader-->
        
        <div class="loginform">
                	
        	<form  id='submit-id' action="check_login.php" method="get">
            	<p>
                	
                    <input type="text" id="username" name='txtId' value=""  placeholder='Username' required class="radius2" />
                      
                </p>
                
                <p>
                	<button class="radius title" type="submit" name="btn-submit-id" id="btn-submit-id">Login</button>
                </p>
               <span><?php //echo $error; ?></span>
                </p>
            </form>
        </div><!--loginform-->
    </div><!--loginboxinner-->
</div><!--loginbox-->

</center>
</div>


</body>

</body>
</html>