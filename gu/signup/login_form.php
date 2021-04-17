
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link type="text/css" rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
<title>Sign-up</title>

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
    <div class="container">
    <!-- start wrap div -->   
    <div id="wrap">
       
         <!-- title and description -->    
        <h1>Login Form</h1>
        <p>Please enter your name and password to login</p>
        
         <!-- start PHP code -->
         
        <?php
         
            $con = mysqli_connect("localhost", "root", "");
            mysqli_select_db($con,"registrations");
                   	
		if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['password']) && !empty($_POST['password']))
		{
			$username = $_POST['name'];
			$password = md5($_POST['password']);
                 
   		    $search = mysqli_query($con,"SELECT user_name, password, active FROM users WHERE username='".$username."' AND password='".$password."' AND active='1'"); 
			
    		$match  = mysqli_num_rows($search);
			if($match > 0)
			{
				$msg = 'You are successfully LOGIN';
				
			}
			else
			{
				$msg = 'Login Failed! Please make sure that you enter the correct details and that you have activated your account';
			}
        }
		 
        ?>
        
        <!-- stop PHP Code -->
         
        <!-- start login form -->   
        <form action="login_form.php" method="post" class="form">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="" />
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" value="" />
             
            <input type="submit" class="btn btn-primary" value="Login" />
            
        </form>
        <!-- end login form --> 
         
    </div>
    <!-- end wrap div --> 
   </div>
</body>
</html>