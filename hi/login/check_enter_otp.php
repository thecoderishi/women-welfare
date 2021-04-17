<?php
	session_start();
	include("../../assets/datalink/dbconfig.php");
	echo $id=$_SESSION['id'];
	echo 'otp'. $otp=$_REQUEST['txtOtp'];
	$check_otp="select * from loginMaster where email=:id";
	$stmt=$db_con->prepare($check_otp);   
	$stmt->bindParam(":id", $id);
	$stmt->execute();
	//$row=$stmt->fetch(PDO::FETCH_ASSOC);
	/*$check_otp="select * from loginMaster where email=:id && otp=:otp";
	$stmt=$db_con->prepare($check_otp);
	$stmt->bindParam(":otp", $otp);
	$stmt->bindParam(":id", $id);
	$stmt->execute();*/
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo $row['email'];
		echo "hello";
		$_SESSION['count_wrong_otp']=$row['login_fails_count'];

		
	}
	//$num=$stmt->rowCount();
	//echo $num;
	if($otp==$_SESSION['otp']) 
	{  
		
		header("location:../category/index.php");
		echo "hello num is 1";
	}
	else
	{
		echo "wrong otp";
		 //storing value of session in $id
		
		$_SESSION['count_wrong_otp']=$_SESSION['count_wrong_otp']+1;	// sesion to count no of failur in otp
		echo $count_wrong_otp=$_SESSION['count_wrong_otp'];
		$insert_count_wrong_otp="UPDATE loginMaster SET loginFailsCount=:count_wrong_otp WHERE email=:id";
		$stmt=$db_con->prepare($insert_count_wrong_otp);
		$stmt->bindParam(":count_wrong_otp",$count_wrong_otp);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
			
		if($count_wrong_otp==3)	//if 3 times otp fails then login is denies for 3 minute
		{
			$num=0;
			echo"retry afte 3 minute";	
			$_SESSION['count_wrong_otp']=$row['loginFailsCount'];
			$_SESSION['count_wrong_otp']=$_SESSION['count_wrong_otp']+1;	// sesion to count no of failur in otp
			echo $count_wrong_otp=$_SESSION['count_wrong_otp'];
			$insert_count_wrong_otp="UPDATE loginMaster SET loginFailsCount=:count_wrong_otp WHERE email=:id";
			$stmt=$db_con->prepare($insert_count_wrong_otp);
			$stmt->bindParam(":count_wrong_otp",$num);
			$stmt->bindParam(":id",$id);
			$stmt->execute();
			header("location:login.php?otp=1");
			session_destroy();
		}
		else
		{
		echo 'wrong otp';
		header("location:enter_otp.php?otp=0");
		}
	}
	
?>