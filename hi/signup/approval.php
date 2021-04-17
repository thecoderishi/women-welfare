
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
	
	
	        require_once('dbconfig.php');
			if(isset($_GET['email']) && !empty($_GET['email']))
			{
				$email = $_GET['email']; // Set email variable
    			
				  $u_id = $_GET['u_id'];
				  $log_id = $_GET['log_id'];
				 
				  $name = $_GET['name'];
				  
	            $query="update login_master set approved_by_id=:ab where email=:b and user_type_id=:c";
				$stmt=$db_con->prepare($query);
				$stmt->bindParam(":ab",$log_id);
				$stmt->bindParam(":b",$email);
				$stmt->bindParam(":c",$u_id);
				if($a=$stmt->execute())
				{
					echo "thank for approval process";
				}
				else
				{
					echo "something went wrong";
				}
					
				  
				
			}
			else
			{
				echo "intrrupt in process";
			}
	
	?>
       <!-- end php code -->
     
        </div>
    <!-- end wrap div -->
    </div>
</body>
</html>
