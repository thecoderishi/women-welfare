<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WomenWelfare</title>
<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/dist/css/bootstrap.min.css">
<link href="../../assets/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" type="text/css" href="../../assets/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
</head>

<body>

<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//include("src/PHPMailer.php");
//include("src/SMTP.php");
//include("src/Exception.php");
require '../../assets/mail/PHPMailerAutoload.php';
 
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;


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
    

<style>
	
</style>


<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="../../assets/jquery/jquery-2.0.3.js"></script>

<script src="../../assets/bootstrap/bootstrap.min.js"></script>
<link href="../../assets/select2/select2.css" rel="stylesheet"/>

<script src="../../assets/select2/select2.js"></script>
<script>
        $(document).ready(function() {
            //$("#cid").select2();
			$("#uid").select2();   
        });
    </script>
	  
	
<div class="container">
      <h1 align="center">Sign up form </h1>
	<form method='post' id='scheme-SaveForm' action="register.php">
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
					require_once '../../assets/datalink/dbconfig.php';
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
	
	
 		
	//isset($_POST['txtName']) && !empty($_POST['txtName']) AND isset($_POST['email']) && !empty($_POST['email']	
        if(isset($_POST['txtName']) && !empty($_POST['txtName']) && isset($_POST['txtEmail']) && !empty($_POST['txtEmail'])	)
        {
			include("../../assets/datalink/dbconfig.php"); 
			
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
$mail->addAddress('hemashree26698@gmail.com', 'verification');
//$mail->addAddress('principal.103.csvtu@gmail.com', 'Register ');

//Set the subject line
$mail->Subject = 'Online email send successfylly ack no      ????? ???  ';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.php'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

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