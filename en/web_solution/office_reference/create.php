<?php
require_once '../../../assets/datalink/dbconfig.php';
	if($_POST)
	{
		
	echo 	$oid = $_POST['oid'];
	echo 		$sid = $_POST['sid'];
			echo $person = $_POST['txtPerson'];
		echo 	$hPerson = $_POST['txtHPerson'];
		echo 	$gPerson = $_POST['txtGPerson'];
	    	echo $contactNo = $_POST['txtContact'];
		
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO officeReference(officeId,SchemeId,contactPerson,hContactPerson,gContactPerson,contactNo) VALUES(:a1, :a2, :a3,:a4,:a5,:a6)");
			$stmt->bindParam(":a1", $oid);
			$stmt->bindParam(":a2",$sid );
			$stmt->bindParam(":a3", $person );
			$stmt->bindParam(":a4", $hPerson );
			$stmt->bindParam(":a5", $gPerson );
			$stmt->bindParam(":a6", $contactNo );
			//$stmt->bindParam(":a5",$delete );
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