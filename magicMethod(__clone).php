<?php


class Iphone
{

    public $name;
    public $email;

    public function __construct($n, $e)
    {
        $this->name = $n;
        $this->email = $e;
    }
    public function __clone()
    {
        $this->name = clone $this->name;
    }
}

$main = new Iphone("Metwally", "m@m.com");

$copy = clone $main;
$main->name = "Sayed";
$copy->name = "Mahmoud";

echo '<pre>';
print_r($main);
echo '</pre>';

echo '<pre>';
print_r($copy);
echo '</pre>';

?>