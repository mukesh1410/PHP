<?php
class User{
    private $name="mukesh";
    function __set($property,$value){
        if(property_exists($this,$property)){
            $this->$property=$value;
        }else{
            echo "no";
        }
        // echo "$property property does not set with $value";
    }
    function getName(){
        echo $this->name;
    }
}

$user = new User();
$user->getName();
echo "<br>";
$user->name="ravi";
$user->getName();

?>

