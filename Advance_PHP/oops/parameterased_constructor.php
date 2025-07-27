<?php
// class A 
// {
//     public function __construct($a,$b)
//     {
//       $c=$a+$b;
//       echo "Additions of numbers is :".$c;
//     }
// }

// $obj=new A(10,20);

// class A 
// {
//     public function __construct()
//     {
//         echo "i am used constructor"."<br>";
//     }
// }

// class B extends A 
// {
//     public function Display()
//     {
//         echo "I am used simple class exmples";
//     }
// }

// $obj=new B;
// $obj->Display();



// class A 
// {
//     public function __construct()
//     {
//         echo "i am used constructor"."<br>";
//     }
// }

// class B extends A 
// {
//     public function __construct()
//     {
//         echo "I am used simple class exmples";
//     }
// }

// $obj=new B;


// class A 
// {

//     public function __construct()
//     {
//         echo "i am used constructor"."<br>";
//     }
// }

// class B extends A 
// {
//    public function Display()
//     {
//         echo "I am used simple class exmples";
//     }
// }

// $ob=new B;
// $ob->Display();


// class A 
// {
//     public $name="Hi i am ";
//     public function __construct($nm)
//     {
//         echo $this->name."".$nm;

//     }
// }

// $obj=new A("brijesh");



class A 
{
    public $name="Hi i am ";
    public function __construct($nm)
    {
        echo $this->name."".$nm;

    }
}

$obj=new A("brijesh");


?>