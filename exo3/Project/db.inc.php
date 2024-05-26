<?php
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
session_start();
$nom = strtoupper($_POST['name']);
$pre = strtoupper($_POST['prenom']);
$email = strtoupper($_POST['email']);
$pwd = $_POST['password'];
$rol = strtoupper($_POST['role']);
$_SESSION['name'] = $nom; 
$_SESSION['prenom'] = $pre; 
$_SESSION['email'] = $email; 
$_SESSION['password'] = $pwd; 


$select = "SELECT * FROM USER WHERE UPPER(EMAIL) = UPPER(:email)";
$stmt = $sql->prepare($select);
$stmt->bindParam(':email', $email);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
        $msg = "Email already exists";
        header("Location: exo13-register.php?msg=" . $msg);
        exit;
}
if ($rol === "ADMIN") {
    header("location: login_root.php");
    exit;
} 
$hashedPassword = md5($pwd);

$insert = "INSERT INTO `user` (`NOM`, `PRENOM`, `EMAIL`, `PASSWORD`, `ROLE`) VALUES (:nom, :pre, :email, :hashedPassword, :rol)";
$stmt = $sql->prepare($insert);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':pre', $pre);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':hashedPassword', $hashedPassword); 
$stmt->bindParam(':rol', $rol);
$stmt->execute();
header("location:exo13-login.php?msg=Your registration is successful");
?>
