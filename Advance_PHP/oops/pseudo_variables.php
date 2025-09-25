<?php  
/* pseudo variables access via $this 
   pseudo variables are used access globally variables inside of class scope.

*/
class A 
{
    public $str="Hi Prakruti";
    public function Display()
    {
       echo $this->str;
    }
}

$obj=new A;
$obj->Display();


?>