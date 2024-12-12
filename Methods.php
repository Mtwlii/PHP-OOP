<?php

class Iphone
{
    public $name;
    public $email;

    public function pressPower()
    {
        echo 'You have pressed the power button <br>';
        return $this;
    }

    public function bootPhone()
    {
        echo 'You phone is booting now ....  <br>';
        return $this;
    }

    public function sayWelcome()
    {
        echo 'Welcome to Phone <br>';
        return $this;
    }

}

$phone = new Iphone();
$phone->pressPower()->bootPhone()->sayWelcome();
echo '<pre>';
echo print_r($phone);
echo '</pre>';
