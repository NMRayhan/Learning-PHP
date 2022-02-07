<?php
require_once 'vendor/autoload.php';
use App\classes\Example;
use App\classes\Person;
use App\classes\Operator;

//$operatorObj = new Operator();

$person = new Person();

$person ->districtName();
$person ->getDivisionName();
$person ->getCountryName();
$person ->loopExecution(10,20);

//$operatorObj->index();

//$example = new Example();
////$personObject = new Person();
//$example->methodFirst();
//$example->methodSecond();
//$example ->methodLast();
//
//
//echo '<p>Person Object<p/>';
//
//$example ->personMethod();