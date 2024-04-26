<?php

class Avi 
{
    const A=10;
    const B=20;
    public function method()
    {
        return ($this::A + $this::B);
    }
}

$obj=new Avi();
echo $obj->method();
echo "<br>";
echo Avi::A;
echo "<br>";
echo Avi::B;
echo "<br>";


class Sohela 
{
    const X=10;
    const Y=20;
    static function method1()
    {
        return(self::X+self::Y);
    }
}

echo Sohela::method1();
echo "<br>";
echo Sohela::X;
echo "<br>";
echo Sohela::Y;

