<?php

session_start();
require_once 'lib.php';
if(!isset($_SESSION['attempt']))
    {
     $_SESSION['attempt']=0;
     }
 $_SESSION['attempt']++;
 //esto esta para el caso en el que la comprobacion se realizara mediante sesion
if($_SESSION['attempt']<3)
{
            if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])) {
                try {
                    $user = getUser($_POST['name']);



                    if (!is_null($user) && $user['password'] == md5($_POST['password']) && $user['estado']=='false') {
                        $_SESSION['name'] = $_POST['name'];
                        $_SESSION['pass'] = $_POST['password'];
                        RestaurarEstado($_POST['name']);//restaura el estado si este al 3 intento pudo loguear
                        Header('Location: todo.php');

                    } else {
                        //comprobacion de intentos de sesion mediante acceso a la base de datos
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
}
else{
    Header('Location: index.php?error=you have tried to login too many times');
}
?>
