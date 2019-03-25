<?php 
require'../vendor/autoload.php';

$hello = new App\Wcs\Hello();
$hello->talk();

$HelloWorld = new HelloWorld\SayHello();
$HelloWorld->world();
