<?php 


abstract class A 
{
    public function Display()
    {
        echo "i am Prakruti";
    }
}

class B extends A 
{
    
    public function Display1()
    {
        echo "i am Amrin";
    }
}

$obj=new B;
$obj->Display();
$obj->Display1();


?>