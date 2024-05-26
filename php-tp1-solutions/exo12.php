<?php
$n = 0;
$secret = rand(1,100);

if (isset($_GET["n"])) {
    $n = $_GET["n"];
}
if (isset($_GET["secret"])) {
    $secret = $_GET["secret"];
}
$correct = false;
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 12</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 12</h1>
        <hr>

        <?php
        if ($_GET["nombre"]) {
            if ($_GET["nombre"] == $secret) {
                echo  "<p>"."Bien joué ! vous avez deviné le nombre secret en ".$n." tentatives"."</p>";
                echo "<a href='exo12.php'>Rejouer</a>";
                $correct = true;
            } else {
                if ($_GET["nombre"] > $secret) {
                    echo "trop Grand";
                } else if ($_GET["nombre"] < $secret) {
                    echo "trop Petit";
                }
                echo " esseyez une autre fois";

                $n++;
            }
        }
        ?>
        <?php
        if (!$correct) {
            echo "<p><strong> Devinez un nombre entre 1 et 100</strong</p>";
            echo '<form action="exo12.php">';
            echo '<label for="deviner">Entrez le nombre secret</label>';
            echo '<input type="text" name="nombre" id="deviner">';
            echo '<input type="submit" value="envoyer">';
            echo "<input type='hidden' name='n' value='$n'>";
            echo "<input type='hidden' name='secret' value='$secret'>";
            echo '</form>';
            
        }

        ?>
	</body>
</html>
