<?php
abstract class ProductFeatures{
    abstract function productDetails();
    abstract function productImages();
    abstract function productOwnerDetails();
}

class UploadProduct extends ProductFeatures{
    function productDetails(){
        echo "product details added";
    }
    function productImages(){
        echo "product images added";
    }
    function productOwnerDetails(){
        echo "product owner details added";
    }
}

$upload = new UploadProduct();
$upload->productDetails();
echo "<br>";
$upload->productImages();
echo "<br>";    
$upload->productOwnerDetails();
?>