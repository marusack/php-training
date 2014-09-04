<?php

$mysqli = mysqli_connect("localhost", "hito", "admin", "users_tasks");

/**
 * Renderiza todas las tareas de un usuario
 * @global object $mysqli
 * @param string $name
 * @return 
 */
function renderTasks($name)
{
    global $mysqli;
    $query_id = mysqli_query($mysqli, "SELECT user_id FROM users WHERE name = '$name'");
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

renderTasks('luigi');