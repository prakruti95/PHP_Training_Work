<?php 
class A 
{
    protected $protected="i am protected"."<br>";
    public function Display1()
    {
        echo $this->protected;
    }
}
class B extends A 
{
    public function Display2()
    {
        echo "I am using public";
    }
}

$obj=new B;
$obj->display1();
$obj->Display2();

?>