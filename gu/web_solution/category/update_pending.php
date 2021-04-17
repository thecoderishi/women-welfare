<?php
require_once '../datalink/dbconfig.php';

	
	if($_POST)
	{
		$InsUp=1;
		$categoryId=$_REQUEST['categoryId'];
		$category = $_REQUEST['txtCategory'];
		$Hcategory = $_REQUEST['txtHCategory'];
		$Gcategory = $_REQUEST['txtGCategory'];
		$reqUser = 1;
		
		try{
			
			$query="Update categorytemp SET categoryName=:cn,hCategoryName=:hcn,gCategoryName=:gcn where id=:cid";		
			$stmt = $db_con->prepare($query);
			$stmt->bindParam(':cn',$category);
			$stmt->bindParam(':hcn',$Hcategory);
			$stmt->bindParam(':gcn',$Gcategory);
			$stmt->bindParam(':cid',$categoryId);
			//$stmt->execute();
			if($stmt->execute())
			{
			echo 'successfully Updated';
			}
			else
			{
			echo 'Query Error';	
			}
			

	}
	catch(PDOException $e){
			echo $e->getMessage();
			//echo "Successfully Added!";
		}
}
?>