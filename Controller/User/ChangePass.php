<?php
include_once("Model/KhachHang.php");
$da = new KhachHang();
$email=$_SESSION['user'];
$db_user=$email;
?>
<?php
if(isset($_POST["change_pw"])){	
	
//$idkey=EncodeSpecialChar($email);
	$r=$da->GetKhachHangByEmail($email);
	$db_matkhau=$r["Pass"]; 	  
	
	$newpw=$_POST['pw'];
	
	
	$pw_old=($_POST['pw_old']);
	$pww_old=md5($pw_old);
	$repw=($_POST['cpw']);
		
	if(strlen($newpw)<6)
		echo "<script>alert('Mật khẩu mới phải lớn hơn 6 ký tự');</script>";
	else
	{
		if ($pww_old==$db_matkhau && $newpw==$repw)
		{
			$pww=md5($newpw);
			$rs_changepw = $da->ChangePW($email,$pww);
			echo "<script>alert('Đổi mật khẩu thành công.'); window.location='index.php';</script>";
		}
		else echo "<script>alert('Đổi mật khẩu thất bại! Mật khẩu cũ hoặc mật khẩu xác nhận không đúng'); window.history.go(-1);</script>";
	}
}
include_once("View/User/ChangePass.php");
?>

