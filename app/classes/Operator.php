<?php


namespace App\classes;


class Operator
{
/*
//          ========Operator========

        * Arithmetic Operator
            * binary operator(+, -, *, %, /);
            * Unary Operator(++, --, (-));

        * Assignment Operator(+=, -=, *=, %=, /=)
        * Conditional Operator(>, >=, <, <=, ==, !=, ===, !===)
        * Logical Operator(&&, ||, !)

*/
    public $firstNumber=25;
    public $secondNumber=35;


    public function index()
    {
        echo ($this->firstNumber + $this->secondNumber);
        echo ('<br/>');
        echo ($this->firstNumber - $this->secondNumber);
        echo ('<br/>');
        echo ($this->firstNumber * $this->secondNumber);
        echo ('<br/>');
        echo ($this->firstNumber / $this->secondNumber);
    }
}