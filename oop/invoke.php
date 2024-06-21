<?php
class User{
    function __invoke(){
        echo "my name is mukesh srivastav";
    }
    function other(){
        echo "hello";
    }
}

$user= new User();
// $user->getName();
$user();
$user->other();
?>