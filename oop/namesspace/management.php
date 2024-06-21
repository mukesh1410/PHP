<?php
include('./teacher.php');
include('./student.php');

$teacher= new teacher\JoiningDetails();
$teacher->joiningDate();
echo "<br>";
$teacher= new student\JoiningDetails();
$teacher->admissionDate();
?>