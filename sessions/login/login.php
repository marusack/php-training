<?php
session_start();

if(isset($_POST['name']) && isset($_POST['password'])) {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['pass'] = $_POST['password'];
  Header('Location: todo.php');
} else {
  Header('Location: index.php?error=login');
}
?>
