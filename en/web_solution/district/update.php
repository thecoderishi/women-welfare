<?php
require_once '../datalink/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$district = $_POST['txtDistrict'];
		$Hdistrict = $_POST['txtHDistrict'];
		$Gdistrict = $_POST['txtGDistrict'];
		$state = $_POST['sid'];
		$delete = 0;
		
		$stt=$db_con->prepare("SET NAMES utf8"); 
		$stt->execute();
		
		$stmt = $db_con->prepare("UPDATE district SET districtName=:sn, hDistrictName=:hs, gDistrictName=:gs, stateId=:si WHERE id=:id && deleted=:dl");
		$stmt->bindParam(":sn", $district);
		$stmt->bindParam(":hs", $Hdistrict);
		$stmt->bindParam(":gs", $Gdistrict);
		$stmt->bindParam(":si", $state);
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