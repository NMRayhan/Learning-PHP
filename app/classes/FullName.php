<?php


namespace App\Classes;


class FullName
{
    public $name;
    public $id;
    public $department;
    public $fullDetails;

    public function __construct($data=null)
    {
//        echo '<pre/>';
//        print_r($data);
//        exit();
        if ($data){
            $this ->name = $data['name'];
            $this ->id = $data['id'];
            $this ->department = $data['department'];
        }
    }

    public function index(){
//        header('Location: action.php?pages=full-name&&a=b&&name=rayhan');
        header('Location: action.php?pages=full-name');
    }
    public function getGFullName(){
         $this->fullDetails = $this->name.' '.$this->department.' '.$this->id;
         return $this->fullDetails;
    }
}