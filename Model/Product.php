<?php
include_once("DataProvider.php");
class Product
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}

	function InsertProduct($MaLoai,$MaNSX,$TenSP,$MoTa,$GiaBan,$Hinh,$HinhQC)
	{
		$sql="Insert into sanpham(MaLoai,MaNSX,TenSP,MoTa,GiaBan,Hinh,HinhQC) values ($MaLoai,$MaNSX,'$TenSP','$MoTa',$GiaBan,'$Hinh','$HinhQC')";
		return $this->da->ExecuteQuery($sql);
	}

	function DeleteProduct($MaSP)
	{
		$sql = "Delete from sanpham where MaSP=$MaSP";
		return $this->da->ExecuteQuery($sql);
	}

	function UpdateProduct($MaSP,$MaLoai,$MaNSX,$TenSP,$MoTa,$GiaBan,$Hinh,$HinhQC)
	{
		if($Hinh=="")
		{
			$sql="Update sanpham set TenSP='$TenSP',MaLoai=$MaLoai,MaNSX=$MaNSX,GiaBan=$GiaBan,MoTa='$MoTa', HinhQC='$HinhQC' where MaSP=$MaSP";
			
		}else
		{
			$sql="Update sanpham set TenSP='$TenSP',MaLoai=$MaLoai,MaNSX=$MaNSX,GiaBan=$GiaBan,MoTa='$MoTa',Hinh='$Hinh', HinhQC='$HinhQC' where MaSP=$MaSP";
		}
		return $this->da->ExecuteQuery($sql);
	}

	function UpdateView($MaSP,$luotxem_old)
	{	
		$sql="update sanpham set LuotXem = ($luotxem_old + 1) where MaSP='$MaSP'";
		return $this->da->ExecuteQuery($sql);
	}

	function GetProductByNSX($id,$start,$limit)
	{
		$sql="Select sanpham.*,nhasanxuat.*,loaisanpham.* from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai and sanpham.MaNSX=$id order by sanpham.MaSP desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}

	function GetProductByID($id)
	{
		$sql="select sanpham.*,loaisanpham.*,nhasanxuat.* from sanpham,loaisanpham,nhasanxuat where sanpham.MaLoai=loaisanpham.MaLoai AND sanpham.MaNSX=nhasanxuat.MaNSX  AND MaSP=$id";
		return $this->da->Fetch($sql);
	}

	function GetSameProduct($id,$ml,$mansx)
	{
		$sql = "select sanpham.* from sanpham where sanpham.MaNSX=$mansx and sanpham.MaLoai='$ml' and sanpham.MaSP<>'$id' order by rand() limit 0,27";
		return $this->da->FetchAll($sql);
	}

	function GetProducts($start,$limit)
	{
		$sql="Select sanpham.*,nhasanxuat.TenNSX,loaisanpham.TenLoai from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai order by sanpham.MaSP desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetProductByHinhQC()
	{
		$sql="Select * from sanpham,nhasanxuat where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.HinhQC IS NOT NULL order by RAND() LIMIT 4";
		return $this->da->FetchAll($sql);
	}
	function GetProductByRandom()
	{
		$sql="select * from sanpham order by RAND() LIMIT 6";
		return $this->da->FetchAll($sql);
	}
	function GetProductByLuotXem()
	{
		$sql="select * from sanpham order by Luotxem desc LIMIT 3";
		return $this->da->FetchAll($sql);
	}

	function CountProduct()
	{
		$sql="Select MaSP from sanpham";
		return $this->da->NumRows($sql);
	}

	function CountProductByNSX($id)
	{
		$sql="Select MaSP from sanpham where MaNSX=$id";
		return $this->da->NumRows($sql);
	}

	function SearchProduct($name)
	{
		$sql = "Select * from sanpham where TenSP like '%$name%'";
		return $this->da->FetchAll($sql);
	}

	function __destruct()
	{
		unset($this->da);
	}
}
?>