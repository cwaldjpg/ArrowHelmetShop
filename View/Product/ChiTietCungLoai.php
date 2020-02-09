<div class="related-products-wrapper">
    <h2 class="related-products-title">Sản phẩm liên quan</h2>
    <div class="related-products-carousel">
        <?php
            foreach ($rs as $r) {
                $gia=number_format($r["GiaBan"],0,',',',')."₫";
                $hinh="img/".$r["Hinh"];
                echo <<<EDO
        <div class="single-product">
            <div class="product-f-image">
                <img src="{$hinh}" alt="">
                <div class="product-hover">
                    <a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
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