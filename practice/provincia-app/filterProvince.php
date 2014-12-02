<?php

require_once 'C:wamp/www/php-training2/php-training/practice/bugtracker/bootstrap.php';

$nomProvincia = $_GET['value'];
$consulta = $entityManager->createQuery('SELECT p.name FROM province p WHERE p.name LIKE :name');
$consulta->setParameter('name',$_GET['value'].'%');
$provincias = $consulta->getResult();
header('content-type: application/json');
$result = json_encode($provincias);
echo $result;


