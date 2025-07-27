<?php 


interface A 
{
    public function Display1();
}

interface B 
{
    public function Display2();
}

interface C 
{
    public function Display3();
}

interface D 
{
    public function Display4();
}
class E implements A,B,C,D 
{
    public function Display1()
    {
        echo "I am prakruti"."<br>";
    }
    public function Display2()
    {
        echo "I am Maulik"."<br>";
    }
    public function Display3()
    {
        echo "I am Vandana"."<br>";
    }
    public function Display4()
    {
        echo "I ma Amrin"."<br>";
    }
}

$obj=new E;
$obj->Display1();
$obj->Display2();
$obj->Display3();
$obj->Display4();

?>