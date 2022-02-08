<?php


namespace App\Classes;


class Example
{
    public $name;
    public $data = [];
    public $i;


    public function index()
    {
        $this->name = "BITM";
        $this->name = "BASIS";
        $this->name = "SEIP";

        $this->data = [
            0 => [
                'name'  => 'Sagor',
                'email' => 'Sagor12@gmail.com',
                'ID'    => '123456',
                'mobile' => [
                    'person'=>'0177personal',
                    'Guardian'=>'0177guardian',
                ]
            ],
            1 => [
                'name'  => 'Rayhan',
                'email' => 'Rayhan@gmail.com',
                'ID'    => '354435',
                'mobile' => [
                    'person'=>'0177personal',
                    'Guardian'=>'0177guardian',
                ]
            ],
            2 => [
                'name'  => 'Chondan',
                'email' => 'Chondan@gmail.com',
                'ID'    => '643465',
                'mobile' => [
                    'person'=>'0177personal',
                    'Guardian'=>'0177guardian',
                ]
            ],
            3 => [
                'name'  => 'Tamim',
                'email' => 'Tamim@gmail.com',
                'ID'    => '987689',
                'mobile' => [
                    'person'=>'0177personal',
                    'Guardian'=>'0177guardian',
                ]
            ],
            4 => [
                'name'  => 'Shaiful',
                'email' => 'Shaiful@gmail.com',
                'ID'    => '320975',
                'mobile' => [
                    'person'=>'0177personal',
                    'Guardian'=>'0177guardian',
                ]
            ],
            5 => [
                'name'  => 'Ashraful',
                'email' => 'Ashraful@gmail.com',
                'ID'    => '420420',
                'mobile' => [
                    'person'=>'0177personal',
                    'Guardian'=>'0177guardian',
                ]
            ],
            6 => 'BITM',
            7 => [
                'name' => 'Sojib',
                'email' => 'sajib@gmail.com',
                'mobile' => '661264',
            ]
        ];

//        echo $this->data[0]['name'].'<br/>';

//        echo 'Length of Array : '.count($this->data).'<br/>';

//        foreach ($this->data as $key => $item){
//            if (is_array($item))
//            {
//                foreach ($item as $value){
//                    if (is_array($value)){
//                        foreach ($value as $v_value){
//                            echo $v_value.' ';
//                        }
//                    }else{
//                        echo $value.' ';
//                    }
//                }
//            }
//            else
//            {
//                echo $item.' ';
//            }
//            echo '<br/>';
//        }

//        echo '<pre>';
//        print_r($this->data);
//        var_dump($this->data);
    }
}