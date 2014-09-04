<?php

$mysqli = mysqli_connect("localhost", "hito", "admin", "users_tasks");
$res = mysqli_query($mysqli, "SELECT * FROM  `users` WHERE name = 'alex'");
$row = mysqli_fetch_assoc($res);

while (!is_null($row)){
    echo '<pre>' . var_dump($row) . '</pre>';
    $row = mysqli_fetch_assoc($res);
}