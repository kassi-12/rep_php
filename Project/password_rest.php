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
    <title>Restor Your Password</title>

</head>
<body>        
    <div class="login-container">
        <form action="update_mp.php" method="POST">
            <h5>restor your password</h5>
            <?php if (!empty($msg)){?>
                <p style="color: #EF0107;"><?php echo $msg; }?></p>
            <label for="pwdadmin">New Password </label>
            <input class="input-field" type="password" name="pwd1" id="password">
     
            <label for="pwdadmin">retaper Password </label>
            <input class="input-field" type="password" name="pwd2" id="password">
            <br>
            <input class="submit-btn" type="submit" value="valide">
        </form>
    </div>
</body>
</html>