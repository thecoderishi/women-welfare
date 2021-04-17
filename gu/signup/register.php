<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include("src/PHPMailer.php");
include("src/SMTP.php");
include("src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

?>

<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<style>
		.form-control
		{
			width:30%;	
		}
		table
		{
			width:100%
		}
		.btn
		{
			margin-top:2em
		}
		p
		{
			color:#009
		}
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

  <?php 
    if(isset($msg)){  // Check if $msg is not empty
        echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
    } 
?>
    
   	
<link href="../../../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../../../assets/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../../../assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen"> 
<link href="../DataTables/datatables.min.css" rel="stylesheet" type="text/css">
<link href="../scheme/crud_style.css" rel="stylesheet" type="text/css" />

<style>
	
</style>


<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="../jquery/jquery-2.0.3.js"></script>

<script src="../bootstrap/bootstrap.min.js"></script>
<link href="../../../assets/select2/select2.css" rel="stylesheet"/>

<script src="select2.js"></script>
<script>
        $(document).ready(function() {
            //$("#cid").select2();
			$("#uid").select2();   
        });
    </script>
	  
	

      <h1 align="center">Sign up form </h1>
	<form method='post' id='scheme-SaveForm' action="register.php">
	 <table class='table table-bordered'>
  <tr>
            <td>Name</td>
            <td><input type='text' name='txtName' id='txtName' class='form-control' placeholder='' required /></td>
        </tr>
        
        
        
         <tr>
            <td> Designation</td>
            <td><input type='text' name='txtDesignation' id='txtdDesignation' class='form-control' placeholder='' required /></td>
        </tr>
        
           
         <tr>
            <td>Email Id</td>
            <td><input type='text' name='txtEmail' id='txtEmail' class='form-control' placeholder='' required /></td>
        </tr>
        
         <tr>
            <td>Password</td>
            <td><input type='text' name='txtPassword' id='txtPassword' class='form-control' placeholder='' required /></td>
        </tr>
        
        
 		 <tr>
            <td>Mobile</td>
            <td><input type='text' name='txtMobile' id='txtMobile' class='form-control' placeholder='' required /></td>
        </tr>
       
         <tr>
            <td>Residential Address</td>
            <td><input type='text' name='txtResident' id='txtResident' class='form-control' placeholder='' required /></td>
        </tr>
    
       
         <tr>
            <td>Office Name </td>
            <td><input type='text' name='office' id='office' class='form-control' placeholder='' required /></td>
        </tr>
        
        
        
         <tr>
            <td>Office Address</td>
            <td><input type='text' name='txtAddress' id='txtAddress' class='form-control' placeholder='' required /></td>
        </tr>
        
        
        
        <tr>
            <td colspan="2">
            <input type="submit" class="btn btn-primary" name="btn-save" id="btn-save" data-loading-text="Loading..." autocomplete="off">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
		 
            </td>
            
        </tr>
 
		</table>
</form>
 
		<?php 
	
	
 		
	//isset($_POST['txtName']) && !empty($_POST['txtName']) AND isset($_POST['email']) && !empty($_POST['email']	
        if(isset($_POST['txtName']) && !empty($_POST['txtName']) && isset($_POST['txtEmail']) && !empty($_POST['txtEmail'])	)
        {
			include("../../dbconfig.php"); 
			
            // Form Submited
			
            $name = $_POST['txtName']; 
   		    $designation = $_POST['txtDesignation'];
			$email=$_POST['txtEmail'];
			$password=$_POST['txtPassword'];
			$mobile=$_POST['txtMobile'];
			$officeName=$_POST['office'];
			$address=$_POST['txtAddress'];
			$uid=$_POST['uid'];
			$resident=$_POST['txtResident'];
			
			/*if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
			{
 			   // Return Error - Invalid Email
			}
			else
			{*/
    			// Return Success - Valid Email
			$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email'; 
			$md1 = crypt($email); // Generate random 32 character
			$sha1a= sha1($md1);
			echo $hash=md5 ($sha1a);
			
			//$password = rand(1000,5000); // Generate random number between 1000 and 5000 Example output: 4568
			
			$stmt = $db_con->prepare("INSERT INTO loginMaster(logName,mobile,address,email,password,userTypeId,designation,activationLink,officeName,officeAddress,activationLinkValidUpto) VALUES(:a1,:a2,:a3,:a4,:a5,:a6,:a7,:a8,:a9,:a10,now())");
			
				        $stmt->bindParam(":a1",$name );
						$stmt->bindParam(":a2",$mobile);
						$stmt->bindParam(":a3",$resident);
						$stmt->bindParam(":a4",$email);
						$stmt->bindParam(":a5",$password);
						$stmt->bindParam(":a6",$uid);
						$stmt->bindParam(":a7",$designation);
						$stmt->bindParam(":a8",$hash);
						$stmt->bindParam(":a9",	$officeName);
						$stmt->bindParam(":a10",$address);
						$stmt->execute();
			

			
			/*------VERIFY THE EMAIL OF THE USER-------*/

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mx1.hostinger.in';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@mx1.ac.in';                 // SMTP username
    $mail->Password = 'rishir512';                           // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('testing@polydurg.ac.in','Test UPU');
    $mail->addAddress($email,'Verification');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
     
    $content= '<html> <body> <div style="border:solid #999 1px"><div style="height:20px;background:purple;width:75%;border-bottom-right-radius:30px"> </div> <div style="padding:10px"> Thanks for signing up!<br>
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br>
			 
			------------------------<br>
			Username: <b>'.    $name.'</b> <br>
			
			------------------------<br>
			 
			Please click this link to activate your account: <br>
		    http:/localhost/hdstar/signUp/verification.php?email='.$email.'&hash='.$hash.'&uid='.$uid.'&name='.$name.'
      
        </div>
		</div> 
			 </body> </html>';

    $mail->Subject = 'Here is the subject';
    $mail->Body    = $content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
		
			}
	
		
		?>
	
         


         
        <!-- end php code -->
     
        <!-- title and description --> 
        
      
   
         
	
    	 
		 
      
        <!-- end sign up form -->
         
    </div>
    <!-- end wrap div -->
    </div>
	<!-- js files -->
<!--<script src='js/jquery.min.js'></script>--> 
<!-- /js files -->
</body>
</html>