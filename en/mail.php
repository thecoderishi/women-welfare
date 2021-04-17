<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
//date_default_timezone_set('Etc/UTC');-----------------------

require '../assets/mail/PHPMailerAutoload.php';
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WomenWelfare</title>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/dist/css/bootstrap.min.css">
<link href="../assets/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">



</head>

<body>


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
    

<style>
	
</style>


<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="../assets/jquery/jquery-2.0.3.js"></script>

<script src="../assets/bootstrap/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>

         $(document).ready(function() {
            $("#uid").select2(); 
             $("#tid").select2();  
        });
    </script>
	  

	  
	
<div class="container">
      <h1 align="center">Sign up form </h1>
	<form method='post' id='scheme-SaveForm' action="#">
	 <table class='table table-bordered'>
        <tr>
        <td>Name</td>
        <td><input type='text' name='txtName' id='txtName' class='form-control' placeholder='Please Enter Your Name...' required style="width:100%"/></td>
        </tr>
        
        
        
         <tr>
            <td> Designation</td>
            <td><input type='text' name='txtDesignation' id='txtdDesignation' class='form-control' placeholder='' required style="width:100%" /></td>
        </tr>
        
           
         <tr>
            <td>Email Id</td>
            <td><input type='text' name='txtEmail' id='txtEmail' class='form-control' placeholder='' required style="width:100%"/></td>
        </tr>
        
         <tr>
            <td>Password</td>
            <td><input type='text' name='txtPassword' id='txtPassword' class='form-control' placeholder='' required style="width:100%"/></td>
        </tr>
        
        
 		 <tr>
            <td>Mobile</td>
            <td><input type='text' name='txtMobile' id='txtMobile' class='form-control' placeholder='' required style="width:100%"/></td>
        </tr>
       
         <tr>
            <td>Residential Address</td>
            <td><input type='text' name='txtResident' id='txtResident' class='form-control' placeholder='' required style="width:100%"/></td>
        </tr>
    
       
         <tr>
            <td>Office Name </td>
            <td><input type='text' name='office' id='office' class='form-control' placeholder='' required style="width:100%"/></td>
        </tr>
        
        
        
         <tr>
            <td>Office Address</td>
            <td><input type='text' name='txtAddress' id='txtAddress' class='form-control' placeholder='' required style="width:100%"/></td>
        </tr>
        
         <tr>
            <td>User Type</td>
            <td> 
        <select style="width:100%" id="uid" name="uid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM userType  ORDER BY id");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['userTypeName'].",".$row['hUserTypeName'].",".$row['gUserTypeName']; ?></b> </option>
        
          <?php } ?>
        </select>
        
          </td>
        </tr>
        
        <tr>
            <td> Level Type</td></td>
            <td> 
        <select style="width:100%" id="tid" name="tid">
			<option><b>Plz type or select</b></option>
              <?php
					require_once '../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT * FROM typeLevel  ORDER BY id");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
	  		  ?>
		<option value="<?php echo $row['id']; ?>" > <b><?php echo $row['level'].",".$row['hLevel'].",".$row['gUserLevel']; ?></b> </option>
        
          <?php } ?>
        </select>
        
          </td>
        </tr>
        
        
        
        
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save" data-loading-text="Loading..." autocomplete="off">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
		    </button>
            </td>
            
        </tr>
 
		</table>
</form>
 </div>


<?php 

if(isset($_POST['txtName']) && !empty($_POST['txtName']) && isset($_POST['txtEmail']) && !empty($_POST['txtEmail'])	)
        {
			include("../assets/datalink/dbconfig.php"); 
			
            // Form Submited
			
            $name = $_POST['txtName']; 
   		    $designation = $_POST['txtDesignation'];
			$email=$_POST['txtEmail'];
			$password=$_POST['txtPassword'];
			$mobile=$_POST['txtMobile'];
			$officeName=$_POST['office'];
			$address=$_POST['txtAddress'];
			$uid=$_POST['uid'];
			$tid=$_POST['tid'];
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
			
			$stmt = $db_con->prepare("INSERT INTO loginMaster(logName,mobile,address,email,password,userTypeId,designation,activationLink,officeName,officeAddress,activationLinkValidUpto,typeLevelId) VALUES(:a1,:a2,:a3,:a4,:a5,:a6,:a7,:a8,:a9,:a10,now(),:a11)");
			
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
						$stmt->bindParam(":a11",$tid);
					if (	$stmt->execute())
					{
			

		
/* verify email */
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
$mail->CharSet = "UTF-8";
//Set the hostname of the mail server
$mail->Host = 'webmail.polydurg.ac.in';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 25;

//Set the encryption system to use - ssl (deprecated) or tls
//$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "testing@polydurg.ac.in";

//Password to use for SMTP authentication
$mail->Password = 'Te@mhd$ta8';

//Set who the message is to be sent from
$mail->setFrom('manoj@polydurg.ac.in', 'UPU Govt Polytechnic Durg');

//Set an alternative reply-to address
$mail->addReplyTo('mintuc362@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($email, 'verification');
//$mail->addAddress('principal.103.csvtu@gmail.com', 'Register ');

//Set the subject line
$mail->Subject = 'Online email send successfylly ack no      ????? ???  ';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.php'), dirname(__FILE__));

   $mail->isHTML(true);                                  // Set email format to HTML
     
    $content= '<html> <body> <div style="border:solid #999 1px"><div style="height:20px;background:purple;width:75%;border-bottom-right-radius:30px"> </div> <div style="padding:10px"> Thanks for signing up!<br>
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br>
			 
			------------------------<br>
			Username: <b>'.  $name.'</b> <br>
			
			------------------------<br>
			 
			Please click this link to activate your account: <br>';
	$content=$content."<a href='http://teamhdstar.online/gujarat/en/verification.php?email=>".$email."&hash=".$hash."&uid=".$uid."&name=".$name."'> Click Me </a>";
			$content=$content.'
		     </div>
		</div> 
			 </body> </html>';

    $mail->Subject = 'Here is the subject';
    $mail->Body    = $content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
}
}


?>


