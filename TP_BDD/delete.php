
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User Form</title>
</head>
<body>

    <?php

        $db = new PDO("mysql:host=localhost;dbname=tp", "root", "");

        $sql = "SELECT * FROM user";
        $res = $db->query($sql);
    ?>


    <form action="delete_form.php" method="post">
       
        <select name="ID">
            <?php
        
                while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row["ID"] . "'>" . $row["NOM"] . "</option>";
                }
            ?>
        </select>

        <input type="submit" value="Supprimer">
    </form>

</body>
</html>
