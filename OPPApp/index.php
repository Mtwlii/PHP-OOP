<?php


spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.class.php';
});



$var = new testing4();

echo '<pre>';
print_r($var);
echo '</pre>';
