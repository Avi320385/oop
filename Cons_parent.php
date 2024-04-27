<?php

class Cons 
{
    function __construct($a,$b)
    {
        echo($a+$b);
    }
}

$obj1=new Cons(25,25);

class Cons1 extends cons 
{
    function __construct($a,$b)
    {
        parent::__construct($a,$b);
    }
}

$obj2=new Cons1(20,20);