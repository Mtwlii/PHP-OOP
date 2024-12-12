<?php

trait FingerPrint
{
    public function fingerFeature()
    {
        echo 'This Has Finger Print Feature <br>';
        return $this;
    }
}
trait ThreeDimensionTouch
{
    public function ThreeD()
    {
        echo 'This Has 3D Touch Feature. <br>';
        return $this;
    }
}
trait FaceDetect
{
    function faceFeature()
    {
        echo 'This Has Face Detect Feature <br>';
        return $this;
    }
}

trait AllFeatures
{
    use FingerPrint,
        ThreeDimensionTouch,
        FaceDetect;
}

class Phone
{
    public $feature1;
    public $feature2;
    use AllFeatures;
    function SayHello()
    {
        echo 'Hello From Phone';
        return $this;
    }
}

class Sony
{
    public $feature3;
    public $feature4;
    use FingerPrint,
        ThreeDimensionTouch;
    function SayHello()
    {
        echo 'Hello From Sony';
        return $this;
    }
}

class Nokia
{
    public $feature5;
    public $feature6;
    function SayHello()
    {
        echo 'Hello From Nokia';
        return $this;
    }
}

class NewPhone extends Phone {}

$iphone = new Phone();
$iphone->fingerFeature()->ThreeD()->faceFeature()->SayHello();
echo '<pre>';
print_r($iphone);
echo '</pre>';


$sony = new Sony();
$sony->fingerFeature()->ThreeD()->SayHello();
echo '<pre>';
print_r($sony);
echo '</pre>';


$nokia = new Nokia();
$nokia->SayHello();
echo '<pre>';
print_r($nokia);
echo '</pre>';

//لو عندي trait عندي class الأولويه بتكون لل trait