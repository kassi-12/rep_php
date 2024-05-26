<?php

session_start();
if(!isset($_GET['proposition'])){
$_SESSION['alea'] = rand() % 100 + 1 ;
$_SESSION['cpt'] = 0; 
}
   
else{
   $alea = $_SESSION['alea'];
   $cpt = $_SESSION['cpt']+1;
   $nombre = $_GET['proposition'];
    
    if($nombre > $alea)
        echo 'le nombre est grand';
    
    elseif($nombre < $alea)
        echo 'le nombre est petit';
    
    else
        echo 'felecitation le nombre des essaies : '.$cpt;
    
    $_SESSION['cpt'] = $cpt;
}

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
        
        <h3>Je pense à un nombre compris entre 1 et 100... à vous de le deviner !</h3>
        <form class='exo10' method='get'>
  Votre proposition : <input type='text' name='proposition'>
  <input type='submit' value='Vérifier'>
</form>
    </body>
</html>