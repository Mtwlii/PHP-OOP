<?php



require 'Apple.php';
require 'Sony.php';
require 'Lg.php';


$iphone = new Apple\CreatePhone();
$iphone->sayHello();

echo '<pre>';
print_r($iphone);
echo '</pre>';
