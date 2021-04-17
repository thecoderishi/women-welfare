<?php
require_once '../datalink/dbconfig.php';

	
	if($_POST)
	{
		echo $InsUp=1;
		echo $cid=$_REQUEST['categoryId'];
		echo $category = $_REQUEST['txtCategory'];
		echo $Hcategory = $_REQUEST['txtHCategory'];
		echo $Gcategory = $_REQUEST['txtGCategory'];
		echo $reqUser = 1;
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO categorytemp(categoryName,hCategoryName,gCategoryName,categoryId,InsUpt,requestedUser) VALUES(:cn,:hcn,:gcn,:cid,:iu,:ru)");
			$stmt->bindParam(":cn", $category );
			$stmt->bindParam(":hcn",$Hcategory );
			$stmt->bindParam(":gcn", $Gcategory );
			$stmt->bindParam(":cid", $cid);
			$stmt->bindParam(":iu",$InsUp );
			$stmt->bindParam(":ru",$reqUser );
		
		if($stmt->execute())
		{
			echo "Successfully updated";
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