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
	$SoDongHienThi = 6;
	if(isset($_GET['page']))
		$Trang = $_GET['page'];
	else
		$Trang=1;
	$rs=$KhachHang->GetListKhachHang($SoDongHienThi*($Trang-1),$SoDongHienThi);
	$numrows=$KhachHang->CountKhachHang();
	if($numrows%$SoDongHienThi==0)
		$numpages=$numrows/$SoDongHienThi;
	else
		$numpages=($numrows/$SoDongHienThi)+1;
	include_once("View/User/MenuLeft.php");
	include_once("View/User/QuanLy.php");
?>
		</div>
	</div>
</div>