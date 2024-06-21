<?php
$users = [
    ["name"=>"Mukesh","age"=>24,"city"=>"noida"],
    ["name"=>"Ravi","age"=>25,"city"=>"greater noida"],
    ["name"=>"kunal","age"=>27,"city"=>"gaziabad"]
];
foreach($users as $user){
    foreach($user as $key => $item){
        echo "$key is $item";
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
}
?>