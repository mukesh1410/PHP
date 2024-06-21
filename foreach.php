<?php
$names = ["ravi","mukesh","ashish","nitin","shivam","krishna"];
foreach($names as $x){
    echo $x;
    if($x=="ashish"){
        break;
    }
    echo "<br>";
}
?>