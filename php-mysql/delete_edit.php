<?php
include("./config.php");

// try {
//     $students = $conn->prepare("DELETE FROM `students` WHERE `name` = 'anil'");
//     $result = $students->execute();
//     echo "Record deleted";
//     // if ($result) {
//     //     echo "Record deleted";
//     // } else {
//     //     echo "Operation failed";
//     // }
// } catch (err) {
//     echo "Error".err;
// }
try{
$students= $conn->prepare("select * from students");
$students->execute();
$result= $students->fetchAll();
// print_r($result);
echo"<table border='1'>";
foreach($result as $student){
    echo "<tr>
    <td>".$student['name']."</td>
    <td>".$student['course']."</td>
    <td>".$student['batch']."</td>
    <td><form method='POST' action=''>
    <button name=delete value=".$student['name'].">Delete</button>
    </form></td>
    <td><a href='update.php?id=".$student['id']."'>Edit</a></td>
    </tr>";
}
echo "</table";
if(isset($_POST['delete'])){
    $students= $conn->prepare("delete from students where id='$id'");
    if($students->execute()){
        echo "record deleted";
    }else{
        echo "record not deleted";
    }
}
}catch(err){
    echo "connection failed";
}
?>
