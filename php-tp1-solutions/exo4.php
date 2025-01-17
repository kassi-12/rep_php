<?php

	# si '$N' est premier, retourne '$N'
	# sinon retourne le plus petit diviseur
	# de '$N'. Par exemple :
	# - premier(13) -> 13
	# - premier(35) -> 5
	function premier($N) {
		for ( $i = 2; $i < $N; $i++ ) {
			if ( $N % $i == 0 ) {
				return $i;
			}
		}
		return $N;
	}

	# retourne une chaîne de caractères du type :
	# - "Le nombre N est premier" si '$N' est premier
	# - "Le nombre N n'est pas premier car multiple de D"
	#   si '$N' est divisible par un nombre D (et donc, pas premier)
	function resultat($N) {
		$d = premier($N);
		if ( $d == $N )
			$suffixe = "est premier";
		else
			$suffixe = "n'est pas premier car il est divisible par $d";
		return "Le nombre $N $suffixe !";
	}

	$N = $_GET[ "nombre" ];
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 4</title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 4</h1>
		<hr>
		<h2>
			<?php echo resultat($N); ?>
		</h2>
		<a class="bouton" href="exo4.html">Autre test</a>
	</body>
</html>
