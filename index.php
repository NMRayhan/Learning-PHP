<?php
require_once 'vendor/autoload.php';
use App\classes\Example;
use App\classes\Person;

$example = new Example();
//$personObject = new Person();
$example->methodFirst();
$example->methodSecond();
$example ->methodLast();


echo '<p>Person Object<p/>';

$example ->personMethod();