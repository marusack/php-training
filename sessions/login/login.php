<?php

session_start();
require_once 'lib.php';

if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])) {
    try {
        $user = getUser($_POST['name']);
        
        
       
        if (!is_null($user) && $user['password'] == md5($_POST['password']) && $user['estado']=='false') {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['password'];
            Header('Location: todo.php');
            
        } else {
            $bandera=getBandera($_POST['name']);
            if($bandera>3 && getUser($_POST['name']))
                {
                $msj=" you have tried to login too many times";
                CambiarEstado($_POST['name']);
            }
            activarBandera($_POST['name']);
            if($user['estado']=='false')
                {
                $msj=" tu usuario esta bloqueado";
            }
            Header('Location: index.php?error=name or password incorrect   '.$msj);
            
        }
    } catch (Exception $exc) {
        logger('Error trying to get user: '. $exc->getMessage());
        
        header('Location: error.php');
    }

} else {
    Header('Location: index.php?error=login');
}
?>
