<?php
session_start();

$user = "root";
$host = "localhost";
$password = "";
$db = "tp";

try {
    $sql = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
$email = $_SESSION['email_tro'];
$pass1 = strtoupper($_POST['pwd1']);
$pass2 = strtoupper($_POST['pwd2']);
if ($pass1 === $pass2) {
    $hashedPassword = md5($pass1);
    $update = "UPDATE `user` SET PASSWORD = :hashedPassword WHERE EMAIL = :email";
    $stmt = $sql->prepare($update);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hashedPassword', $hashedPassword);
    $stmt->execute();
    $msg = "YOUR PASSWORD IS RESTORED";
    header("Location: exo13-login.php?msg=" . $msg);
    exit;}
else {
    $msg = "YOUR PASSWORDS IS NOT THE SAME";
    header("Location: password_rest.php?msg=" . $msg);
}

?>