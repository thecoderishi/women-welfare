<?php
require_once '../../../assets/datalink/dbconfig.php';
	if($_POST)
	{
		
		$Country = $_POST['txtCountry'];
		$CountryH = $_POST['txtHCountry'];
		$CountryG = $_POST['txtGCountry'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO country(countryName,hCountryName,gCountryName) VALUES(:a1, :a2, :a3)");
			$stmt->bindParam(":a1", $Country );
			$stmt->bindParam(":a2",$CountryH );
			$stmt->bindParam(":a3", $CountryG );
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