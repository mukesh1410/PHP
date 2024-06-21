<?php
if(isset($_POST['user'])){
    // echo $_POST['user'];
    class User{
        function getName($name){
            echo "User name is:$name";
        }
    }
    
    $user= new User();
    $user->getname($_POST['user']);
}
?>

<form method="POST" action="">
    <input type="text" name="user" placeholder="Enter User Name"/>
    <button>Click</button>
</form>