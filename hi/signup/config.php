<?php
$host="localhost";
$db="ajax";
$dsn=
$dsn = "mysql:host=$host;dbname=$db";
$opt=
[
	PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES=>false,
];
$user="root";
$pass="";
try
{
$pdo = new PDO($dsn,$user,$pass,$opt);
//echo"sucessfully";
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>