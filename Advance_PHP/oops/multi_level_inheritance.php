<?php 

class A 
{
  public function Test1()
  {
    echo "Hey i am Prakruti"."<br>";
  }
}

class B extends A
{
  public function Test2()
  {
  echo "Hey i am Rakesh"."<br>";
  }
} 

class C extends B 
{
    public function Test3()
    {
        echo "I am amrin"."<br>";
    }
}
$obj=new C;
$obj->Test1();
$obj->Test2();
$obj->Test3();


?>