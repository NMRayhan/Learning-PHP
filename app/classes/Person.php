<?php


namespace App\classes;


class Person
{
    public $district;
    protected $division;
    private $country;

    public function districtName(){
        echo 'Feni';
    }

    protected function divisionName(){
        echo 'Chittagong';
    }

    private function countryName(){
        echo 'Bangladesh';
    }
}