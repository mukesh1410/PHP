<?php
class Properties{
    public $name="Ravi Yadav";
    function getName(){
        echo $this->name;
    }
    function updateName($name){
        $this->name=$name;
    }
}

$p1 = new Properties();
$p1->updateName("rahul");
$p1->getName();

echo "<br>";

?>