<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WomenWelfare</title>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/dist/css/bootstrap.min.css">
<link href="../assets/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

<title>Sign-up</title>


<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="../assets/jquery/jquery-2.0.3.js"></script>

<script src="../assets/bootstrap/bootstrap.min.js"></script>

</head>
	
<style>
		#wrap .statusmsg
		{
			font-size: 12px; 
			padding: 3px; 
			background: #EDEDED; 
			border: 1px solid #DFDFDF;
		}
	</style>
</head>

<body>
    
    <div class="container"> 
    
    <!-- start wrap div -->  
    
    <div id="wrap">
         
        <!-- start php code -->
        
    <?php
	

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
//date_default_timezone_set('Etc/UTC');-----------------------

require '../assets/mail/PHPMailerAutoload.php';
echo $_GET['email']."<br/>".$_GET['hash'];

	//$email="a@gmail.com";
	//$hash="2984c6d149f86dbec709bb40caab20c9";
//	$active=0;
			
			
			if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash']))
			//if(isset($email) && !empty($email) and isset($hash) && !empty($hash))
			{
				// Verify data
				
				require_once('../assets/datalink/dbconfig.php');
				
				 $email = $_GET['email']; // Set email variable
    			 $hash = $_GET['hash']; // Set hash variable 
				// $active=$_GET['active'];//set active variable
				 $active=0;
				  $uid = $_GET['uid'];
				  $name = $_GET['name'];
				  echo $uid."<br/>".$name;

			
				  
				
				 
				// $stmt = $db_con->prepare("SELECT email, activationLink , active, activationLinkValidUpto from loginMaster where email='".$email."' AND activationLink=:id AND active=0");
       //$stmt->execute();
	   
	   
				$stmt = $db_con->prepare(" SELECT * FROM loginMaster where date_add(activationLinkValidUpto , interval 1 day)>   now()  AND activationLink=:id AND active=0");
	   $stmt->execute(array(':id'=>$hash));	
	   $x=0;
	   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	//echo $row['activationLinkValidUpto'];
	$x=1;
	
		
	            $query="update loginMaster set active=1 where email=:a2 and activationLink=:a3 and active=:a4";
				$stmt=$db_con->prepare($query);
				
				$stmt->bindParam(":a2",$email);
				$stmt->bindParam(":a3",$hash);
				$stmt->bindParam(":a4",$active);
				
						if($stmt->execute())
						{
						  echo '<div class="statusmsg">Your account has been activated, Now wait for approval of your ID</div>' ;
						 
						}
						else
						{
							echo '<div class="statusmsg">invalid approach</div>' ;
						}
				}
				if($x==0)
				{
					
							echo '<div class="statusmsg">your link is expired . please try next time </div>' ;
							$stmt=$db_con->prepare("DELETE FROM loginMaster WHERE activationLink=:id");
	                        $stmt->execute(array(':id'=>$hash));	
							
					
				}		
			
					
			}
	?>   
        <!-- end php code -->
     
        </div>
    <!-- end wrap div -->
    </div>
</body>
</html>