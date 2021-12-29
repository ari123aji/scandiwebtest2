<?php

require'connection.php';
if(isset($_POST["save"])){
    $sku = htmlspecialchars($_POST["sku"]);
    $name = htmlspecialchars($_POST["name"]);
    $price = htmlspecialchars($_POST["price"]);
    $productType = htmlspecialchars($_POST["productType"]);
    $size = htmlspecialchars($_POST["size"]);
    $weight = htmlspecialchars($_POST["weight"]);
    $height = htmlspecialchars($_POST["height"]);
    $width = htmlspecialchars($_POST["width"]);
    $length = htmlspecialchars($_POST["length"]);

    $query = "INSERT INTO product
        Values
    ('', '$sku', '$name', '$price', '$productType', '$size', '$weight', '$height', '$width', '$length')";
    mysqli_query($conn, $query);

    header("Location:index.php");
    return mysqli_affected_rows($conn);
}

?>