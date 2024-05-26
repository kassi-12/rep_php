<?php
$pr = rand(1,100);
	do {
		
	}



?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 10</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 10</h1>
		
		<hr>
<?php
echo "Je pense à un nombre compris entre 1 et 100... à vous de le deviner !";
echo "<form class='exo10' method='get'>";
echo "Votre proposition : <input type='text' name='proposition'>";
echo "<input type='hidden'name='essais' value='1'>";
echo "<input type='hidden' name='secret' value='12'>";
echo "<input type='submit' value='Vérifier'>";
?>
	</body>
</html>
