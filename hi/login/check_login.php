<?php
session_start();
try
{
	
	include("../../assets/datalink/dbconfig.php");
	$_SESSION['id']=$_REQUEST['txtId'];
	
	$id=$_SESSION['id'];
	$check_pass="select * from loginMaster where email=:id";
	$stmt=$db_con->prepare($check_pass);
	$stmt->bindParam(":id",$id);
	//$stmt->bindParam(":pass",$pass);
	$stmt->execute();
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$_SESSION['num']=$stmt->rowCount(); 
	$num=$_SESSION['num'];
	if($num==1)
	{
		echo 'Id is Correct';
		$_SESSION['count_wrong_pass']=$row['login_fails_count'];  //storing wrong login in the varaible
		header("location:enter_pass.php");
	}
	else
	{
		echo 'invalid id';	
		session_destroy();
		header("location:login.php?id=0");
	}
}
	catch(PDOException $e){
			echo $e->getMessage();
		}
	
	/*$stmt->execute();
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$num=$stmt->rowCount();*/
	
/* if($num==0)
 {
	 echo 'invalid ID';
 }
 else
 {
		header("location:enter_pass.php");
 }*/
	
?>