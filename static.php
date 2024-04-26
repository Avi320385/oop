<?php

class Avi
{
    public static $a=10;
    private static $b=20;
    protected static $c=30;
static function method()
    {
        return (self::$a + self::$b +self::$c); //static property can call self/ static
    }
}


echo Avi::$a;
echo"<br>";
echo Avi::method();

//for static no need to use object 