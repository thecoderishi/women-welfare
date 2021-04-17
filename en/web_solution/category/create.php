<?php
require_once '../../../assets/datalink/dbconfig.php';
	if($_POST)
	{
		
		echo $Category = $_POST['txtCategory'];
		echo $CategoryH = $_POST['txtHCategory'];
		echo $CategoryG = $_POST['txtGCategory'];
	
		try{
			
			$stmt = $db_con->prepare("INSERT INTO category(categoryName,hCategoryName,gCategoryName) VALUES(:a1, :a2, :a3)");
			$stmt->bindParam(":a1", $Category );
			$stmt->bindParam(":a2",$CategoryH );
			$stmt->bindParam(":a3", $CategoryG );
		
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