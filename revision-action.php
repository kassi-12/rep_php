<?php 
$ID = $_POST["ID"];

try {
  $db = new PDO("mysql:host=localhost;dbname=tp","root","");

  $db->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "connection valide";

  try {
    $select = "SELECT * FROM USER WHERE ID = $ID";
   
    if($db->query($select) == true){
      $res = $db->query($select);
      echo "user found";
      while($row = $res -> fetch(PDO::FETCH_ASSOC)){
      ECHO "ID : ".$row["ID"]." NOM :".$row["NOM"];
    }
    } else {
      echo "user not found";
    }
  } catch (PDOException $e){
    echo $e->getMessage();
  }
  
} catch (PDOException $e){
  echo "conection failde ".$e->getMessage();
}

?>