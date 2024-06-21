<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <button name="button" value="btn1">call function</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['button'])){
    btn_click_test();
}

function btn_click_test(){
    echo "function called on button clicked";
}
?>