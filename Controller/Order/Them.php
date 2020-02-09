<?php
	include_once("Model/Order.php");
	include_once("Model/OrderItem.php");
	include_once("Model/Product.php");
	$product = new Product();
	$Order = new Order();
	$OrderItem = new OrderItem();
	if(isset($_SESSION['MaKH']))
	{
		$MaKH = $_SESSION['MaKH'];
		$TenKH = $_SESSION['hoten'];
		include_once("View/Order/Them.php");
		if(isset($_POST['btnChange']))
		{
			
			$NoiGiao=$_POST["txtNoiGiao"];
			$idHD=$Order->InsertOrder($MaKH,$NoiGiao);
			foreach($_SESSION["MyCart"] as $key=>$val)
			{
				$row=$product->GetProductByID($key);
				$DonGia = $row['GiaBan'];
				$ret=$OrderItem->InsertOrderItem($idHD,$key,$val,$DonGia);
			}
			$ret=$Order->UpdateTongTien($idHD);
			echo "<script type=\"text/javascript\">alert('Đã đặt hàng thành công, xem lịch sử mua hàng để kiểm tra!');window.location='index.php';</script>";
		}
	}
?>
