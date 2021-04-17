<?php

function countRow($table,$where){
$host="localhost";
$db="hdstar";
$dsn = "mysql:host=$host;dbname=$db";

$user="root";
$pass="project123";
$db_con = new PDO($dsn,$user,$pass,$opt);
//echo " SELECT count(*) count from ".$table." where  ".$where ;
$stmt = $db_con->prepare(" SELECT count(*) count from ".$table." where  ".$where );
//echo "defh";
        $stmt->execute();
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		return $row['count'];
		
}
?>