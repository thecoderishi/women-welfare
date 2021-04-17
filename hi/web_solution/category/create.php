<?php
require_once '../datalink/dbconfig.php';
	if($_POST)
	{
		//$logId=1;
		//$offId=1;
		
		$InsUp=0;
		$category = $_REQUEST['txtCategory'];
		$Hcategory = $_REQUEST['txtHCategory'];
		$Gcategory = $_REQUEST['txtGCategory'];
		$reqUser = 1;
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO categorytemp(categoryName,hCategoryName,gCategoryName,InsUpt,requestedUser) VALUES(:cn,:hcn,:gcn,:iu,:ru)");
			$stmt->bindParam(":cn", $category );
			$stmt->bindParam(":hcn",$Hcategory );
			$stmt->bindParam(":gcn", $Gcategory );
			$stmt->bindParam(":iu",$InsUp );
			$stmt->bindParam(":ru",$reqUser );
		
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