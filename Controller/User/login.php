<?php
	include_once("Model/KhachHang.php");
	$da = new KhachHang();
	if(!isset($_POST["user"])){	
		echo "<script>alert('Bạn chưa nhập Email');window.history.go(-1);</script>";
	}
	else 
	{
		$user=$_POST["user"];
		if (!isset($_POST["pass"])) {
			echo "<script>alert('Bạn chưa nhập mật khẩu');window.history.go(-1);</script>";
		}
		else
		{
			$pass=md5($_POST["pass"]);
			$n=$da->KiemTraDangNhap($user,$pass);
			if($n==0)
			{
				echo "<script>alert('Email hoặc mật khẩu bạn nhập không đúng!');window.history.go(-1);</script>";
			}	
			else 
			{	
					$kh=$da->DangNhap($user,$pass);
					if(!isset($_SESSION))
					session_start();
					$_SESSION["user"]=$user;
					$_SESSION["MaKH"]=$kh["MaKH"];
					$_SESSION["success"]=true;
					$_SESSION["hoten"]=$kh["TenKH"];						
					$_SESSION["quyen"]=$kh["IsAdmin"];
					$_SESSION["MyCart"] = array();
					if($kh["IsAdmin"]==1)
					echo"<script>alert('Chào mừng {$_SESSION['user']} đến với website chúng tôi');window.location='admin.php';</script>";
					else
					echo "<script>alert('Chào mừng {$_SESSION['user']} đến với website chúng tôi');window.location='index.php';</script>";
			}
		}
	}
?>	
