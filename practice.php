 <?php


Class Info{

const NAME="avi";

public function infoFunction(){


}


}
$obj =new Info();


class Hight extends Info{

const HIGH="53 inch";
public function hjkFunction(){

    return "$this ::NAME , $this ::HIGH";
}


} 
$obj1= new Hight();
//echo $obj1-> hjkFunction();

class Qualifi extends Hight {


public function quliFunction($school,$collage,$versity){

    return "$school, $collage, $versity, " . "<br>". $this::NAME . ", " . $this::HIGH;


}





}
//  $obj3=new Qualifi();
//  echo $obj3->quliFunction('haaa','hdhdh','gssdgd');
 

 class Contact extends Qualifi{

    public Static $num="01305863077";
    public Static $email="sohale@gmail.com";
 
 
    
 }

 $obj4=new Contact();
 //$obj4->conFunction();
 echo Contact::$num;
 echo Contact::$email;

 echo $obj4->quliFunction(2022,22,33);
 echo $obj4->quliFunction('haaa','hdhdh','gssdgd'); 



