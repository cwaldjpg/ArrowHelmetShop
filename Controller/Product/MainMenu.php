<?php 
include_once("Model/Product.php");
$Product = new Product();
$rs=$Product->GetProductByHinhQC();
include_once("View/Product/MainByHinhQC.php");
?> <!-- Hiện thị những sản phẩm có ảnh quảng cáo -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>Phương thức đổi trả <hr width="50%"> Hỗ trợ đổi size nón trong vòng 3 ngày kể từ ngày nhận hàng</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-truck"></i>
                    <p>Giao hàng trên toàn quốc <hr width="50%"> Freeship hóa đơn từ 1.000.000VND</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-comments"></i>
                    <p>Hỗ trợ trực tuyến <hr width="50%">Luôn sẵn sàng hỗ trợ<br>Mọi thắc mắc vui lòng liên hệ</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-gift"></i>
                    <p>Quà tặng ưu đãi</p>
                </div>
          	</div>
       	</div>
    </div>
</div> <!-- End promo area -->

<?php
$rs=$Product->GetProductByRandom();
include_once("View/Product/MainByRandom.php");
// Hiển thị ngẫu nhiên sản phẩm

$rs=$Product->GetProductByLuotXem();
include_once("View/Product/MainByLuotXem.php");
// Hiển thị 3 sản phẩm có lượt xem cao nhất
?>