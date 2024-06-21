<?php
// $user = ["name"=>"anil","age"=>30,"email"=>"anil@gmail.com"];
// $userJson=json_encode($user);
// print_r($userJson);
$data= '{"name":"anil","age":30,"email":"anil@gmail.com"}';
$dataArray = json_decode($data,true);
print_r($dataArray);
?>