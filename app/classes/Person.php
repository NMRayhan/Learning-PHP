<?php


namespace App\classes;


class Person extends Execution
{
    public $district;
    protected $division;
    private $country;

    public function districtName(){
        echo 'Feni,';
    }

    public function getDivisionName(){
        $this->divisionName();
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

    public function loopExecution($start,$number){
        for ($this->i=$number; $this->i >= $start; $this->i--){
            echo ('<br/>Hello World - '.$this->i);
        }
    }
}