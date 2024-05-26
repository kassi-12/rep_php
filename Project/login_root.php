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
    <title>Login Admin</title>

</head>
<body>        
    <div class="login-container">
        <form action="admincheck.php" method="POST">
            <h5>Admin Log in</h5>
            <?php if (!empty($msg)){?>
                <p style="color: #EF0107;"><?php echo $msg; }?></p>
            <label for="emailadmin">E-mail </label>
            <input  class="input-field" type="email" name="emailadmin" id="emailadmin">
     
            <label for="pwdadmin">Password </label>
            <input class="input-field" type="password" name="pwdadmin" id="pwdadmin">
            <br>
            <input class="submit-btn" type="submit" value="valide">
        </form>
    </div>
</body>
</html>
