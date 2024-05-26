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

$emailad = $_POST['emailadmin'];
$pwdad = md5($_POST['pwdadmin']);

$selectad = "SELECT ROLE, PASSWORD FROM User WHERE EMAIL = :emailad"; 
$stmt = $sql->prepare($selectad);
$stmt->bindParam(':emailad', $emailad);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);
$nom = $_SESSION['name'];
$pre = $_SESSION['prenom'];
$email = $_SESSION['email'];
$pwd = $_SESSION['password'];

if ($userData && strtoupper($userData['ROLE']) === "ADMIN" && $pwdad === $userData['PASSWORD']) {
    $hashedPassword = md5($pwd);
    $rol = "ADMIN";

    $insert = "INSERT INTO `user` (`NOM`, `PRENOM`, `EMAIL`, `PASSWORD`, `ROLE`) VALUES (:nom, :pre, :email, :hashedPassword, :rol)";
    $stmt = $sql->prepare($insert);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':pre', $pre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hashedPassword', $hashedPassword); 
    $stmt->bindParam(':rol', $rol);
    $stmt->execute();

    $msg = "Your Register is done please make login you are know Admin";
    header("Location: exo13-login.php?msg=" . $msg);
    exit;
} else {
    $msg = "Admin login or password not valide !!";
    header("Location: login_root.php?msg=" . $msg);
    exit;
}

?>
