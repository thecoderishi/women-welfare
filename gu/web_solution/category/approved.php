<?php
try
{		
		include("../datalink/dbconfig.php");
		$reqUser=0;
		 $InUP=0;
		echo $Cid=$_REQUEST['cid'];
		
		$query="update categorytemp set requestedUser=:ru where categorytemp.id=:cid";
		$stmt=$db_con->prepare($query);
		$stmt->bindParam(':ru',$reqUser);
		$stmt->bindParam(':cid',$Cid);
		//$stmt->bindParam(':pru',$preReqUser);
		if($stmt->execute())
		{ echo "Successfully Update";}
		else
		{echo "Query Error";}
		
		/*select categoryId from categorytemp*/
			$select="select * from categorytemp where id=:cid";
		$stmt = $db_con->prepare($select);
		$stmt->bindParam(':cid',$Cid);
		//$stmt->bindParam(':ru',$reqUser);
		 $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			 $categoryId = $row['categoryId'];
			 $categoryName = $row['categoryName']; 
			 $HCategoryName = $row['hCategoryName']; 
			 $GCategoryName = $row['gCategoryName']; 
			 $InUP=$row['InsUpt'];
		}
		
		
		/* Select data from temp and insert into main table */
		if($categoryId)
		{
		/*	*/
			echo 'Update';
			$query="Update category SET categoryName=:cn,hCategoryName=:hcn,gCategoryName=:gcn where category.id=:cid";		
			$stmt = $db_con->prepare($query);
			$stmt->bindParam(':cn',$categoryName);
			$stmt->bindParam(':hcn',$HCategoryName);
			$stmt->bindParam(':gcn',$GCategoryName);
			$stmt->bindParam(':cid',$categoryId);
			//$stmt->execute();
			if($stmt->execute())
			{
			$stmt=$db_con->prepare("delete from categorytemp where id=:cid");
			$stmt->bindParam(':cid',$Cid);
			$stmt->execute();
			}
			header("location:index.php");
		}
		else
		{
			echo 'insert';
			$query="Insert into category(categoryName,hCategoryName,gCategoryName) select categoryName,hCategoryName,gCategoryName from categorytemp where categorytemp.id=:cid";
		$stmt=$db_con->prepare($query);
		$stmt->bindParam(':cid',$Cid);
		$stmt->execute();
		header("location:index.php");
		}
}

catch(PDOException $e){
			echo $e->getMessage();
			//echo "Successfully Added!";
		}

?>