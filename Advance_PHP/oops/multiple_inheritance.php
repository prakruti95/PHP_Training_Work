<?php 
class A 
{
  public function Test1()
  {
    echo "Hey i am Prakruti"."<br>";
  }
}

class B 
{
  public function Test2()
  {
    echo "Hey i am Milan"."<br>";
  }
}

class C 
{
  public function Test3()
  {
    echo "Hey i am Vandana"."<br>";
  }
}

class D extends A,B,C 
{
    public function Test4()
    {
      echo "Hey i am Rakesh"."<br>";
    }
}

$obj=new D;
$obj->Test1();
$obj->Test2();
$obj->Test3();
$obj->Test4();
?>