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
	<form action="check_enter_pass.php" id="submit-pass">
    Enter Pass
    	<input type="text" name="txtPass">
			<button type="submit" class="btn btn-primary" name="btn-submit-pass" id="btn-submit-pass">
    		<span class="glyphicon glyphicon-plus"></span> Submit Pass
			</button>  
            </td> 
   </form>
