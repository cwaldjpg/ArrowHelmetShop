<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
<?php
	foreach ($rs as $r) {
        $gia=number_format($r['GiaBan'],0,",",",")."₫";
        $thuonghieu=$r['MaNSX'];
        if($r['HinhQC']!=NULL){
        echo <<<EDO
            <li>
            	<img src="img/{$r['HinhQC']}">
            	<div class="caption-group">
            		<h2 class="caption title">{$r['TenSP']}</h2>
            		<h4 class="caption subtitle">Loại nón: {$r['TenNSX']} | Giá: {$gia} </h4>
            		<a class="caption button-radius" href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">
            			<span class="icon"></span>Mua ngay
            		</a>
            	</div>
            </li>
EDO;
        }
	}
?>
        </ul>
    </div>
        <!-- ./Slider -->
</div> <!-- End slider area -->
