<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link type="text/css" rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<title>Sign-up</title>
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
	
	
include("src/PHPMailer.php");
include("src/SMTP.php");
include("src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	//$email="a@gmail.com";
	//$hash="2984c6d149f86dbec709bb40caab20c9";
//	$active=0;
			
			
			if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash']))
			//if(isset($email) && !empty($email) and isset($hash) && !empty($hash))
			{
				// Verify data
				require_once('dbconfig.php');
				
				 $email = $_GET['email']; // Set email variable
    			 $hash = $_GET['hash']; // Set hash variable 
				// $active=$_GET['active'];//set active variable
				 $active=0;
				  $uid = $_GET['uid'];
				  $user=$uid-1;
				  $name = $_GET['name'];
				  
				  
				
				 
				// $stmt = $db_con->prepare("SELECT email, activationLink , active, activationLinkValidUpto from loginMaster where email='".$email."' AND activationLink=:id AND active=0");
       //$stmt->execute();
	   
	   
				$stmt = $db_con->prepare(" SELECT * FROM loginmaster where date_add(activationLinkValidUpto , interval 3 minute)>    now()  AND activationLink=:id AND active=0");
	   $stmt->execute(array(':id'=>$hash));	
	   $row=$stmt->fetch(PDO::FETCH_ASSOC);
	//echo $row['activationLinkValidUpto'];
	
	
				$num=1;
				$match = $row->rowCount();
				if($match > 0)
				{
					// We have a match, activate the account
					
	
	            $query="update loginMaster set active=:a1 where email=:a2 and activationLink=:a3 and active=:a4";
				$stmt=$db_con->prepare($query);
				$stmt->bindParam(":a1",$num);
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
				else 
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