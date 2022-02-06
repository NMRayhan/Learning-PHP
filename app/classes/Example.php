<?php

namespace App\classes;

class Example
{
    public $firstName = "Nur Mohammad ";
    public $lastName = "Rayhan";
    public $firstNumber = true;
    public $lastNumber;


    public function index()
    {
        //this is also Single line Comments;
        #this is also Single line Comments;
        $firstName = $this->firstName;
        $lastName = $this->lastName;
        $firstNumber = $this ->firstNumber;
        echo gettype($this ->firstNumber);
    }
}