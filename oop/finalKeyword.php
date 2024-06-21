<!-- final keywords is used to cannot inherit to another class  -->

<?php
// final class Honda{

// }

// class Cars extends Honda{

// }

// $car = new Cars();

class Honda{
    function companyName(){
        echo "Honda";
    }
} 

class Cars extends Honda{
    function companyName(){
        echo "Honda City";
    }
}

$car = new Cars();
$car->companyName();
?>