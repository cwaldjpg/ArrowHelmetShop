<?php
include_once("Model/KhachHang.php");
$da = new KhachHang();
$email=$_SESSION["user"];
$r=$da->GetKhachHangByEmail($email);
$ten=$r["TenKH"];$diachi=$r["DiaChi"];$dienthoai=$r["SoDienThoai"];
include_once("View/User/Profile.php");
?>
