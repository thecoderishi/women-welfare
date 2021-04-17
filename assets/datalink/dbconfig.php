<?php
$host="localhost";
$db="gujarat";
//$db="hdstar";
$dsn = "mysql:host=$host;dbname=$db";

//$user="u744852351_star";
//$pass="R!shi$006";

$user="root";
$pass="rishir512";try
{
$db_con = new PDO($dsn,$user,$pass,$opt);
$stt=$db_con->prepare("SET NAMES utf8"); 
$stt->execute();
//echo"sucessfully";
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>