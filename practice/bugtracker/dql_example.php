<?php
require_once "bootstrap.php";
//$id = $argv[1];
$query = $entityManager->createQuery('SELECT p.name FROM Province p');
$names = $query->getResult();
var_dump($names);// array of Province name's
/* 
 * 
 * 
 * $query = $em->createQuery('SELECT p FROM Province p WHERE p.name = :name');
$query->setParameter('name', 'Chaco'); 
/query->setParameter(array("name" => "Chaco"));
$provinces = $query->getResult();
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

