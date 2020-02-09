<?php
	if(!isset($_SESSION))
		session_start();
		unset($_SESSION["success"]);
		unset($_SESSION["user"]);
		unset($_SESSION["MyCart"]);
		echo "<script>alert('Đăng xuất thành công!');window.location='index.php';</script>";	
?>