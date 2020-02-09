<?php
	include_once("Model/Order.php");
	$Order = new Order();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $Order->DeleteOrder($id);
		if($rs > 0)
		{
			header("location:admin.php?mod=Order&act=QuanLy");
		}
	}
?>