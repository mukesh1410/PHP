<form method ="POST" action = "">
    <input type= "text" name = "user" placeholder="enter user name"/>
    <br>
    <button name="button" value="set">SET COOKIES</button>
    <br>
    <button name="button" value="display">DISPLAY COOKIES</button>
    <br>
    <button name="button" value="delete">DELETE COOKIES</button>
    <br>
</form>

<?php

if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        setcookie("user",$val);
        echo "cookie is set";
    }
}

if($_POST['button']=='display'){
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
}

if($_POST['button']=='delete'){
    if(isset($_COOKIE['user'])){
        setcookie("user",null,-2);
    }
}

?>