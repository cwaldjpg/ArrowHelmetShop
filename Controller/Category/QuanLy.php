<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>LOẠI NÓN</h2>
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
	include_once("Model/Category.php");
	$Loai = new Category();
	$SoDongHienThi = 10;
	if(isset($_GET['page']))
		$Trang = $_GET['page'];
	else
		$Trang=1;
	$rs=$Loai->GetListCategories($SoDongHienThi*($Trang-1),$SoDongHienThi);
	$numrows=$Loai->CountCategory();
	if($numrows%$SoDongHienThi==0)
		$numpages=$numrows/$SoDongHienThi;
	else
		$numpages=($numrows/$SoDongHienThi)+1;
	include_once("View/Category/MenuLeft.php");
	include_once("View/Category/QuanLy.php");
?>
		</div>
	</div>
</div>