<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Những sản phẩm khác</h2>
                        <div class="product-carousel">
<?php
	foreach ($rs as $r) {
		$masp=$r['MaSP'];
        $ten=$r['TenSP'];
        $gia=number_format($r['GiaBan'],0,",",",")."₫";
        $thuonghieu=$r['MaNSX'];
        echo <<<EDO
    	<div class="single-product">
            <div class="product-f-image">
    	        <img src='img/{$r["Hinh"]}'>
                <div class="product-hover">
                    <a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}" class="view-details-link"><i class="fa fa-link"></i> Chi tiết</a>
                </div>
            </div>
            <h2><a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">{$r['TenSP']}</a></h2>
            <div class="product-carousel-price">
                <ins>{$gia}</ins>
            </div>
        </div>
EDO;
	}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->