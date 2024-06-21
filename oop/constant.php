<?php
class ConstantDemo{
    // const collegeName="chandigarh university";
    protected  const collegeName="chandigarh university";
    function getCollegeName(){
        echo self::collegeName;
        // echo ConstantDemo::collegeName;
    }
}

class Child extends ConstantDemo{
    function getChildName(){
        echo self::collegeName;
    }
}
// echo ConstantDemo::collegeName;
// echo "<br>";
$c1 = new ConstantDemo();
$c1->getCollegeName();
?>