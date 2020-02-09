<?php
	include_once("Model/KhachHang.php");
	$KhachHang = new KhachHang();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$pass=md5("123456");
		$rs = $KhachHang->ResetPass($id,$pass);
		if($rs > 0)
		{
			echo "<script>alert('Đã reset thành công');window.location='admin.php?mod=User&act=QuanLy';</script>";
		}
	}
?>