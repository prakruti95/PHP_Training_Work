<?php 

class A 
{
    public function display($a,$b)
    {
      $c=$a+$b;
      echo $c."<br>";
    }
}
class B extends A 
{
    public function display($a,$b)
    {
      $d=$a*$b;
      echo $d."<br>";
    }
}

$obj=new B;
$obj->display(10,20);
?>