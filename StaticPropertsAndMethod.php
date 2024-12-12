<?php


class Iphone
{
    public  $name = "osama";
    public static $ram = "2GB";

    public static function sayHello()
    {
        return 'hello' . '<br>';
    }
}

$phone = new Iphone();
echo $phone->name;
echo Iphone::sayHello();
// echo Iphone::sayHello();
// echo Iphone::$name . '<br>';
// echo Iphone::$ram . '<br>';

// echo $iphone->name;
// echo "<pre>";
// print_r($iphone);
// echo "</pre>";
