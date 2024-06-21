<?php
$userDetails = ["name"=>"anil","age"=>29,"city"=>"noida","state"=>"uttar pradesh"];
// echo $userDetails["name"];
foreach($userDetails as $key=>$value){
    echo $value;
    // echo $key.$value;
    echo "<br>";
}
?>