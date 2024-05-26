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

$email = $_POST['email'];
$pwd = md5($_POST['pwd']); 

$select = "SELECT * FROM User WHERE EMAIL = :email"; 
$stmt = $sql->prepare($select);
$stmt->bindParam(':email', $email);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($userData && strtoupper($userData['EMAIL']) === strtoupper($email) && $pwd === $userData['PASSWORD']) {
    if ($userData['ROLE'] === "ADMIN") {
        $_SESSION['login'] = "ADMIN";
        $msg = "Bienvenue Mr/Miss." . $userData['NOM']." ".$userData['PRENOM'];
        header("location: exo13.php?msg=" . $msg);
        exit;
    } else {
        $_SESSION['login'] = "USER";
        $msg = "Bienvenue Mr/Miss." . $userData['NOM'] ." ".$userData['PRENOM']. " You are not an Admin";
        header("location: exo13.php?msg=" . $msg);
        exit;
    }
} else {
    $msg = "Invalid E-mail/Password or Account not exist";
    header("location: exo13-login.php?msg=" . $msg);
    exit;
}
?>
