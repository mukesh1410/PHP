<?php
trait parentCompany1{
    function getTotalEmp(){
        echo 500;
    }
}

trait parentCompany2{
    function getTotalOffice(){
        echo 10;
    }   
}

class company{
    use parentCompany1;
    use parentCompany2;
}

$cmp= new Company();
$cmp->getTotalEmp();
echo "<br>";
$cmp->getTotalOffice();
?>