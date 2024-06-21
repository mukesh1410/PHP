<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" placeholder="enter text" name="filename"/>
        <br>
        <textarea name="content"></textarea>
        <br>
        <button>Create File</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['filename'])){
$fileName="uploads/".$_POST['filename'];
$content=$_POST['content'];
$file= fopen($fileName, "w") or die("unable to create file");
fwrite($file,$content);
fclose($file);
echo "file created";
}
?>