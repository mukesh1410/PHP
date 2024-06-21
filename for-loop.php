<?php
$a = 1;
for($a; $a<=10; $a++){
    echo "<br>";
    // if($a>5){
    //     break;
    // }    
    if($a==5) {
        continue;
    }
    echo $a;    
}
?>