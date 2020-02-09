<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>CHI TIẾT HÓA ĐƠN</h2>
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
	include_once("Model/OrderItem.php");
	$OrderItem = new OrderItem();
	$SoDongHienThi = 10;
	if(isset($_GET['id']))
	{
		$MaHD = $_GET['id'];
		if(isset($_GET['page']))
			$Trang = $_GET['page'];
		else
			$Trang=1;
		$rs=$OrderItem->GetOrderItemByOrder($MaHD,$SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$OrderItem->CoutOrderItemByOrder($MaHD);
		if($numrows%$SoDongHienThi==0)
			$numpages=$numrows/$SoDongHienThi;
		else
			$numpages=($numrows/$SoDongHienThi)+1;
	}
	include_once("View/OrderItems/MenuLeft.php");
	include_once("View/OrderItems/QuanLy.php");
?>
		</div>
	</div>
</div>