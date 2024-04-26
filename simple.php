<?php

class Avi
{
    public function test()
    {
       return "My name is Avi  <br>";
    }
    public function test1()
    {
        return"narail  <br>";
    }
}

$obj=new Avi();
echo $obj->test();
echo $obj->test1();

class Sohela
{
    public function test1()
    {
        return "it's a test class";
    }
}
$obj1=new Sohela();
echo $obj1->test1();