<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>SẢN PHẨM</h2>
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
	include_once("Model/Product.php");
	$Product = new Product();
	$SoDongHienThi = 6;
	if(isset($_GET['page']))
		$Trang = $_GET['page'];
	else
		$Trang=1;
	$rs=$Product->GetProducts($SoDongHienThi*($Trang-1),$SoDongHienThi);
	$numrows=$Product->CountProduct();
	if($numrows%$SoDongHienThi==0)
		$numpages=$numrows/$SoDongHienThi;
	else
		$numpages=($numrows/$SoDongHienThi)+1;
	include_once("View/Product/MenuLeft.php");
	include_once("View/Product/QuanLy.php");
?>
		</div>
	</div>
</div>