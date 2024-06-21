<?php

trait ParentCompany1{
    function getEmp(){
        echo 100;
    }
}
trait ParentCompany2{
    function getEmp(){
        echo 300;
    }
}
class Company{
    use ParentCompany1;
    use ParentCompany2{
        ParentCompany1::getEmp insteadOf ParentCompany2;
        ParentCompant2::getEmp as getEmpCompany2;
    }
    // function getEmp(){
    //     echo 200;
    // }
}

$c1= new Company();
$c1->getEmp();
$c1->getEmpCompany2();
?>