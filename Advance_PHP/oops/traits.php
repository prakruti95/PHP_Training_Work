<?php 
// traits : traits is a process that is used to access a parent class properties by its child class more efficient meanse its is best solutions of inheritance

trait A 
{
    public function display()
    {
        echo "my name is brijesh"."<br>";
    }
}
trait B 
{
    
    public function display1()
    {
        echo "i am Maulik"."<br>";
    }
}

trait C 
{
    
    public function display2()
    {
        echo "i am Vandana";
    }
}

class D 
{
    use A,B,C;
}

$obj=new D;
$obj->display();
$obj->display1();
$obj->display2();


?>