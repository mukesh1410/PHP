<?php
include("./config.php");

class Student {
    public $DBconn;

    function __construct($conn) {
        $this->DBconn = $conn;
    }

    function getData() {
        try {
            $getStudents = $this->DBconn->prepare("SELECT * FROM students");
            $getStudents->execute();
            $result = $getStudents->fetchAll();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function insertData() {
        try {
            $sqlQuery = "INSERT INTO students (`id`, `name`, `course`, `batch`) VALUES (8, 'sumit', 'bcom', '2021')";
            $student = $this->DBconn->prepare($sqlQuery);
            $result = $student->execute();
            if ($result) {
                echo "Data inserted";
            } else {
                echo "Operation failed";
            }
        } catch (PDOException $e) {
            echo "Insert failed: " . $e->getMessage();
        }
    }

    function updateData(){
        try{
            $sqlQuery="update students set
            name='susant'
            where id=1";
            $student = $this->DBconn->prepare($sqlQuery);
            $result = $student->execute();
            if ($result) {
                echo "Data updated";
            } else {
                echo "Operation failed";
            }
        } catch (PDOException $e) {
            echo "update failed: " . $e->getMessage();
        }
    }

    function deleteData(){
        try{
        $sqlQuery= "delete from students where id=1";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if ($result) {
            echo "Data deleted";
        } else {
            echo "Operation failed";
        }
      } catch (PDOException $e) {
        echo "update failed: " . $e->getMessage();
    }
    }

    function insertDataWithRequest($request) {
        // print_r($request);
        $id= $request['id'];
        $name= $request['name'];
        $course= $request['course'];
        $batch= $request['batch'];
        try {
            $sqlQuery = "INSERT INTO students (`id`, `name`, `course`, `batch`) VALUES ($id, '$name', '$course', '$batch')";
            $student = $this->DBconn->prepare($sqlQuery);
            $result = $student->execute();
            if ($result) {
                echo "Data inserted";
            } else {
                echo "Operation failed";
            }
        } catch (PDOException $e) {
            echo "Insert failed: " . $e->getMessage();
        }
    }
  
}

try {
    $student = new Student($conn);
    // $student->getData();
    // $student->insertData();
    // $student->updateData();
    // $student->deleteData();
    if(isset($_POST['name'])){
        $student-> insertDataWithRequest($_POST);
    }
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
