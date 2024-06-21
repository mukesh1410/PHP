<?php
class User{
    private function getName($name){
        echo $name;
    }
    function __call($method,$args){
        // echo "$method method not found";
        // echo "<br>";
        // echo print_r($args);
        if(method_exists($this,$method)){
            echo "this is a private method";
        }else{
            echo "$method method not found";

        }
    }
}

$user = new User();
$user->getNamefd("mukesh","srivastav");
?>