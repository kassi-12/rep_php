<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 1</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 1</h1>
		<hr>
<?php
	date_default_timezone_set("Africa/Casablanca");
	$h =date("H");
	$m =date("i");
	$s =date("s");
	echo "<b> il est " . date("H") . " heure(s), " . date("i") . " minute(s) et ". date("s") . " seconde(s)<br>";
	echo "<b> il est $h heure(s), $m minute(s) et $s seconde(s)";
?>
		<h2>
			
		</h2>
	</body>
</html>
