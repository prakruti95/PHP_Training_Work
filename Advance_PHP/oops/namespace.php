
<?php
namespace Mobile;

class User 
{

    public $name = 'mobile user';
}

$user = new \Mobile\User;
echo $user->name;

namespace TV ;

class User 
{
    public static $name = 'tv user';
}

echo \TV\User::$name;
