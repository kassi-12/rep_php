?php
   
    # retourne une chaîne de caractères indiquant
    # le résultat, où '$x' et '$y' sont les nombres
    # dont il fallait deviner la valeur du produit
    # et '$user' la valeur proposée par l'utilisateur
   
   include 'exo11-formulaire.php';
   
   $user=$_GET["fname"];
   $text;
   $text2=resultat($x,$y,$user);
    function resultat($x,$y,$user) {
    if($x*$y==$user)
      $text="Bravo, vous avez raison, $x x $y = $user !";
    else{
        $res=$x*$y;
         $text="Faux : $x x $y = $res et non $user  ";
    }
    

     return $text;
    }
?>