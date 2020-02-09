<div class="col-md-4">
    <div class="single-sidebar">
        <h2 class="sidebar-title">Những sản phẩm khác</h2>
<?php 
    foreach ($rs as $r) {
        $hinh="img/".$r["Hinh"];
        $gia=number_format($r["GiaBan"],0,',',',')."₫";
        echo <<<EDO
        <div class="thubmnail-recent">
            <img src="{$hinh}" class="recent-thumb" alt="">
            <h2><a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">{$r['TenSP']}</a></h2>
            <div class="product-sidebar-price">
                <ins>{$gia}</ins>
            </div>
        </div>
EDO;
    }
?>
    </div>
</div>  