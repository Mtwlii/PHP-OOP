<?php



class Iphone
{
    public $name;
    public $ram;
    private $coloring;

    /*
    public function __get($prop)
    {
        echo 'the property [ ' . $prop . ' ] Is not found or not accessible<br>';
    }
*/
    public function __set($prop, $value)
    {
        echo 'The property [ ' . $prop . ' ] Is not found or not accessible . <br>';

        echo 'And You Cannot Assign This Value [ ' . $value . ' ] To It . <br><br>';
    }
}
$iphone = new Iphone();

$iphone->coloring = 'Red';
$iphone->notfound = 'Testing';


echo '<pre>';
print_r($iphone);
echo '</pre>';
