<div class="product-widget-area">
  <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="single-product-widget">
            <h2 class="product-wid-title" style="font-family: 'Courier New', Courier, monospace;">SP nổi bật</h2>
            <a href="shop.php" class="wid-view-more">View All</a>
<?php
	foreach ($rs as $r) {
		$masp=$r['MaSP'];
    $tien=number_format($r['GiaBan'],0,',',',')."₫";
    echo <<<EDO
      <div class="single-wid-product">
        <a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}"><img src="img/{$r['Hinh']}" alt="" class="product-thumb"></a>
        <h2><a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">{$r['TenSP']}</a></h2>
        <div class="product-wid-rating">Lượt xem: {$r['LuotXem']}</div>
        <div class="product-wid-price">
          <ins>{$tien}</ins>
        </div>                            
      </div>
EDO;
	}
?>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End product widget area -->