<?php

	# retourne le code HTML (une chaîne de caractères)
	# d'une table contenant les diviseurs de '$N'
	# (une seule ligne, autant de colonnes que de diviseurs)
	
	# 1ere méthode : Affichage dans un tableau HTML
	function diviseurs($N) {
		$r = "<table class='exo4'><tr><td>1</td>";
		for ( $i = 2; $i <= $N; $i++ ) {
			if ( $N % $i == 0 ) {
				$r .= "<td>$i</td>";
			}
		}
		return $r . "</tr></table>";
	}

	# 2eme méthode : Affichage dans une chaine de caractères
/*	function diviseurs($N) {
		$r = "1 ";
		for ( $i = 2; $i <= $N; $i++ ) {
			if ( $N % $i == 0 ) {
				$r .= "$i ";
			}
		}
		return $r ;
	}*/

	$N = $_GET[ "n" ];
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 3</title>
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 3</h1>
		<hr>
		<h2>Les diviseurs de <?php echo $N; ?> sont : <?php echo diviseurs($N); ?></h2>
	</body>
</html>
