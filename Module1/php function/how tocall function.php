<?php 
// function call by values
// function nm($name)
// {
//     echo "My name is :".$name;
// }
// nm("priyank");

// function call by reference
function nm(&$fnm) //reference
{
    echo "My firstname is :Prakruti"."<br>";
}
$lnm="My last name is : Vyas";
nm($fnm);
echo $lnm;


?>