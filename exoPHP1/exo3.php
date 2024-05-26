<?php
$num=$_GET["nombre"];
	# retourne le code HTML (une chaîne de caractères)
	# d'une table contenant les diviseurs de '$N'
	# (une seule ligne, autant de colonnes que de diviseurs)
	
	function diviseurs($N) {
		
		$DEV = array();

		for ($i = 1; $i <= $N; $i++) {
			if ($N % $i == 0) {
				$DEV[] = $i;
			}
		}
		return $DEV;
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 3</title>
		<meta name="author" content="LP IMApp">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 3</h1>
		<hr>
		<h2>Les diviseurs de <?php echo $num; ?> sont :</h2>
		<?php
		print implode (diviseurs($num));
		?>
	</body>
</html>