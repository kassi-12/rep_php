<?php
$color = $_POST['color'];
setcookie("co",$color,time()+86400);
header("location:p3.php")
?>