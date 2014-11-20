<?php
require_once('../bugtracker/bootstrap.php');
if(isset($_GET['data'])){
    $startwith = $_GET['data'];
    $query = $entityManager->createQuery('SELECT p.name FROM Province p WHERE p.name LIKE :startwith');
    $query->setParameter('startwith', $startwith . '%');
    $result = $query->getResult();
    header('Content-Type: application/json');
    echo json_encode($result);
}
?>

