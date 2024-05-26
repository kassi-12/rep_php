<?php 
$ID = $_POST['ID'];
$sql = new PDO("mysql:host=localhost;dbname=tp","root","");
$s = "SELECT * FROM USER";
$rs = $sql->query($s);
while ($row = $rs->fetch(PDO::FETCH_OBJ)){
    echo "ID: " . $row->ID;
}
?>
