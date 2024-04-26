<?php
class Avi
{
    public $a=10;
    private $b=20;  //private property only showw in defiend class method
    protected $c=30; //protected property only showw in defiend class and inherit class method

    public function method()
    {
        return (10+$this->a+$this->b+$this->c);
    }
}

$obj=new Avi();
echo $obj->method();
echo "<br>";
echo $obj->a;
echo "<br>";
//echo $obj->b;



class Sohela extends Avi
{
    public function method1()
    {
        return(10+$this->a+$this->c);
    }
}

$obj1=new Sohela();
echo $obj1->method1();

