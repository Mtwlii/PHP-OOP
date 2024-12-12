<?php

class AppleDevices
{

    //properties
    public $ram = '1GB';
    public $inch = '4 Inch';
    public $space = '16 GB';
    public $color = 'Silver';
    public $screen = 'LCD';
    public $name;
    public $price = "500  $";
    //Methods

    public function changeSpec($ra, $in, $sp, $co)
    {

        $this->ram      = $ra;
        $this->inch     = $in;
        $this->space    = $sp;
        $this->color    = $co;
    }

    final public function sayHallo($n)
    {
        $this->name = $n;
        echo "Welcome To " . $n;
    }
}

//--------------------------------------------------------------

class Sony extends AppleDevices
{

    //properties
    public $Camera = '25 GB';
    //Methods

}


//--------------------------------------------------------------

$iphone6plus = new AppleDevices();
$iphone6plus->changeSpec('3GB', '5 Inch', '32GB', 'Gold');
$iphone6plus->sayHallo('Iphone');
$iphone6plus->price = "400 $";
echo '<pre>';
print_r($iphone6plus);
echo '</pre>';


//!------------------------------------------------------------------------

$sony = new Sony();

$sony->sayHallo('Sony');
$sony->changeSpec('7GB', '7.7 Inch', '16GB', 'Roose', '25MB');

echo '<pre>';
print_r($sony);
echo '</pre>';
