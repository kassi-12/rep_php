<?php
//connection a la base de donne
$db = new PDO("mysql:host=localhost;dbname=tp","root","");
$sql =  "select * from user";

$res=$db->query($sql); //execution reqeut 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>liste des users</h2>
    <hr>
    <table border="1">
    <?php 
    while($lig = $res->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>".$lig["ID"]."</tr></td>".$lig["NOM"]."<tr><td>".$lig["PRENOM"]."</tr></td>";
    }
    ?>
</body>
</html>