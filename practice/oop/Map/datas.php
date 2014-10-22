<?php
require_once 'main.php';

$chacoCities = array();
foreach ($chaco->getCities() as $city) {
   $chacoCities[] = $city->getName();
};

$ctesCities = array();
foreach ($ctes->getCities() as $city) {
   $ctesCities[] = $city->getName();
};

$formosaCities = array();
foreach ($formosa->getCities() as $city) {
   $formosaCities[] = $city->getName();
};

header('content-type: application/json');

switch ($_GET['provincia']) {
    case 'Corrientes': 
        print json_encode($corrientesCities);
        break;
    case 'Resistencia':
        print json_encode($chacoCities);
        break;
    case 'Formosa':
        print json_encode($formosaCities);
        break;
};

?>

