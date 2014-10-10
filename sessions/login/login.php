<?php

session_start();
require_once 'lib.php';
if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])) {
    try {
        if (!isset($_SESSION['attemps'])) {
            $_SESSION['attemps'] = 1;
        }
        if ($_SESSION['attemps'] < 4) {
            $user = getUser($_POST['name']);
            if (!is_null($user)) {
                if (!isset ($_SESSION['block'])){
                    $_SESSION['block'] = 1;
                }
                if ($user['password'] == md5($_POST['password']) && $_SESSION['block'] < 4) {
                    $_SESSION['name'] = $_POST['name'];
                    $_SESSION['pass'] = $_POST['password'];
                    $_SESSION['attemps'] = 1;
                    $_SESSION['block'] = 1;
                    Header('Location: todo.php');
                } else {
                    if ($_SESSION['block'] >= 4) {
                        blockUser($_POST['name']);
                        Header('Location: index.php?error=User has been blocked');
                    } else {
                        $_SESSION['block'] = $_SESSION['block'] + 1;
                        Header('Location: index.php?error=Password incorrect');
                    }
                }
            } else {
                $_SESSION['attemps'] = $_SESSION['attemps'] + 1;
                Header('Location: index.php?error=Name or password incorrect');
            }
        } else {
            Header('Location: index.php?error=You have tried to login too many times');
        }
    } catch (Exception $exc) {
        logger('Error trying to get user: ' . $exc->getMessage());
        header('Location: error.php');
    }
} else {
    Header('Location: index.php?error=login');
}
?>