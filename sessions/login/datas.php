<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'lib.php';

$tasks = array();
if ($_SESSION['name']) {
    $tasks = getTasks($_SESSION['name']);
}

?>
