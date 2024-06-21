<?php
class MathOperations{
    public $val=30;
    function sum($a,$b){
        echo $a+$b+$this->val;
    }

    function multi($a,$b){
        echo $a*$b;
    }
}

$maths= new MathOperations();
$maths->sum(10,20);
echo "<br>";

$maths= new MathOperations();
$maths->sum(100,200);
echo "<br>";

$maths= new MathOperations();
$maths->multi(100,200);
?>