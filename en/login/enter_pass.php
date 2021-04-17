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
<style>
.login
{
    background:#fafafa;
    background-size:cover;
}
</style>
  <?php	
	   
	   session_start();
		$_SESSION['count_wrong_pass'];	
	if(isset($_REQUEST['pass'])&&$_REQUEST['pass']==0)
	{
		 echo "<div class='holder'><h3 style='color:red'>Wrong Password<h3> </div>";
	}
	if(isset($_REQUEST['pass'])&&$_REQUEST['pass']==1)
	{
		
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
                	
        	<form  action="check_enter_pass.php" id="submit-pass" method="post">
            	<p>
                	
                    <input type="text" name='txtPass' value=""  placeholder='Password' required class="radius2" />
                      
                </p>
                
                <p>
                	<button class="radius title" type="submit" name="btn-submit-pass" id="btn-submit-pass">Login</button>
                </p>
               <span><?php echo $error; ?></span>
                </p>
            </form>
        </div><!--loginform-->
    </div><!--loginboxinner-->
</div><!--loginbox-->

</center>
</div>


   
   </form>
   </body>
</html>