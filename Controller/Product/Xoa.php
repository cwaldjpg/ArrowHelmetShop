<?php
	include_once("Model/Product.php");
	$product = new Product();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $product->DeleteProduct($id);
		if($rs > 0)
		{
			header("location:admin.php?mod=Product&act=QuanLy");
		}
	}
?>