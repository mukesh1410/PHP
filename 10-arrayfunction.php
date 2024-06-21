<?php
$users= ["Mukesh","Ravi","Sourabh","Ashish","Kausar"];
$user = ["Name"=>"Mukesh"]; 
$str = "This is a book";
// echo is_array($users);
// echo "<br>";
// echo count($users);
// echo "<br>";
// unset($users[1]);
// echo "<br">;
// array_push($users,"Manish");
// array_pop($users);
// print_r($users);
// print_r(array_keys($user));
// echo implode($users);
// echo $str;  
// print_r(explode(" ",$str));
// print_r(array_merge($user,$users));
$data =  array_unique($users);
print_r ($data);
?>