<?php
require_once 'vendor/autoload.php';
use App\Classes\FullName;

//print_r($_POST);

if (isset($_GET['pages'])) {
    if ($_GET['pages'] == 'full-name'){
        include 'pages/full-name.php';
    }
}
else if (isset($_POST['btn']))
{
    $fullName = new FullName($_POST);
    $result = $fullName -> getGFullName();

    include "pages/full-name.php";
}