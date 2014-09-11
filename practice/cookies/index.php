<?php
if (isset($_POST['username'])) {
    setcookie('username', $_POST['username'], time()+60);
};
include 'cookies.php';
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
