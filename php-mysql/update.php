<?php
include("./config.php");

if(isset($_GET['id'])){
    echo $id=$_GET['id'];
    $getStudent=$conn->prepare("select * from students where id='$id'");
    $getStudent->execute();
    $student= $getStudent->fetchAll();
     $name=$student[0]['name'];
     $course=$student[0]['course'];
     $batch=$student[0]['batch'];
}
?>
<form method="POST" action="">
    <input type="text" value="<?php echo $name ?>" name="name"/>
    <br>
    <input type="text" value="<?php echo $course ?>" name="course"/>
    <br>  
    <input type="text" value="<?php echo $batch ?>" name="batch"/>
    <br>
    <button value="<?php echo $id; ?>" name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $id=$_POST['update'];
    $name=$_POST['name'];
    $course=$_POST['course'];
    $batch=$_POST['batch'];
    $updateStudent= $conn->prepare("update students set 
    name='$name',
    course='$course', 
    batch='$batch' 
    where id='$id'");
    echo "<br>";
    if($updateStudent->execute()){
        header('location:delete_edit.php');
    }else{
        echo "update failed";
    }
}
?>