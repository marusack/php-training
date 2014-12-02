<?php
require_once 'C:wamp/www/php-training2/php-training/practice/bugtracker/bootstrap.php';
//setear el sting de llegada desde cualquier formato al de la base para q la consulta genere resultados independientemente del ingreso de datos

    //$query = $entityManager->createQuery('SELECT c FROM city c JOIN c.province p ');
    //result----> {"id":10,"name":"Reistencia","pc":0,"province":{"__initializer__":{},"__cloner__":{},"__isInitialized__":false,"id":"12"}}
    

    //$query = $entityManager->createQuery('SELECT c FROM city c JOIN c.province p WHERE p.id=13');
    //result---->[{"id":13,"name":"Mburucuya","pc":0,"province":{"__initializer__":{},"__cloner__":{},"__isInitialized__":false,"id":"13"}}]
    
    //$query = $entityManager->createQuery('SELECT c.name FROM city c JOIN c.province p WHERE p.id=13');
    //result----> [{"name":"Mburucuya"}]
    $provincia = $_GET['provincia'];
    $provincia = substr($provincia, 0,5);
    $query_id=$entityManager->createQuery('SELECT p.id FROM province p WHERE p.name LIKE ?1' );
    $query_id->setParameter(1,$provincia."%");//nose por q no encuentra los valores
    $idArray = $query_id->getResult();
    $id= $idArray[0];
//    var_dump($id[id]);
    $value=$id['id'];
    $query=$entityManager->createQuery('SELECT c.name FROM city c JOIN c.province p WHERE p.id = ?1');
    $query->setParameter(1,$value);
    
    
    
    $city = $query->getResult();
//    $query_id=$entityManager->createQuery('SELECT c FROM city c JOIN c.province p ' );
//    $city = $query_id->getResult();
//    $query = $entityManager->createQuery('SELECT c.name FROM city c JOIN c.province p WHERE p.id=:aux');
//    $query->setParameter('aux',$_GET['provincia'].'%');
                               ;
    
//    $query = $entityManager->createQuery("SELECT c.name FROM city c JOIN c.province p WHERE p.name = '".$comparador."' ");
 
  
    header('content-type: application/json');
    $result = json_encode($city);
    echo $result;
    

?>
