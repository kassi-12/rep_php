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
$_SESSION['email_tro'] = $email;

$select = "SELECT * FROM USER WHERE UPPER(EMAIL) = UPPER(:email)";
$stmt = $sql->prepare($select);
$stmt->bindParam(':email', $email);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    header("Location: password_rest.php");
    exit;
} else {
    $msg = "Email not exists";
    header("Location: email_tro.php?msg=" . $msg);
    exit;
}
?>
