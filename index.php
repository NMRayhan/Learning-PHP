<?php

require_once 'vendor\autoload.php';
use App\Classes\Example;
use App\Classes\FullName;

$fullName = new FullName();
$example = new Example();
$example->index();
//$fullName ->index();
