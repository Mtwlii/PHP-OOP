<?php


abstract class MakeDevice
{

    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($n);
}


class Iphone extends MakeDevice


{
    public $owner;
    public function testPerformance()
    {
        echo 'performance is Good 100 %';
    }
    public function verifyOwner()
    {
        echo 'Owner is verified';
    }
    public function sayWelcome($s)
    {
        $this->owner = $s;
        echo 'Welcome ' . $s;
    }
}


class Ipad extends MakeDevice
{
    public $owner;
    public function testPerformance()
    {
        echo 'performance is Good 100 %';
    }
    public function verifyOwner()
    {
        echo 'Owner is verified';
    }
    public function sayWelcome($x)
    {
        $this->owner = $x;
        echo 'Welcome ' . $x;
    }
}


$iphone = new Iphone();
$iphone->sayWelcome("Metwally");

echo '<pre>';
print_r($iphone);
echo '</pre>';
echo  '<br>' . '|------------------------------------------|' . '<br>';

$ipad = new Ipad();
$ipad->sayWelcome("Mohamed");

echo '<pre>';
print_r($ipad);
echo '</pre>';
