<?php
include_once '../datalink/dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$delete = 1;
	$stmt=$db_con->prepare("UPDATE userType SET deleted = :dl WHERE id=:id");
	
	$stmt->bindParam(":dl", $delete);
	$stmt->bindParam(":id", $id);
	$stmt->execute();	
}
?>