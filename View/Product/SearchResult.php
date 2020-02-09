<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                	<h2>KẾT QUẢ TÌM KIẾM: 
<?php
	if(isset($tensp))
	  	echo $tensp; 
	else
	 	echo ""; 	
?>
                    </h2>
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
	if($rs==null)
	{
		echo "<div style='font-size:18px; font-weight:bolder; line-height:35px; color:black' align='center'>Không tìm thấy sản phẩm phù hợp</div>";
	}
	else
	{
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
	}
?>
		</div>
	</div>
</div>