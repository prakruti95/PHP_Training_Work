<?php 
// <!-- 
// Pre defined constructor is access via __construct() or magic method


// -->

class A 
{
    public function __construct()
    {
        $name="My name is Brijesh";
        echo $name;
    }
}
$obj=new A;


?>