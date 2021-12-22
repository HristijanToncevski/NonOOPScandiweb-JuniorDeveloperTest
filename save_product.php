<?php
include_once "Database.php";

if(isset($_POST['save_product'])){
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $productType = $_POST['productType'];
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];

    $query = "INSERT INTO products(sku, name, price, productType, size, weight, height, width, length) VALUES('$sku', '$name', '$price', '$productType', '$size', '$weight', '$height', '$width', '$length')";
    $result = mysqli_query($connection,$query)or die(mysqli_error($connection));

    

    header("Location: index.php");
}

?>