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
    <title>Login Page</title>

</head>
<body>        
    <div class="login-container">
        <form action="logincheck.php" method="POST">
            <h4>Log in</h4>
            <?php 
            if (!empty($msg)) {
                if ($msg === "Invalid E-mail/Password or Account not exist") {
                    echo "<p style='color: #EF0107;'>$msg</p>";
                } else if ($msg === "Your Register is done please make login you are know Admin" || $msg === "Your registration is successful"|| $msg === "YOUR PASSWORD IS RESTORED") {
                    echo "<p style='color: #32de84;'>$msg</p>";
                }
            }
            ?>
                
            <label for="email">E-mail </label>
            <input class="input-field" type="email" name="email" id="email">
     
            <label for="password">Password </label>
            <input class="input-field" type="password" name="pwd" id="password">
            <input type="checkbox" name="remember" id="remember" />
            <label for="remember">Remember Me</label>
            <a href="email_tro.php">Forgot Password</a>
            <br />
            <input class="submit-btn" type="submit" value="Log in" />
            <p>Don't have an account? <a href="exo13-register.php">Register</a></p>
        </form>
    </div>
</body>
</html>
