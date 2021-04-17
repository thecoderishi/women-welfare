<?php
require_once '../datalink/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$state = $_POST['txtCountry'];
		$stateH = $_POST['txtHCountry'];
		$stateG = $_POST['txtGCountry'];
		//$country = $_POST['cid'];
		$delete = 0;
		
		$stt=$db_con->prepare("SET NAMES utf8"); 
		$stt->execute();
		
		$stmt = $db_con->prepare("UPDATE country SET countryName=:cn, hCountryName=:hc, gCountryName=:gc WHERE id=:id && deleted=:dl");
		$stmt->bindParam(":cn", $state);
		$stmt->bindParam(":hc", $stateH);
		$stmt->bindParam(":gc", $stateG);
		//$stmt->bindParam(":ci", $country);
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