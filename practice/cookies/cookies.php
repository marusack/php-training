<?php

if (isset($_COOKIE['username'])) {
    echo "Bienvenido " .  $_COOKIE['username'] . "!<br/>";
} else {
    echo "Bienvenido invitado!<br/>";
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
            <form action="index.php" method="post">
                Username: <input type="text" name="username">
                <input type="submit">
            </form>
        </div>
    </body>
</html>