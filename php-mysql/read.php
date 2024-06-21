<?php
include("./config.php");

    // Prepare the SQL statement
    $getStudents = $conn->prepare("SELECT * FROM students");
    
    // Execute the statement
    $getStudents->execute();
    
    // Fetch all results
    $students = $getStudents->fetchAll(PDO::FETCH_ASSOC); // Fetch as an associative array

    echo "<table border='1'>";
    foreach($students as $student){
        echo "<tr>
        <td>" .$student['name'] ."</td>
        </tr>";
        echo "<br>";
    }   
    echo "</table>";
?>
