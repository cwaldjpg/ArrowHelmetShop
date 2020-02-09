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
	if(isset($_GET['id']))
	{
		$MaHD = $_GET['id'];
		$row = $Order->GetOrderByID($MaHD);
		include_once("View/Order/MenuLeft.php");
		include_once("View/Order/Sua.php");
		if(isset($_POST['btnChange']))
		{
			$NoiGiao=$_POST["txtNoiGiao"];
			$TinhTrang=$_POST["cboTinhTrang"];
			$ret=$Order->UpdateOrder($MaHD,$NoiGiao,$TinhTrang);
			if($ret>0)
			{
				echo "<script>window.location ='admin.php?mod=Order&act=QuanLy'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
			
		}
	}
?>
		</div>
	</div>
</div>
