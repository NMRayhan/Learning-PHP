<?php

namespace App\classes;

class Example
{
    public $userAge = 25;
    public $firstName = "Nur Mohammad ";
    public $lastName = "Rayhan";


    public function index()
    {
        $firstName = $this->firstName;
        $lastName = $this->lastName;
        echo $firstName.$lastName;
    }
}