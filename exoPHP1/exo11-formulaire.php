<?php
$x = rand(1,10);
$y = rand(1,10);
$user =  $_GET["num"];


?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TP 1 - Exo 11</title>
		<meta name="author" content="Marc Gaetano">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>TP 1 - Exo 11</h1>
		<hr>
		<form action="exo11-action.php" method="get">
		<?PHP 
		echo $x ." x ".$y." = "
		?>
		<input type="number" name="num"/>
		<input type="hidden" name="x"  value="<?php echo $x ?>"/>
		<input type="hidden" name="y"  value="<?php echo $y ?>"/>
		<button type="submit">verify</button>
		</form>

	</body>
</html>
