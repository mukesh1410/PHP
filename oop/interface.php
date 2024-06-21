<?php
interface ProductFeatures{
    // public $country="Japan";     
    function images();
    function ownerDetails();
    // function common(){
    //     echo("common");
    // }
}

class Products implements ProductFeatures{
    function images(){
        echo "product images";
    }
    function ownerDetails(){
        echo "product ownerDetails";
    }
}
$product= new Products();
$product->images();
$product->ownerDetails();
?>