<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_GET['data'])){
    $startWith=$_GET['data'];
    $query=$entityManager->CreateQuery("");
    $query->setParameter(":name".$startWith."%");
    $result= $query->getResult();
    var_dump($result);
    header('content-type:application/json');
    
}
