<?php
class Company{
    function getName(){
        echo "This is honda motors";
        return $this;
    }
    function getEmp(){
        echo "This is honda motors";
    }
}

$company = new Company();
$company->getName()->getEmp();
?>