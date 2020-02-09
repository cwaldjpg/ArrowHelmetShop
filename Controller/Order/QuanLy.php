<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>HÓA ĐƠN</h2>
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
	include_once("Model/Order.php");
	$Order = new Order();
	$SoDongHienThi = 10;
	if(isset($_GET['id']))
	{
		$MaTinhTrang = $_GET['id'];
		if(isset($_GET['page']))
			$Trang = $_GET['page'];
		else
			$Trang=1;
		$rs=$Order->GetOrderByStatus($MaTinhTrang,$SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Order->CountOrderByStatus($MaTinhTrang);
		if($numrows%$SoDongHienThi==0)
			$numpages=$numrows/$SoDongHienThi;
		else
			$numpages=($numrows/$SoDongHienThi)+1;
	}
	else
	{		
		if(isset($_GET['page']))
			$Trang = $_GET['page'];
		else
			$Trang=1;
		$rs=$Order->GetOrders($SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Order->CountOrder();
		if($numrows%$SoDongHienThi==0)
			$numpages=$numrows/$SoDongHienThi;
		else
			$numpages=($numrows/$SoDongHienThi)+1;
	}
	include_once("View/Order/MenuLeft.php");
	include_once("View/Order/QuanLy.php");
?>
		</div>
	</div>
</div>