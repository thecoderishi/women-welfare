<?php
include_once '../../../assets/datalink/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$state = $_POST['txtState'];
		$Hstate = $_POST['txtHState'];
		$Gstate = $_POST['txtGState'];
		$country = $_POST['cid'];
		$delete = 0;
		
		$stt=$db_con->prepare("SET NAMES utf8"); 
		$stt->execute();
		
		$stmt = $db_con->prepare("UPDATE state SET stateName=:sn, hStateName=:hs, gStateName=:gs, countryId=:ci WHERE id=:id && deleted=:dl");
		$stmt->bindParam(":sn", $state);
		$stmt->bindParam(":hs", $Hstate);
		$stmt->bindParam(":gs", $Gstate);
		$stmt->bindParam(":ci", $country);
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
//8516928415
?>