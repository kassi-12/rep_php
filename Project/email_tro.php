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
    <title>Email found</title>

</head>
<body>        
    <div class="login-container">
        <form action="rest.php" method="POST">
            <h5>restor your password</h5>
            <?php if (!empty($msg)){?>
                <p style="color: #EF0107;"><?php echo $msg; }?></p>
            <label for="email">E-mail </label>
            <input class="input-field" type="email" name="email" id="email">
            <input class="submit-btn" type="submit" value="restor">
        </form>
    </div>
</body>
</html>