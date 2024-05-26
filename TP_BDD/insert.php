<?php
$n = $_POST["nom"];
$p = $_POST["prenom"];
$e = $_POST["email"];
$m = $_POST["motdepasse"];
$db = new PDO("mysql:host=localhost;dbname=tp","root","");
$sql =  "INSERT INTO user (NOM, PRENOM, EMAIL,pwd) values ($n, $p, $e,$m);";