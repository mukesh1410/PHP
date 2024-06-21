<?php
include("teacher.php");
include("student.php"); 
include("management.php");

function autoloader($class){
include($class.'.php');
}
spl_autoload_register('autoloader');

$t1 = new Teacher();
?>