<?php
require_once '../datalink/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$userType = $_POST['txtUserType'];
		$GUserType = $_POST['txtGUserType'];
		$HUserType = $_POST['txtHUserType'];
	
		$delete = 0;
		
		$stt=$db_con->prepare("SET NAMES utf8"); 
		$stt->execute();
		
		$stmt = $db_con->prepare("UPDATE userType SET userTypeName=:un, hUserTypeName=:hun, gUserTypeName=:gun WHERE id=:id && deleted=:dl");
		$stmt->bindParam(":un", $userType);
		$stmt->bindParam(":hun",$HUserType );
		$stmt->bindParam(":gun",$GUserType );
		
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":dl", $delete);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>