<?php


namespace App\classes;


use mysql_xdevapi\Statement;

class Operator
{
    /*
    Arithmatic Operator
    Binary Operator( +, -, *, /, %)
    Unary Operator ( ++, --, (-))
    Assignment Operator(=, +=, -=, *=, /=,%=, .=)
    Conditional Operator (>, >=, <, <=, ==, !=, ===, !==)
    Logical Operator(&&, ||, !)
    */

//    public $firstNumber;
//    public $lastNumber;
    public $x;
    public $y;
    protected $z;

    public function index()
    {
//        echo "Hello World";
        $this->x=10;
        $this->y=20;
        $this->z=30;


//        ====Statement===
        /*
         * Single Line statement
         * Conditional Statement
             *if
            * if else
            * if else if
            * switch

        * Repeated Statement
            *For
            * while
            * do while
            * for each

        * Array
         */

        switch ($this->y)
        {
            case 10:
                echo "Hello";
                break;

            case 20:
                echo "Bye";
                break;

            case 30:
                echo "hoise to";
                break;
            default:
                echo "Shesh hok";
        }

//        if ($this->x > $this->y)
//        {
//            echo "True";
//        }
//        else
//            {
//                echo "False";
//            }

//        if($this->x > $this->y)
//        {
//            echo 'Hello World';
//        }
//        elseif ($this->y > $this->z)
//        {
//            echo "Hello Dhaka";
//        }
//        elseif ($this->z > $this->x)
//        {
//            echo "Hello Wari";
//        }
//        else{
//            echo "Bye";
//        }

//        echo($this->x>$this->y) || ($this->y>$this->z);
//        echo '<br/>.....</br>';
//        echo($this->x>$this->y) || ($this->y<$this->z);
//        echo '<br/>.....</br>';
//        echo($this->x<$this->y) || ($this->y>$this->z);
//        echo '<br/>.....</br>';
//        echo($this->x<$this->y) || ($this->y<$this->z);
//        echo '<br/>.....</br>';



//        echo $this->x+= $this->y;
//        echo '<br/>';
//        echo $this->x-= $this->y;
//        echo '<br/>';
//        echo $this->x*= $this->y;
//        echo '<br/>';
//        echo $this->x/= $this->y;
//        echo '<br/>';
//        echo $this->x%= $this->y;
//        echo '<br/>';
//        echo $this->x.= $this->y;
//        echo '<br/>';

//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x--;
//        echo '<br/>';
//        echo ++$this->x;
//        echo '<br/>';
//        echo $this->x++;
//        echo '<br/>';


//        echo $this->x--;
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
    }


}