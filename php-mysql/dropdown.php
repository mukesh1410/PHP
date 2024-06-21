<?php
include("./config.php");
try{
    $getStudent=$conn-> prepare("select*from students");
    $getStudent->execute();
    $studentData=$getStudent->fetchAll();
    // print_r( $studentData);
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo "<select>";  
echo "<option>select name</option>";
foreach($studentData as $student){
    echo "<option value=".$student['id'].">".$student['name']."</option>";
}
echo "<select>";
?>