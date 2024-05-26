<?php

	# retourne un tableau à deux éléments [ C , N ] où :
	# - C est une chaîne de caractères de la forme
	#   "n1, n2, n3, n4, n5" où n1, n2,..., n5
	#   sont cinq nombres triés croissant tirés au hasard
	#   dans l'intervalle [1, 49]
	# - N un nombre tiré au hasard dans l'intervalle [1, 10]
	function loto() {
		
	$N = [];
	while (count($N) <5) {
		$NUM = rand(1,49);
		if (!in_array($NUM, $N)) {
			$N[] = $NUM;
		} 
	}
	sort($N);
	$c = implode(",",$N);

	$nr = rand(1, 10);
	return [$c,$nr];

	
	}
$res = loto();

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 8</title>
		<link rel="stylesheet" href="css/tp1.css">
	</head>

	<body>
		<h1>TP 1 - Exo 8</h1>
		<hr>
		<h2>Loto Flash</h2>
		<p>
			
		</p>
		<p>
			<?php
			echo "Les cinq numéros : "." ".$res[0]."Le numéro chance :".$res[1];
			?>
			<br>
			<br><a class="bouton" href="exo8.php">Un autre Loto Flash</a>
		</p>
	</body>
</html>
