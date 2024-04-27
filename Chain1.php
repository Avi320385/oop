<?php

class Chain1
{
    static $ax=10;
    public $ay=20;
    public static function method1($c)
    {
        self::$ax=$c;
        return new self;


    }

    public function method2($d)
    {
        $this->ay=$d;
        return $this;
    }
    public function sum()
    {
        return self::$ax + $this->ay;
    }
}

$obj1=new Chain1();
echo Chain1::method1(10)->method2(10)->sum();
