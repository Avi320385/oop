<?php

class Avi
{
    public function inheriMethod($a,$b)
    {
        return ($a+$b);
    }
}

$obj=new Avi();
echo $obj->inheriMethod(12,15);
echo "<br>";

class Sohela extends Avi
{
    public function inheriMethod1()
    {
        return (25+$this->inheriMethod(12,12));
    }
}

$obj1=new SOhela();
echo $obj1->inheriMethod1();
echo "<br>";
echo $obj1->inheriMethod(20,20);
echo "<br>";


class Nahin extends Sohela
{
    public function inheriMethod1()
    {
        return (100+$this->inheriMethod(100,100));
    }
}

$obj3=new Nahin();
echo $obj3->inheriMethod1();
echo "<br>";


class Dani extends Nahin
{
     public function inheriMethod2()
     {
        return(20+20);
     }
}

$obj4=new Dani();
echo $obj4->inheriMethod(300,200);
echo "<br>";
echo $obj4->inheriMethod1();
echo "<br>";
echo $obj4->inheriMethod2();
