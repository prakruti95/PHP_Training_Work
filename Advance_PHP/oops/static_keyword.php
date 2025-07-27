<?php 
// if we are create a static method we need not create an object of class we direct access properties of class using :: scope resulation operator to access that method

class A 
{
   static public function display()
    {
        echo "My name is Brijesh";
    }
}
// $obj=new A;
// $obj->display();

A::display();




?>