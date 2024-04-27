<?php

include "trait.php";

class Usetrait 
{
     use Firsttrait;

     public function traitFunction1()
     {
        return "hii";
     }
}

$obj=new Usetrait();
echo $obj->traitFunction1()  . "<br>" .   $obj->traitFunction();
