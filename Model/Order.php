<?php
include_once("DataProvider.php");
include_once("OrderItem.php");
include_once("Product.php");
class Order
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	
	function InsertOrder($MaKH,$NoiGiao)
	{
		$sql="Insert into hoadon(MaKH,NgayDat,NoiGiao, TinhTrang) values('$MaKH',now(),'$NoiGiao',2)";
		return $this->da->ExecuteQueryInsert($sql);
	}
	function UpdateOrder($id,$NoiGiao,$TinhTrang)
	{
		$sql="Update hoadon set NoiGiao='$NoiGiao',TinhTrang=$TinhTrang where MaHD=$id";
		if($TinhTrang==1)
		{
			$item = new OrderItem();
			$row = $item->GetAllOrderItemByOrder($id);
			$Product = new Product();
			foreach($row as $rowCT)
			{
				$Product->UpdateSoLuongBan($rowCT['MaSP'],$rowCT['SoLuong']);
			}
		}
		return $this->da->ExecuteQuery($sql);
	}

	function DeleteOrder($MaHD)
	{
		$item = new OrderItem();
		$item->DeleteOrderItem($MaHD);
		$sql="Delete from hoadon where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	
	function GetOrders($start,$limit)
	{
		$sql="Select hoadon.*,khachhang.TenKH,khachhang.SoDienThoai from hoadon,khachhang where hoadon.MaKH=khachhang.MaKH order by NgayDat desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetOrderByStatus($id,$start,$limit)
	{
		$sql="Select hoadon.*,khachhang.TenKH,khachhang.SoDienThoai from hoadon,khachhang where hoadon.MaKH=khachhang.MaKH and TinhTrang=$id order by NgayDat desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetOrderByID($id)
	{
		$sql="Select hoadon.* ,khachhang.TenKH from hoadon,khachhang where hoadon.MaKH=khachhang.MaKH and hoadon.MaHD=$id";
		return $this->da->Fetch($sql);
	}
	function CountOrder()
	{
		$sql="Select MaHD from hoadon";
		return $this->da->NumRows($sql);
	}
	function CountOrderByStatus($id)
	{
		$sql="Select MaHD from hoadon where TinhTrang=$id";
		return $this->da->NumRows($sql);
	}
	function CountOrderByUserID($id)
	{
		$sql="Select MaHD from hoadon where MaKH=$id and (TinhTrang=1 or TinhTrang=2)";
		return $this->da->NumRows($sql);
	}
	function UpdateTongTien($MaHD)
	{
		$item = new OrderItem();
		$row=$item->GetAllOrderItemByOrder($MaHD);
		$Tong=0;
		foreach($row as $rowCT)
		{
			$Tong+=($rowCT['SoLuong']*$rowCT['DonGia']);
		}
		$sql="Update hoadon set TongTien=$Tong where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>
