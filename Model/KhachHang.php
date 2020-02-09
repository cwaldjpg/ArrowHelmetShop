<?php
include_once("DataProvider.php");
class KhachHang
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	
	function InsertKhachHang($TenKH,$SoDienThoai,$DiaChi,$Email,$Pass,$IsAdmin)
	{
		$sql="Insert into khachhang(TenKH,SoDienThoai,DiaChi,Email,Pass,IsAdmin) values('$TenKH','$SoDienThoai','$DiaChi','$Email','$Pass',$IsAdmin)";	
		return $this->da->ExecuteQueryInsert($sql);
	}
	function UpdateProfile($email,$ten,$dienthoai,$diachi)
	{
		$sql="update khachhang set TenKH='$ten',SoDienThoai='$dienthoai',DiaChi='$diachi' where Email='$email'";		
		return $this->da->ExecuteQuery($sql);
	}

	function UpdateKhachHang($id,$TenKH,$SoDienThoai,$DiaChi,$IsAdmin)
	{
		$sql="Update khachhang set TenKH='$TenKH',SoDienThoai=$SoDienThoai,DiaChi='$DiaChi',IsAdmin=$IsAdmin where MaKH=$id";		
		return $this->da->ExecuteQuery($sql);
	}
	function ResetPass($id,$pass)
	{
		$sql="Update khachhang set Pass='$pass' where MaKH=$id";		
		return $this->da->ExecuteQuery($sql);
	}
	
	function DeleteKhachHang($id)
	{
		$sql="Delete from khachhang where MaKH=$id";
		return $this->da->ExecuteQuery($sql);
	}
	
	function ChangePW($Email,$pw)
	{
		$sql="update khachhang set Pass='$pw' WHERE Email='$Email'";		
		return $this->da->ExecuteQuery($sql);
	}
	
	function GetKhachHangByID($id)
	{
		$sql="Select * from khachhang where MaKH=$id";
		return $this->da->Fetch($sql);
	}
	function DangNhap($Email,$pass)
	{
		$sql="select * from khachhang where Email='$Email' and Pass='$pass'";
		return $this->da->Fetch($sql);
	}
	function GetKhachHangByEmail($Email)
	{
		$sql="Select * from khachhang where Email='$Email'";
		return $this->da->Fetch($sql);
	}
	function GetListKhachHang($start,$limit)
	{
		$sql="Select * from khachhang order by MaKH desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function CountKhachHang()
	{
		$sql="Select MaKH from khachhang";
		return $this->da->NumRows($sql);
	}
	function CountKhachHangByEmail($Email)
	{
		$sql="Select MaKH from khachhang where Email='$Email'";
		return $this->da->NumRows($sql);
	}
	function KiemTraDangNhap($user,$pass)
	{
		$sql="select * from khachhang where Email='$user' and Pass='$pass'";
		return $this->da->NumRows($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>
