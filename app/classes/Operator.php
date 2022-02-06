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


            ========Statement========

        * Single line Statement
        * Conditional Statement
            * if
            * if else
            * if else if
            * switch
        *repeated Statement
             * for
             * while
             * do while
             * foreach
             * Array
*/
    public $firstNumber=10;
    public $secondNumber=10;
    public $thirdNumber=30;
    public $dayName = 'friday';


    public function index()
    {
        echo ('Hello World');
        if ($this->firstNumber < $this->secondNumber){
            echo 'True';
        }else{
            echo 'False';
        }

        if ($this->firstNumber < $this->secondNumber){
            echo $this->secondNumber." is bigger then ".$this->firstNumber;
        }
        elseif($this->firstNumber > $this->secondNumber){
            echo $this->firstNumber." is bigger then ".$this->secondNumber;
        }
        else{
            echo $this->firstNumber." equal to ".$this->secondNumber;
        }

        switch ($this->dayName){
            case 'saturday':
                echo 'Today is saturday';
                break;
            case 'sunday':
                echo 'Today is sunday';
                break;
            case 'monday':
                echo 'Today is monday';
                break;
            case 'tuesday':
                echo 'Today is tuesday';
                break;
            case 'wednesday':
                echo 'Today is wednesday';
                break;
            case 'thursday':
                echo 'Today is thursday';
                break;
            default:
                echo 'Today is friday';

        }





////        Logical Operator
//        echo ('.....<br/>');
//        echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber > $this->thirdNumber); // false
//        echo ('<br/>.....<br/>');
//        echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber < $this->thirdNumber); //true
//        echo ('<br/>.....<br/>');
//        echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber > $this->thirdNumber); //true
//        echo ('<br/>.....<br/>');
//        echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber < $this->thirdNumber); //true
//        echo ('<br/>.....');


////        Assignment Operator
//        echo ($this->firstNumber += $this->secondNumber);
//        echo ('<br/>');
//        echo ($this->firstNumber -= $this->secondNumber);
//        echo ('<br/>');
//        echo ($this->firstNumber *= $this->secondNumber);
//        echo ('<br/>');
//        echo ($this->firstNumber /= $this->secondNumber);
//        echo ('<br/>');
//        echo ($this->firstNumber %= $this->secondNumber);
//        echo ('<br/>');
//        echo ($this->firstNumber .= $this->secondNumber);
//        echo ('<br/>');


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