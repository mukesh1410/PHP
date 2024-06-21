<form method="POST" action="">
    <input type="text" name="search" placeholder="enter name for search"/>
    <br>
    <button>search</button>
</form>


<?php
include("./config.php");
if(isset($_POST['search'])){
    $search=$_POST['search'];
    // $student=$conn->prepare("select*from students where name='$search'");
    $student=$conn->prepare("select*from students where name like '%$search%'");
    $student->execute();
    $result=$student->fetchAll();
    echo "<table border='1'>";
    foreach($result as $student){
        echo "<tr>
        <td>".$student['name']."</td>
        <td>".$student['course']."</td>
        <td>".$student['batch']."</td>
        </tr>";
    }
}
?>