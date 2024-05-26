<?php

	# retourne le code HTML (une chaîne de caractères)
	# d'une table 10x10 contenant les 10 tables de
	# multiplication
	function table() {
		$t = "<table class='exo6'>";
		for ( $ligne = 1; $ligne <= 10; $ligne++ ) {
			$t .= "  <tr>";
			for ( $colonne = 1; $colonne <= 10; $colonne++ ) {
				$t .= "    <td><strong>$ligne</strong> x $colonne = " . ($ligne * $colonne) . "</td>\n";
			}
			$t .= "  </tr>";
		}
		$t .= '</table>';
		return $t;
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 5</title>
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 5</h1>
		<hr>
		<?php echo table(); ?>
	</body>
</html>
