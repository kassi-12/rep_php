<?php
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
} else {
    $msg = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <div class="login-container">   
        <form action="db.inc.php" method="POST">
            <h5>Register </h5>
            <?php if (!empty($msg)){?>
                <p style="color: red;"><?php echo $msg; }?></p>
            <label for="name">Nom </label>
            <input class="input-field" type="text" name="name" id="name">
        
            <label for="prenom">Prenom </label>
            <input class="input-field" type="text" name="prenom" id="prenom">
        
            <label for="email">E-mail </label>
            <input class="input-field" type="email" name="email" id="email">
     
            <label for="password">Password </label>
            <input class="input-field" type="password" name="password" id="password">
            <br>
            Your Role :
            <input type="radio" name="role" value="user" checked="checked">User
            <input type="radio" name="role" value="admin">Admin
            <br>
            <input class="submit-btn" type="submit" value="Register">
            <p>if you have account? <a href="exo13-login.php">log in</a></p>
        </form>
    </div>
</body>
</html>
