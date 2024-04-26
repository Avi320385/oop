<?php

// class Fruit 
// {
    
//     public $name;   //properties
//     public $color; //properties

//     function set_name($name)
//     {
//         $this->name=$name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }


// }

// $apple=new Fruit();
// $banana=new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');
//  echo $apple->get_name();
//  echo"<br>";
 //echo $banana->get_name();

//  class Avi{
//          public $name;
//          public $adress;

//          function infoN() 
//          {
//              echo"Avi";
//              echo"<br>";
//             echo "Narail";
//          }
         
//  }
//  $obj=new Avi();
//  $obj->infoN();

class Test
{
    // public $name;
    // public $adress;

    public function testFunction()
    {
        echo " My name is Avi";
        echo"<br>";
        echo "My adress is Narail";
        echo"<br>";
    }
}

$obj1=new Test();
$obj1->testFunction();

class Test1
{
    public function testFunction()
    {
        return "Avi vii  <br>";
       

    }
}
$obj12=new Test1();
echo $obj12-> testFunction();


class Sohela
{
    public function sohelaFunction()
    {
        return "Avi boss  <br>";
        
    }
}
$obja=new Sohela();
echo $obja->sohelaFunction();


