<?php
require_once '../datalink/dbconfig.php';
	if($_POST)
	{
	
		$userType = $_POST['txtUserType'];
		$HUserType = $_POST['txtHUserType'];
		$GUserType = $_POST['txtGUserType'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO userType(userTypeName,hUserTypeName,gUserTypeName) VALUES(:a1, :a2, :a3)");
			$stmt->bindParam(":a1", $userType);
			$stmt->bindParam(":a2",$HUserType );
			$stmt->bindParam(":a3", $GUserType );
			
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