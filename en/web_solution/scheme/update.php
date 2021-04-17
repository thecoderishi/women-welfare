<?php
require_once '../../../assets/datalink/dbconfig.php';

if($_POST)
	{
		$logId=3;
		$offId=1;
		$stid=$_REQUEST['stid'];
		//$InsUp=1;
		$schemeId=$_REQUEST['id'];
		//$offId=$_SESSION['logid'];
		$cid = $_REQUEST['cid'];
		$scheme = $_REQUEST['txtScheme'];
		$Hscheme = $_REQUEST['txtHScheme'];
		$Gscheme = $_REQUEST['txtGScheme'];
		$schemeDesc = $_REQUEST['txtareaSchemeDescription'];
		$HschemeDesc = $_REQUEST['txtareaHSchemeDescription'];
		$GschemeDesc = $_REQUEST['txtareaGSchemeDescription'];
		$reqUser = 1;
		
		try{
			
			$query="Update scheme SET schemeName=:sn,hSchemeName=:hsn,gSchemeName=:gsn,schemeDescription=:sd,hSchemeDescription=:hsd,gSchemeDescription=:gsd,categoryId=:ci,loginId=:li,schemeTypeId=:sti where id=:sid";		
			echo $query;
			$stmt = $db_con->prepare($query);
			$stmt->bindParam(':sn',$scheme);
			$stmt->bindParam(':hsn',$Hscheme);
			$stmt->bindParam(':gsn',$Gscheme);
			$stmt->bindParam(':sd', $schemeDesc);
			$stmt->bindParam(':hsd', $HschemeDesc);
			$stmt->bindParam(':gsd', $GschemeDesc);
			$stmt->bindParam(':ci',$cid);
			$stmt->bindParam(':li',$logId);
		  //$stmt->bindParam(':oi',$offId);
			$stmt->bindParam(':sti',$stid);
			$stmt->bindParam(':sid',$schemeId);
			$stmt->execute();
			/*if($stmt->execute())
			{
			
			echo 'successfully Updated';
			}
			else
			{
			echo 'Query Error';	
				}*/
			

	}
	catch(PDOException $e){
			echo $e->getMessage();
			//echo "Successfully Added!";
		}
}
?>