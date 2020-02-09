<?php
	include_once("Model/Product.php");
	$Product = new Product();
	$SoDongHienThi = 12;
	if(isset($_GET['page']))
		$Trang = $_GET['page'];
	else
		$Trang=1;
	if(isset($_GET['MaNSX']))
	{
		$MaNSX = $_GET['MaNSX'];
		$rs=$Product->GetProductByNSX($MaNSX,$SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Product->CountProductByNSX($MaNSX);
	}
	else
	{		
		$rs=$Product->GetProducts($SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Product->CountProduct();
	}
	if($numrows%$SoDongHienThi==0)
		$numpages=$numrows/$SoDongHienThi;
	else
		$numpages=($numrows/$SoDongHienThi)+1;
	include_once("View/Product/DanhSach.php");
?>