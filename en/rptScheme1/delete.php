<?php
include_once '../datalink/dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM employee WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>