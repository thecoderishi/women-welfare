<?php if(isset($_REQUEST['otp'])&&$_REQUEST['otp']==0)
	{
		 echo "<div class='holder'><h3 style='color:red'>";
		 echo 'Wrong Password Retry after  ';
		 ?> <script> atimer();</script> <?php
		echo " minute <h3> </div>";
	}
	?>
	<form action="check_enter_otp.php" id="submit-otp">
    Enter OTP
    	<input type="text" name="txtOtp">
			<button type="submit" class="btn btn-primary" name="btn-submit-otp" id="btn-submit-otp">
    		<span class="glyphicon glyphicon-plus"></span> Submit
			</button>  
           
   </form>
