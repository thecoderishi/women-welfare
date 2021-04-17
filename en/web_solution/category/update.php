<?php
require_once '../../../assets/datalink/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$Category = $_POST['txtCategory'];
		$CategoryH = $_POST['txtHCategory'];
		$CategoryG = $_POST['txtGCategory'];
	
		$delete = 0;
		
		$stt=$db_con->prepare("SET NAMES utf8"); 
		$stt->execute();
		try{
		$stmt = $db_con->prepare("UPDATE category SET categoryName=:cn, hCategoryName=:hc, gCategoryName=:gc WHERE id=:id && deleted=:dl");
		$stmt->bindParam(":cn", $Category);
		$stmt->bindParam(":hc", $CategoryH);
		$stmt->bindParam(":gc", $CategoryG);
		$stmt->bindParam(":id", $id);
		$stmt->bindParam(":dl", $delete);
		$stmt->execute();
		}
		catch (Exception $x)
		{ echo $e->getmessage();
		}
		}
	

?>