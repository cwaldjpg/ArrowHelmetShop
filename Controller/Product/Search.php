<?php
$tensp=$_POST["txtsearch"];	
include_once "Model/Product.php";
$da = new Product();
$rs=$da->SearchProduct($tensp);
include_once("View/Product/SearchResult.php");
?>
