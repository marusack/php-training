<?php

require_once 'C:wamp/www/php-training2/php-training/practice/bugtracker/bootstrap.php';

$nomProvincia = $_GET['consulta'];
$consulta = $entityManager->createQuery('SELECT p.name FROM province p WHERE p.name LIKE :name');
$consulta->setParameter('name',$_GET['data'].'%');
$respuesta = $consulta->getResult();

    
header('content-type: application/json');
$res = json_encode($respuesta);
echo $res;
exit();

