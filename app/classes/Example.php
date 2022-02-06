<?php

namespace App\classes;

class Example extends Person
{
    public $firstName;
    protected $middleName;
    private $lastName;
    public $firstNumber = 10;
    protected $middleNumber = 20;
    private $lastNumber = 30;


    public function methodFirst(){
        $this ->firstName = 'Nur ';
        echo $this->firstName;
        echo '<br>';
        echo $this ->firstNumber;
    }

    public function methodSecond(){
        $this ->middleName = ' Mohammad';
        echo $this ->middleName;
    }

    public function methodLast(){
        $this ->lastName = ' Rayhan';
        echo $this ->lastName;
    }

    public function personMethod(){
        echo $this->districtName();
    }
}