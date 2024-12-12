<?php

/*
    Construct :
        magic method [__]
        --called when Opject Is Created
        --can be inherted
    Destruct :
        --Called when Opject is Destroyed    
*/

class Iphone
{
    public $name;
    public $ram;

    public function __construct($na, $ra)
    {
        $this->name = $na;
        $this->ram = $ra;
        echo 'Hello ' . $na . ' and your ram = ' . $ra;
    }
}
class Sony extends Iphone {}


$iphone = new Iphone('Metoo', '3GB');

echo '<pre>';
print_r($iphone);
echo '</pre>';
