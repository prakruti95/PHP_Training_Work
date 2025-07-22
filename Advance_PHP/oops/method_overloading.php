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
    public function display($d,$e,$f)
    {
      $g=$d*$e*$f;
      echo $g."<br>";
    }
}

$obj=new B;
$obj->display(10,20,30);
?>