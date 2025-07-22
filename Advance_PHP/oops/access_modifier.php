<?php 



class A 
{
    public $public="i am public member function";
    private $private="i am private member function";
    protected $protected="i am protected member function";

    public function Display()
    {
        echo $this->public."<br>";
        echo $this->private."<br>";
        echo $this->protected."<br>";
    }

}

$obj=new A;
// $obj->Display();
echo $obj->public."<br>";
echo $obj->private."<br>";
echo $obj->protected."<br>";



?>