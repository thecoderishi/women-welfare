<?php
	session_start();

	include("../../assets/datalink/dbconfig.php");
	$pass=$_REQUEST['txtPass'];
	echo 'ID'.$id=$_SESSION['id']; //storing value of session in $id
	$check_pass="select * from loginMaster where email=:id && password=:pass";
	$stmt=$db_con->prepare($check_pass);
	$stmt->bindParam(":pass",$pass);
	$stmt->bindParam(":id",$id);
	$stmt->execute();
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$num=$stmt->rowCount();
	
	if($num==1)
	{
		echo 'Password is Correct';
//header("location:enter_otp.php");
	}
	/*else
	{
		echo 'invalid id';
	}
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo $row['email'];
	}
	$num=$stmt->rowCount();
	echo $num;
	if($num==1)
	{  
		header("location:category/index.php");
		//echo "hello";
	}*/
	else
	{
		echo "wrong pass ertyuio <br>";
		$query="select * from login_master where email=:id"; //query to fetch login fail count frim login_master table
		$stmt=$db_con->prepare($query);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION['count_wrong_pass']=$row['login_fails_count'];
		
		
		$_SESSION['count_wrong_pass']=$_SESSION['count_wrong_pass']+1;	// sesion to count no of failur in pass
		echo $count_wrong=$_SESSION['count_wrong_pass'];
		$insert_count_wrong_pass="UPDATE loginMaster SET loginFailsCount=:count_wrong_pass WHERE email=:id"; //updating the login_fails_count in login_master 
		$stmt=$db_con->prepare($insert_count_wrong_pass);
		$stmt->bindParam(":count_wrong_pass",$count_wrong);
		$stmt->bindParam(":id",$id);
		$stmt->execute() or die("asdfghjkl");
		
			
		if($count_wrong==3)	//if 3 times pass fails then login is denies for 3 minute
		{
			$num=0;
			//echo"retry after 3 minute";	
			$check_pass1="update loginMaster set loginFailsCount=:count_fails where email=:id";
			$stmt=$db_con->prepare($check_pass1);
			$stmt->bindParam(":count_fails",$num);
			$stmt->bindParam(":id",$id);
			$stmt->execute();
			session_destroy();
			header("location:login.php?pass=1");
		}
		else
		{
		echo "wrong pass back to enter pass";
		//echo $_SESSION['count_wrong_pass'];
		//session_destroy();
		header("location:enter_pass.php?pass=0");
		}
	}
	
?>