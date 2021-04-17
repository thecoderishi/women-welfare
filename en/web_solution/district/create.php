<?php
require_once '../datalink/dbconfig.php';
	if($_POST)
	{
		$sid = $_POST['cid'];
		$district = $_POST['txtDistrict'];
		$Hdistrict = $_POST['txtHDistrict'];
		$Gdistrict = $_POST['txtGDistrict'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO district(districtName,hDistrictName,gDistrictName,stateId) VALUES(:a1, :a2, :a3, :a4)");
			$stmt->bindParam(":a1", $district );
			$stmt->bindParam(":a2",$Hdistrict );
			$stmt->bindParam(":a3", $Gdistrict );
			$stmt->bindParam(":a4",$sid );
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