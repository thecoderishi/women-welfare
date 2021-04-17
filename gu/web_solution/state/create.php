<?php
require_once '../datalink/dbconfig.php';
	if($_POST)
	{
		$cid = $_POST['cid'];
		$state = $_POST['txtState'];
		$Hstate = $_POST['txtHState'];
		$Gstate = $_POST['txtGState'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO state(stateName,hStateName,gStateName,countryId) VALUES(:a1, :a2, :a3, :a4)");
			$stmt->bindParam(":a1", $state );
			$stmt->bindParam(":a2",$Hstate );
			$stmt->bindParam(":a3", $Gstate );
			$stmt->bindParam(":a4",$cid );
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