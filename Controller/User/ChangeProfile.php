<?php
include_once("Model/KhachHang.php");
$da = new KhachHang();
$change=""; $ten=""; $diachi=""; $dienthoai="";
if(isset($_POST["change"]))
{
	
	$user=$_SESSION["user"];
	$ten=$_POST["ten"];
	$diachi=$_POST["diachi"];
	$dienthoai=$_POST["dienthoai"];
	{    
    		
		
		$kq=$da->UpdateProfile($user,$ten,$dienthoai,$diachi);
		if(!$kq)
		{
			echo "<script>alert('Có lỗi SQL! Nhập lại!');</script>";		
		}
		else 
		{
			$_SESSION['hoten']=$ten;
			echo "<script>alert('Quý khách đã thay đổi thông tin cá nhân thành công!');window.location='index.php?mod=User&act=Profile';</script>";
		}	
	}
}
?>

<?php
$user=$_SESSION["user"];;
$r=$da->GetKhachHangByEmail($user);
$ten=$r["TenKH"];$diachi=$r["DiaChi"];$dienthoai=$r["SoDienThoai"];
include_once("View/User/ChangeProfile.php");
?>
