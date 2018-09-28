<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 28/09/18
 * Time: 13:09
 */
require '../vendor/autoload.php';
use App\Wcs\Hello;
$bidule = new \App\Wcs\Hello();
echo $bidule->talk();
use HelloWorld\SayHello;
$bidule2 = new \HelloWorld\SayHello();
echo $bidule2->world();
