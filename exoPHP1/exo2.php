<?php

$week = date("w");
$month = date("m");
$day = date("d");
$year = date("Y");

# retourne le nom du jour de la semaine
# correspondant à '$week', le numéro du
# jour de la semaine (0 -> dimanche, 1 -> lundi, ...)
function jour($week) {
    switch ($week) {
        case 0:
            return "dimanche";
        case 1:
            return "lundi";
        case 2:
            return "mardi";
        case 3:
            return "mercredi";
        case 4:
            return "jeudi";
        case 5:
            return "vendredi";
        case 6:
            return "samedi";
    }
}

# retourne le nom du mois correspondant à '$month',
# le numéro du mois (1 -> janvier, 2 -> février, ...)
function mois($month) {
    switch ($month) {
        case 1:
            return "janvier";
        case 2:
            return "février";
        case 3:
            return "mars";
        case 4:
            return "avril";
        case 5:
            return "mai";
        case 6:
            return "juin";
        case 7:
            return "juillet";
        case 8:
            return "août";
        case 9:
            return "septembre";
        case 10:
            return "octobre";
        case 11:
            return "novembre";
        case 12:
            return "décembre";
  
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 2</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">

	</head>

	<body>

		<h1>TP 1 - Exo 2</h1>
		<hr>
		<h2> 
		<?php
        echo "Nous sommes le " . jour($week) . " " . $day . " "  . mois($month) . " " . $year;
        ?>
		</h2>
	</body>
</html>
