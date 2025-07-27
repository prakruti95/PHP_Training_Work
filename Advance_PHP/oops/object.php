<?php  


class A 
{
    public function Display()
    {
        $str="i am Prakruti"."<br>";
        echo str_repeat($str,25);
    }
}
$obj=new A;
$obj->Display();

?>