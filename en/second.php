<?php

	require_once '../assets/datalink/dbconfig.php';
	
$where="";
if(isset($_GET['q']))
{

// Start XML file, create parent node
header("Content-type: text/xml");
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

require_once '../assets/datalink/dbconfig.php';
					$stmt = $db_con->prepare("SELECT office.id id, officeName name,officeAddress address,typeLevel.level type, `gpsLat` lat, `gpsLong` lng FROM `office` , typeLevel WHERE office.typeLevelId=typeLevel.id and office.did='".$_GET['q']."'");
					$stmt->execute();
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
$node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['id']);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("type", $row['type']);
}

echo $dom->saveXML();
}
?>
