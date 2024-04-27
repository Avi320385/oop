<?php

include "Class1.php";

class Class2 extends Class1
{
    public function methodClass2()
    {
        return "this is class2";
    }
}

$obj2=new Class2();

echo $obj2->methodClass1();
echo "<br>";
echo $obj2->methodClass2();


