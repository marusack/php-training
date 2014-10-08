<?php

require_once '../bootstrap.php';

use Map\Province;
use Map\City;

$pro = new Province('Corrientes');
echo $pro->getName();