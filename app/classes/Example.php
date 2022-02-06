<?php


namespace App\classes;
use App\Classes\Person;


class Example extends Person
{
    public $firstName;
    protected $middleName;
    private $lastName;
    public $firstNumber=10;
    protected $secondNumber=20;
    private $lastNumber=30;

    public function  index()
    {
//        echo "Hello World";
//        echo '<br/>';
//        $this->firstName='Fairuz';
//        $this->firstName='Fariha';
//        echo $this->firstName;
//        echo '<br/>';
//        echo gettype($this->firstName);
//        echo '<br/>';
//
//        $x="Bangladesh";
//        $x=10;
//        echo gettype($x);
        $this->firstName="Fariha";
        echo $this->firstName;
    }
    public function methodOne()
    {
        $this->middleName="Fairuz";
        echo $this->middleName;
    }
    public function methodTwo()
    {
        $this->lastName="Hera";
        echo $this->lastName;
    }

    public function methodThree()
    {
//        echo $this->district;
//        echo $this->division;
//        echo $this->country;
        $this->district();
        $this->division();
//        $this->country();

    }

}