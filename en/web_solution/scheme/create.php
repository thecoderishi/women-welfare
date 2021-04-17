<?php
require_once '../../../assets/datalink/dbconfig.php';
	if($_POST)
	{
		$logId=3;
		$offId=1;
		
		echo $sTId=$_REQUEST['schemeTypeId'];
		//$InsUp=0;
		//$offId=$_SESSION['logid'];
		echo $cid = $_REQUEST['cid'];
		echo $scheme = $_REQUEST['txtScheme'];
		echo $Hscheme = $_REQUEST['txtHScheme'];
		echo $Gscheme = $_REQUEST['txtGScheme'];
		echo $schemeDesc = $_REQUEST['txtareaSchemeDescription'];
		echo $HschemeDesc = $_REQUEST['txtareaHSchemeDescription'];
		echo $GschemeDesc = $_REQUEST['txtareaGSchemeDescription'];
		echo $reqUser = 1;
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO scheme(schemeName,hSchemeName,gSchemeName,schemeDescription,hSchemeDescription,gSchemeDescription,categoryId,loginId,schemeTypeId) VALUES(:sn,:hsn,:gsn,:sd,:hsd,:gsd,:ci,:li,:sti)");
			$stmt->bindParam(":sn", $scheme );
			$stmt->bindParam(":hsn",$Hscheme );
			$stmt->bindParam(":gsn", $Gscheme );
			$stmt->bindParam(":sd", $schemeDesc );
			$stmt->bindParam(":hsd", $HschemeDesc );
			$stmt->bindParam(":gsd", $GschemeDesc );
			$stmt->bindParam(":ci",$cid );
			$stmt->bindParam(":li",$logId );
			//$stmt->bindParam(":oi",$offId );
			//$stmt->bindParam(":si",$sId );
			$stmt->bindParam(":sti",$sTId );
			//$stmt->bindParam(":iu",$InsUp );
			//$stmt->bindParam(":ru",$reqUser );
		
			if($stmt->execute())
			{ 	echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
			//echo "Successfully Added!";
		}
	}

?>