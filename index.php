<?php
session_start();?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace protégé</title>
</head>
<body>
    <form action="passwd.php" method="post">
        <label for="passwd"></label>
        <input type="password" name="passwd" id="passwd">

        <input type="submit" name="submit" id="submit">
    </form>

    <?php
        if (isset($_SESSION['error'])) {
            if ($_SESSION['error'] === "error") {
                echo "Le mot de passe n'est pas correct";
            }
            else {
                echo "";
            }
        }?>

</body>
</html>
