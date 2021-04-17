	<?php
	
	
         include("src/PHPMailer.php");
include("src/SMTP.php");
include("src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	
           include("dbconfig.php"); 	       
		    $name = $_POST['txtName']; 
   		    $designation = $_POST['txtDesignation'];
			$email=$_POST['txtEmail'];
			$password=$_POST['txtPassword'];
			$mobile=$_POST['txtMobile'];
			$officeName=$_POST['office'];
			$address=$_POST['txtAddress'];
			$uid=$_POST['uid'];
			$resident=$_POST['txtResident'];
    
   /*------VERIFY THE EMAIL OF THE USER-------*/

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'webmail.polydurg.ac.in';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@polydurg.ac.in';                 // SMTP username
    $mail->Password = 'bAp7%46i';                           // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('testing@polydurg.ac.in','Test UPU');
    $mail->addAddress("hemashree26698@gmail.com",'Verification');     // Add a recipient
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
		    https://localhost//fresh//phpmailer//verification.php?email='.$email.'&hash='.$hash.'&u_id='.$user_type_id.'&name='.$name.'
      
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
		
		
	
		
		?>
	
        