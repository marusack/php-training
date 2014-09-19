<?php

function connect() {
    $connect = mysqli_connect("localhost", "hito", "admin", "users_tasks");
    if (!$connect) {
        throw new Exception('Error trying to conect to DB: ' . mysqli_connect_error());
    }
    return $connect;
}

/**
* Get User from DB
* @param type $name
* @return type
* @throws Exception
*/
function getUser($name) {

    try {
        $link = connect();
        $result = mysqli_query($link, 'SELECT * FROM users WHERE name="' . $name . '"');

        return mysqli_fetch_assoc($result);
    } catch (Exception $exc) {
        logger($exc->getMessage());
        throw $exc;
    }
}

function getTasks($username) {
    $user = getUser($username);
    $link = connect();
    $result = mysqli_query($link, "SELECT * FROM tasks WHERE user_id = '" . $user['user_id'] . "'");
    return $result;
}

function addTask($username, $task) {
    $user = getUser($username);
    $link = connect();
    $add = mysqli_query($link, "INSERT INTO tasks (user_id, name, estimated_time, status) VALUES (" . $user['user_id'] . ", '$task', 1, 1)");
    return $add;
}

function addUser($username, $pass) {
    $link = connect();
    $pass = md5($pass);
    $query = mysqli_query($link, "INSERT INTO users (name, password, lastname) VALUES ('$username', '$pass', 'info')");
}

/**
 * 
 * @param type $msg
 */
function logger($msg) {
    file_put_contents('logs/log.txt', $msg . "\n", FILE_APPEND);
}

function deleteTask($id) {
    $link = connect();
    $resutl = mysqli_query($link, 'DELETE FROM tasks WHERE taskid=' . $id);

    return $resutl;
}

?>
