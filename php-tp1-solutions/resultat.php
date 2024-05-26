

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>TP 1 - Exo 4</title>
		<link rel="stylesheet" href="css/tp1.css">
	</head>
	<body>
		<h1>Devoir - Formulaire PHP</h1>
		<hr>
		<h2>

<?php $nbl= $_POST['nbligne'];
$src= ($_POST['motif']==1)?"square.png":"star.png";
$al=$_POST['align'];
switch ($al){
	case 'g':
	$net=$nbl;
	for($i=0;$i<$nbl;$i++)
	{
		for($j=0;$j<=$i;$j++){
		?>
		<img src="<?php echo $src;?>">
		<?php
		}
		echo "<br>";
	}
	
	break;
	case 'd':
	$net=$nbl;
	$nbesp=$nbl-1;
	for($i=0;$i<$nbl;$i++)
	{
		for($j=0;$j<$nbesp;$j++){
		?>
		<img src="space.png">
		<?php
		}
		$nbesp--;
		for($j=0;$j<=$i;$j++){
		?>
		<img src="<?php echo $src;?>">
		<?php
		}
		echo "<br>";
	}
	break;
	case 'p':
	$net=0;
	$nbesp=$nbl-1;
	for($i=0;$i<$nbl;$i++)
	{
		for($j=0;$j<$nbesp;$j++){
		?>
		<img src="space.png">
		<?php
		}
		$nbesp--;
		for($j=0;$j<=$net;$j++){
		?>
		<img src="<?php echo $src;?>">
		<?php
		}
		$net+=2;
		echo "<br>";
	}
	break;
	case 'i':
	$net=2*$nbl-1;
	$nbesp=0;
	for($i=0;$i<$nbl;$i++)
	{
		for($j=0;$j<$nbesp;$j++){
		?>
		<img src="space.png">
		<?php
		}
		$nbesp++;
		for($j=0;$j<$net;$j++){
		?>
		<img src="<?php echo $src;?>">
		<?php
		}
		$net-=2;
		echo "<br>";
	}
	break;
}
?>
		</h2>
		
	</body>
</html>


