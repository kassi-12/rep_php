<?php 

$ID = $_POST["ID"];
$db = new PDO("mysql:host=localhost;dbname=tp","root","");
$sql = "DELETE FROM user WHERE ID = $ID";
$db->query($sql); 
?>