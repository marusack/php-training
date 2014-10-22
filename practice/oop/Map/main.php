<?php

require_once '../bootstrap.php';

use Map\Province;
use Map\City;

$ctes = new Province('Corrientes');
$ctes->addCity(new City('Corrientes', 3400));
$ctes->addCity(new City('Goya', 3400));
$ctes->addCity(new City('Paso de la Patria', 3400));
$ctes->addCity(new City('Empedrado', 3400));
$ctes->addCity(new City('Mercedes', 3400));

$chaco = new Province('Chaco');
$chaco->addCity(new City('Resistencia', 3500));
$chaco->addCity(new City('Barranqueras', 3500));
$chaco->addCity(new City('Villa Angela', 3500));
$chaco->addCity(new City('San Martin', 3500));
$chaco->addCity(new City('Castelli', 3500));

$formosa = new Province('Formosa');
$formosa->addCity(new City('Formosa', 3600));
$formosa->addCity(new City('Clorinda', 3600));
$formosa->addCity(new City('Pirane', 3600));
$formosa->addCity(new City('Comandante Fontana', 3600));

$provinces = array($ctes, $chaco, $formosa);

?>