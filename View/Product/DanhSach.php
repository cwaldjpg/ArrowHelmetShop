<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>CỬA HÀNG</h2>
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

foreach($rs as $r)
{
	$gia = number_format($r['GiaBan'],0,",",",")."₫";
	$chuoixuat = <<<EOD
			<div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                      	<img src="img/{$r['Hinh']}" alt="">
                    </div>
                    <h2><a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">{$r['TenSP']}</a></h2>
                    <div class="product-carousel-price">
                        <ins>{$gia}</ins>
                    </div>  
                        
                    <div class="product-option-shop">
               	        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">Chi Tiết</a>
           	        </div>                       
                </div>
            </div>
EOD;
	echo $chuoixuat;
}
?>
		</div>
		<div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                     	<ul class="pagination">
<?php
	if(isset($MaLoai))
		$idCate="&MaLoai=".$MaLoai;
	else
		$idCate="";
	if(isset($MaNSX))
		$idNSX="&MaNSX=".$MaNSX;
	else
		$idNSX="";
	if(isset($numpages))
	{
		for($i=1;$i<=$numpages;$i++)
		{	
			if($Trang == $i)
				echo "<li><a href='?mod=Product&act=DanhSach$idCate$idNSX&page=$i'><b>$i</b></a></li>";
			else
				echo "<li><a href='?mod=Product&act=DanhSach$idCate$idNSX&page=$i'>$i</a></li>";
		}
	}
?>
                        </ul>
                    </nav>                        
                </div>
            </div>
        </div>
    </div>
</div>

