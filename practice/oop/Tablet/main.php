<?php

//require_once '../bootstrap.php';
//
//use Tablet\Tablet;
//use Tablet\App;

require_once 'App.php';
require_once 'Tablet.php';

$a1= new App('Chrome', 1);
$a2 = new App('Netbeans', 3);
$a3 = new App('Winamp', 2);

$tablet = new Tablet();

$tablet->installApp($a3);
$tablet->showInstalledApps();
echo "</br>";

$tablet->installApp($a2);
$tablet->showInstalledApps();
echo "</br>";

$tablet->installApp($a3);
$tablet->showInstalledApps();
echo "</br>";