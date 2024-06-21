<?php
// $user=["mukesh","noida","uttat pradesh","india"];
// $users=["mukesh","suraj","ravi","ashish","sourabh"];
$users=[
    ["mukesh","noida","uttar pradesh"],
    ["ravi","greater noida","uttar pradesh"],
    ["sourabh","greater noida","uttar pradesh"],
];
// echo "<pre>";
// print_r($users);
for($i=0;$i<count($users);$i++){
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
        echo "<br>";
    }
}
?>