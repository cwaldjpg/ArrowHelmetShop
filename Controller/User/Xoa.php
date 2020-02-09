<?php
	include_once("Model/KhachHang.php");
	$KhachHang = new KhachHang();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $KhachHang->DeleteKhachHang($id);
		if($rs > 0)
		{
			header("location:admin.php?mod=User&act=QuanLy");
		}
	}
?>