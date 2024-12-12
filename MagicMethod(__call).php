<?php

/* 
call :
    -Call When Invoking Function Not Accessible Or Not Found.

*/

class Iphone
{
    public $name;
    public $ram;
    public function __call($name, $arguments)
    {
        echo ' The Method [ ' . $name . ' ] Not Found <br>';


        echo '<pre>';
        print_r($arguments);
        echo '</pre>';
    }
}

$iphone = new Iphone();
$iphone->WelcomeToMobile("Metwally", "2GB");

echo '<pre>';
print_r($iphone);
echo '</pre>';
?>