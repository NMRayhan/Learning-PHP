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
    public $firstNumber=10;
    public $secondNumber=20;


    public function index()
    {

//        Assignment Operator
        echo ($this->firstNumber += $this->secondNumber);
        echo ('<br/>');
        echo ($this->firstNumber -= $this->secondNumber);
        echo ('<br/>');
        echo ($this->firstNumber *= $this->secondNumber);
        echo ('<br/>');
        echo ($this->firstNumber /= $this->secondNumber);
        echo ('<br/>');
        echo ($this->firstNumber %= $this->secondNumber);
        echo ('<br/>');
        echo ($this->firstNumber .= $this->secondNumber);
        echo ('<br/>');


////        Unary Operator
//        echo $this->firstNumber++;
//        echo ('<br/>');
//        echo $this->firstNumber;
//        echo ('<br/>');
//        echo $this->firstNumber--;
//        echo ('<br/>');
//        echo ++$this->firstNumber;
//        echo ('<br/>');
//        echo $this->firstNumber;



////          binary operator
//        echo ($this->firstNumber + $this->secondNumber);
//        echo ('<br/>');
//        echo ($this->firstNumber - $this->secondNumber);
//        echo ('<br/>');
//        echo ($this->firstNumber * $this->secondNumber);
//        echo ('<br/>');
//        echo ($this->firstNumber / $this->secondNumber);
    }
}