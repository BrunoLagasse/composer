<?php

require_once '../vendor/autoload.php';

use App\src\Hello;

$hello1 = new App\Wcs\Hello();
echo $hello1->talk();