<?php


namespace App\classes;


class Person
{
    public $district;
    protected $division;
    private $country;

    public function districtName(){
        echo 'Feni,';
    }

    protected function divisionName(){
        echo (' Chittagong,');
    }

    public function getCountryName(){
        $this->countryName();
    }

    private function countryName(){
        echo ' Bangladesh';
    }
}