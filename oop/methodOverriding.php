<?php
class Teacher{
    public $city="Delhi";
    function nextExam(){
        echo "next exam is math";
    }
    function age(){
        echo "my age is 48";
    }
}

class Student extends Teacher{
    public $city="noida";
    function age(){
        echo "my age is 20";
    }
} 

$st1= new Student();
// $st1->nextExam();
$st1->age();
echo "<br>";
echo $st1->city;
?>