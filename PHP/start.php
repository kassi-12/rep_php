<?php 
/*exception */
try {
    $conn = new PDO("mysql:host=localhost;dbname=tp","root","");
    
  echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
function myname($nom,$age){
    echo "<br>my name is ".$nom." my age ".$age."<br>";
}
myname("kassimi",21);
myname("sabi",22);
function sum($num1,$num2){
    return $num1 + $num2;
}
echo sum(33,2);
$numbers = array(1 => "kassimi",2 => "sabi");
foreach($numbers as $num => $nom){
    echo "le numero est ".$nom ." et le nom est ".$num."<br>";
}
?>