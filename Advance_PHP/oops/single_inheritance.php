<?php 

class A 
{
  public function Test1()
  {
    echo "Hey i am Brijesh"."<br>";
  }
}

class B extends A
{
  public function Test2()
  {
  echo "Hey i am Rakesh";
  }
} 

$obj=new B;
$obj->Test1();
$obj->Test2();


?>