<?php
require_once '../../../assets/datalink/dbconfig.php';
	if($_POST)
	{
		
		echo $Village = $_POST['txtVillage'];
		echo $VillageH = $_POST['txtHVillage'];
		echo $VillageG = $_POST['txtGVillage'];
		echo $BlockId=$_POST['bid'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO village(villageName,hVillageName,gVillageName,blockId) VALUES(:a1, :a2, :a3,:a4)");
			$stmt->bindParam(":a1", $Village );
			$stmt->bindParam(":a2",$VillageH );
			$stmt->bindParam(":a3", $VillageG );
			$stmt->bindParam(":a4",$BlockId );
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