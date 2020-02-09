<?php
	include_once("Model/KhachHang.php");
	$da = new KhachHang();
//$act=""; $hoten=""; $diachi=""; $email="";$dienthoai="";$user="";;
if(!isset($_POST["email"]) && !isset($_POST["name"]) &&!isset($_POST["pass"]) &&!isset($_POST["cpass"]) 
	&&!isset($_POST["phonenum"]) && !isset($_POST["add"]))
	echo"<script>alert('Bạn phải điền đầy đủ thông tin!');window.history.go(-1);</script>";
else{
	$diachi=$_POST["add"];
	$email=$_POST["email"];
	$dienthoai=$_POST["phonenum"];
	$ten=$_POST["name"];
	$pass=($_POST["pass"]);
	$pass_md5=md5($pass);
	$cpass=($_POST["cpass"]);
	$r=$da->CountKhachHangByEmail($email);
			
	if($r!=0)
		echo"<script>alert('Email này đã được sử dụng. Vui lòng điền email khác!');window.history.go(-1);</script>";
	else
		{ 
		if($pass!=$cpass)
			echo"<script>alert('Mật khẩu xác nhận chưa đúng. Vui lòng kiểm tra lại!');window.history.go(-1);</script>";
		else{   

			$rs=$da->InsertKhachHang($ten,$dienthoai,$diachi,$email,$pass_md5,0);
			if($rs==0)
			{
				echo "<script>alert('Có lỗi SQL! Nhập lại!');</script>";		
			}
			else 
			{
				echo "<script>alert('Chúc mừng $email! Quý khách đã đăng ký thành công! ');window.location='index.php';</script>";
			}
		}
	}
}
?>