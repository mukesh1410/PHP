<?php
class User {
    public $name = "Mukesh Srivastav";
    private $age = 30;

    function __get($property){
        echo "$property property is not exits";
    }
}

$user = new User();
echo $user->nama;
echo "<br>";
echo $user->age;
?>
