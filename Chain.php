<?php

class Chain 

{
    public static $a;
    public $b;
    
    public static function first($c)
    {
        self::$a=$c;
        return new self;
    }
    public function second($d)
    {
        $this->b=$d;
        return $this;
    }
    public function sum()
    {
        return self::$a + $this->b;
    }
}

$obj=new Chain();
echo Chain::first(10)->second(15)->sum();