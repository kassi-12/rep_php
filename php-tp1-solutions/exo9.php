<?php

	# retourne la chaîne '$s' normalisée
	# (toutes les lettres en minuscule sauf la première)
	function normalize($s) {
		return ucfirst(strtolower($s));
	}
	
	# Teste si les prénom et nom sont bien renseignés et
	# retourne le tableau des messages d'erreurs
	# (tableau vide s'il n'y a pas d'erreur)
	function check_input() {
		$errors = array();
		if ( empty($_GET["prenom"])) 
			$errors[] = "le prénom n'est pas renseigné";
		if ( empty($_GET["nom"]))
			$errors[] = "le nom n'est pas renseigné";
		return $errors;
	}
	
	# retourne le code HTML (une chaîne de caractères) 
	# d'une liste "<ul><li>..</li>..</ul>", les
	# éléments de liste contenant les erreurs
	# contenues dans le tableau '$errors' 
	function display_errors($errors) {
		$r = "<ul>";
		foreach ($errors as $error) {
			$r .= "  <li>$error</li>\n";
		}
		$r .= "</ul>";
		return $r;
	}
	
	# retourne le code HTML (une chaîne de caractères) 
	# d'un heading "<h2>...</h2>" contenant le message
	# de bienvenu en anglais
	function display_welcome($h,$c,$p,$n) {
		$when  = greeting($h);
		$p = normalize( $p );
		$n = normalize( $n );
		return "<h2>Good $when $c $p $n, welcome to EMSI!!</h2>";
	}

	function greeting($heure) {
		if ( $heure < 12 ) {
			return "morning";
		}
		elseif ( $heure < 18 ) {
			return "afternoon";
		}
		else {
			return "evening";
		}
	}

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 9</title>
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 9</h1>
		<hr>
<?php
	$errors = check_input();
	if ( count($errors) > 0 )
		echo display_errors($errors);
	else
		echo display_welcome(date("G"),$_GET["civilite"],$_GET["prenom"],$_GET["nom"]);
?>
	</body>
</html>
