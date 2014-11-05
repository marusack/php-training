<?php

session_start();
require ('../factorial.php');
if (isset($_POST['num'])) {
    $_SESSION['lastFact'] = factorial($_POST['num']);
    $_SESSION['num'] = $_POST['num'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookies - PHP Training</title>
    </head>
    <body>
        <div>
            <?php
            if (isset($_SESSION['lastFact'])) {
                echo "Ultimo factorial calculado<br/>";
                echo "Numero: " . $_SESSION['num'] . " - Factorial: " . $_SESSION['lastFact'];
            } else {
                echo "No se calculo ningun factorial todavia";
            }
            ?>
            <br/>
            <br/>
            <form action="index.php" method="post">
                Calcular factorial de: <input type="text" name="num">
                <input type="submit">
            </form>
        </div>
    </body>
</html>