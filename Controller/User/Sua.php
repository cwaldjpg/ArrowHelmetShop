<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>USER</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
     <div class="container">
        <div class="row">
<?php
	include_once("Model/KhachHang.php");
	$KhachHang = new KhachHang();
	if(isset($_GET['id']))
	{
		$MaKH = $_GET['id'];
		$row = $KhachHang->GetKhachHangByID($MaKH);
		include_once("View/User/MenuLeft.php");
		include_once("View/User/Sua.php");
		if(isset($_POST['btnChange']))
		{
			$TenKH=$_POST["txtTenKH"];
			$SDT=$_POST["txtSDT"];
			$DiaChi=$_POST["txtDiaChi"];
			$IsAdmin=$_POST["cboIsAdmin"];
			$ret=$KhachHang->UpdateKhachHang($MaKH,$TenKH,$SDT,$DiaChi,$IsAdmin);
			if($ret>0)
			{
				echo "<script>window.location ='admin.php?mod=User&act=QuanLy'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
			
		}
	}
?>
		</div>
	</div>
</div>
