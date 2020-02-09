<?php
	include_once("Model/Category.php");
	$Loai = new Category();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $Loai->DeleteCategory($id);
		if($rs > 0)
		{
			header("location:admin.php?mod=Category&act=QuanLy");
		}
	}
?>