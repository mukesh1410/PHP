<?php
setcookie("name","mukesh",time()+(86400));
print_r($_COOKIE);
if(isset($_COOKIE['name'])){
    echo "cookie recieved";
}else{
    echo "cookie not recueved";
}
?>