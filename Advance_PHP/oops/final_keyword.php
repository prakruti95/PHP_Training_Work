<?php

class A 
{
   final public function display($a,$b)
    {
        $c=$a+$b;
        echo "Additions of numbers is :".$c;
    }
}

class B extends A 
{
    
    public function display($a,$b)
    {
        $c=$a*$b;
        echo "Multiplications of numbers is :".$c;
    }
}

$obj=new B; 
$obj->display(10,20);

?>