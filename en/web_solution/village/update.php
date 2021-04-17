<?php
require_once '../../../assets/datalink/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$village = $_POST['txtVillage'];
		$villageH = $_POST['txtHVillage'];
		$villageG = $_POST['txtGVillage'];
		$blockId = $_POST['bid'];
		$delete = 0;
		
		$stt=$db_con->prepare("SET NAMES utf8"); 
		$stt->execute();
		
		$stmt = $db_con->prepare("UPDATE village SET villageName=:cn, hVillageName=:hc, gVillageName=:gc,blockId=:bid WHERE id=:id && deleted=:dl");
		$stmt->bindParam(":cn", $village);
		$stmt->bindParam(":hc", $villageH);
		$stmt->bindParam(":gc", $villageG);
		$stmt->bindParam(":bid", $blockId);
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