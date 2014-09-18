<?php

function connect()
{
    $connect = mysqli_connect("localhost", "hito", "admin", "users_tasks");
    if ($connect){
       return $connect; 
    } else {
        throw new Exception('Error al conectar a la DB');
    }
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
    $user = getUser($username);
    $link = connect();
    $add = mysqli_query($link, "INSERT INTO tasks (user_id, name, estimated_time, status) VALUES (" . $user['user_id']. ", '$task', 1, 1)");
    return $add;
}

function addUser($username, $pass)
{
    $link = connect();
    $pass = md5($pass);
    $query = mysqli_query($link, "INSERT INTO users (name, password, lastname) VALUES ('$username', '$pass', 'info')");
    
}

?>