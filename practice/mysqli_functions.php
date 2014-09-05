<?php

$mysqli = mysqli_connect("localhost", "hito", "admin", "users_tasks");

/**
 * Renderiza todas las tareas de un usuario
 * @global object $mysqli
 * @param string $name
 */
function renderTasks($name)
{
    global $mysqli;
    $query_id = mysqli_query($mysqli, "SELECT * FROM users WHERE name = '$name'");
    $rowId = mysqli_fetch_assoc($query_id);
    if (is_null($rowId)){
        echo "error hiciste todo mal";
    } else {
        $id = $rowId['user_id'];
        $query_tasks = mysqli_query($mysqli, "SELECT * FROM tasks WHERE user_id = $id");
        $rowTasks = mysqli_fetch_assoc($query_tasks);
        echo "$name's tasks: <br/>";
        echo "<ol>";
        while (!is_null($rowTasks)){
            echo "<li>" . $rowTasks['name'] . "</li>";
            $rowTasks = mysqli_fetch_assoc($query_tasks);
        };
        echo "</ol>";
    };
}

/**
 * Agregar nuevo usuario
 * @global object $mysqli
 * @param string $name
 * @param string $lastname
 */
function addUser($name, $lastname)
{
    global $mysqli;
    $add = mysqli_query($mysqli, "INSERT INTO users (name, lastname) VALUES ('$name', '$lastname')");
    if (!$add){
        echo mysqli_error($add);
    }
}

/**
 * Agrega nuevas tareas a un usuario
 * @global object $mysqli
 * @param string $name
 * @param string $taskName
 * @param int $estimatedTime
 */
function addTask($name, $taskName, $estimatedTime)
{
    global $mysqli;
    $query = mysqli_query($mysqli, "SELECT * FROM users WHERE name = '$name'");
    $rowId = mysqli_fetch_assoc($query);
    if (is_null($rowId)){
        echo "no se encuentra usuario";
    } else {
        $id = $rowId['user_id'];
        $addTasks = mysqli_query($mysqli, "INSERT INTO tasks (user_id, name, estimated_time, status)"
                                            . "VALUES ($id, '$taskName', $estimatedTime, 1)");
        if (!$addTasks){
            echo mysqli_error($addTasks);
        };
    };
}
