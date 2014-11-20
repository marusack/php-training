<?php

//require './../bugtracker/bootstrap.php';
//if (isset($_GET['consulta'])) {
//    $query = $entityManager->createQuery("SELECT p.id, p.name FROM Province p WHERE p.name LIKE :name");
//    $query->setParameter('name', $_GET['consulta'].'%');
//    $provinces = $query->getResult();
//  
//    header('content-type: application/json');
//    $result = json_encode($provinces);
//    echo $result;
//    exit();
//}
//php load_province.php Chaco Resistencia SanMartin Fontana
require_once 'bootstrap.php';
array_shift($argv);
$nomProvincia = array_shift($argv);
$provinciaRepository = $entityManager->getRepository('Province');
$provincia = $provinciaRepository->findOneBy(Array('name'=> $nomProvincia));
if (is_null($provincia)){
    $nuevaProvincia= new Province();
    $nuevaProvincia->setName($nomProvincia);
}
$ciudadRepository = $entityManager->getRepository('City');
$cont=0;
foreach ($argv as $nomCiudad) {
    $ciudad = $ciudadRepository->findOneBy(Array('name'=> $nomCiudad));
    if (is_null($ciudad)){
        $nuevaCiudad= new City();
        $nuevaCiudad->setName($nomCiudad);
        $nuevaCiudad->setProvince($provincia);
        $nuevaCiudad->setPc('$provincia');
        $provincia->getCities()->add($nuevaCiudad);
        $entityManager->persist($nuevaCiudad);
        $cont+=1;
    }
}
//La funcion reemplaza cada %s que encuentra, con los parametros que le paso
echo sprintf("El id de la provincia es %s. Y la cantidad de ciudades agregadas es %s\n", $provincia->getId(),$cont);
$entityManager->flush();
?>