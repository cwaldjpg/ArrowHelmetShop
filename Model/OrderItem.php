<?php
include_once("DataProvider.php");
include_once("Product.php");
class OrderItem
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertOrderItem($MaHD,$MaSP,$SoLuong,$DonGia)
	{
		$sql="Insert into chitiethoadon(MaHD,MaSP,SoLuong,DonGia) values($MaHD,$MaSP,$SoLuong,$DonGia)";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteOrderItem($MaHD)
	{
		$sql="Delete from chitiethoadon where MaHD=$MaHD";
		return $this->da->ExecuteQuery($sql);
	}
	function GetOrderItemByOrder($MaHD,$start,$limit)
	{
		$sql="Select chitiethoadon.*,sanpham.TenSP from chitiethoadon,sanpham where chitiethoadon.MaSP=sanpham.MaSP and MaHD=$MaHD  order by MaCTHD desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetAllOrderItemByOrder($MaHD)
	{
		$sql="Select * from chitiethoadon where MaHD=$MaHD";
		return $this->da->FetchAll($sql);
	}
	function CoutOrderItemByOrder($id)
	{
		$sql="Select MaCTHD from chitiethoadon where MaHD=$id";
		return $this->da->NumRows($sql);
	}
	function GetOrderItemByID($id)
	{
		$sql="Select chitiethoadon.*,sanpham.TenSP from chitiethoadon,sanpham where chitiethoadon.MaSP=sanpham.MaSP and MaCTHD=$id";
		return $this->da->Fetch($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>