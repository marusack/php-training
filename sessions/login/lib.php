<?php

function connect()
{
    return mysqli_connect("localhost", "hito", "admin", "users_tasks");
}

function getUser($name)
{
    $link = connect();
    $result = mysqli_query($link, "SELECT * FROM users WHERE name = '$name'");
    return mysqli_fetch_array($result);
}

function getTasks($username)
{
    $user = getUser($username);
    $link = connect();
    $result = mysqli_query($link, "SELECT * FROM tasks WHERE user_id = '" . $user['user_id'] ."'");
    return $result;
}

function addTask($username, $task)
{
    
}

?>