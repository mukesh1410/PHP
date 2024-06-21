<?php
class Honda{
    static public $countryName="Japan";
    static function companyName(){
        echo "Honda";
    }
}

Honda::companyName();
echo Honda::$countryName;
?>