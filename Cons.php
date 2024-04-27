<?php


class Cons 
{
   public function __construct($a,$b)
   {
      echo ($a+$b);
   }
 

}

 $obj1=new Cons(12,12);

 //echo $obj1->method1();

 class Cons1

 
 {

    public $sum;

    public function __construct($c,$d)
    {
       $this->sum=($c+$d);
    }

    // public function method1($c,$d)
    // {
    //     echo ($c+$d);
    // }
 }

 $obj2=new Cons1(10,10);

 echo $obj2->sum;

 echo "<br>";


 class Cons2
 {
    public $a;
    public $b;
    public $c;

    public function __construct($d,$e,$f)
    {
        $this->a=$d;
        $this->b=$e;
        $this->c=$f;


    }
 }

 $obj3=new Cons2(102,120,102);
 echo $obj3->a;
 echo "<br>";
 echo $obj3->b;
 echo "<br>";
 echo $obj3->c;