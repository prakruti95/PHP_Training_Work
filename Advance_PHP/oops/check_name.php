<?php 
class Name 
{
    public $arr=array("Prakruti","vandana","amrin","milan","raj");
    public function Display()
    {
      if(in_array("rahul",$this->arr))
      {
        echo "Name is avilable in Our databased";
      }

      else 
      {

        echo "This Name is not available in our Databased";
      }
    }
}

$obj=new Name;
$obj->Display();

?>