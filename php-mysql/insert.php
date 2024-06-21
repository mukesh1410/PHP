<form method="POST" action="">
    <input type="text" placeholder="enter name" name="name"/>
    <br>
    <input type="text" placeholder="enter course" name="course"/>
    <br> 
    <input type="text" placeholder="enter batch" name="batch"/>
    <br>
    <button>Add</button>
<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $course=$_POST['course'];
    $batch=$_POST['batch'];
    include("./config.php");
try {
    $student = $conn->prepare("
    INSERT INTO `students` (`id`, `name`, `course`, `batch`) 
    VALUES (NULL, '$name', '$course', '$batch')
    ");
    $result = $student->execute();
    
    if($result){
        echo "Data Inserted";
    }else{
        echo "Operation failed";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
?>
