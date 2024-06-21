<?php
class ConstrutorDemo{
    // function setName(){
    //     echo "hello";
    // }
    public $name;
    function __construct(){
        // echo "constructor called";
        $this->name="anil";
    }
    function displayName(){
        echo $this->name;
    }
}

$cd= new ConstrutorDemo;
// $cd->setName();
$cd->displayName();     
?>