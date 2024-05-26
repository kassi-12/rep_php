<?php
session_start(); 

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
} else {
    $msg = '';
}

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

if ($_SESSION['login'] === 'ADMIN') {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base De donnee</title>
</head>
    <body>
    <a class="dec-btn" href="exo13-login.php">Log Out</a>

        <?php
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th><th>NOM</th><th>PRENOM</th><th>EMAIL</th>";
        echo "</tr>";
        if (!empty($msg)) {
            echo "<h1>" . $msg . "</h1>";
            echo "<hr>";
        }

        $select = "SELECT * FROM USER";
        $result = $sql->query($select);

        

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td><td>" . $row['NOM'] . "</td><td>" . $row['PRENOM'] . "</td><td>" . $row['EMAIL'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";


} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base De donnee</title>
    </head>
    <body>
    <a class="dec-btn" href="exo13-login.php">Log Out</a>

        <?php
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th><th>NOM</th><th>PRENOM</th><th>EMAIL</th>";
        echo "</tr>";
        if (!empty($msg)) {
            echo "<h1>" . $msg . "</h1>";
            echo "<hr>";
            echo "</table>";
        }
    }
    ?>
    </body>
    </html>
