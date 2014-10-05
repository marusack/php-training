<?php

function Tasks($param) {
    
$mysqli = mysqli_connect("localhost", "root", "admin", "todolist");
$res = mysqli_query($mysqli, "SELECT user_id FROM users WHERE name = '$param'");
$row = mysqli_fetch_assoc($res);
$res2 = mysqli_query($mysqli, "SELECT name FROM tasks WHERE user_id = ".$row["user_id"]);
$row2 = mysqli_fetch_assoc($res2);

echo "<ul>";
while ($row2 !== NULL) {
echo '<li>'.$row2["name"].'</li>';
$row2 = mysqli_fetch_assoc($res2);
}
echo "</ul>";
}

Tasks('Mariel');
?>
