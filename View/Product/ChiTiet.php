<div class="col-md-8">
    <div class="product-content-right">
        <div class="product-breadcroumb">
            <a href="index.php">Home</a>
            <a href="?mod=Product&act=DanhSach">Shop</a>
            <a href="?mod=Product&act=DanhSach&MaNSX=<?php echo $mansx ?>"><?php echo $tennxs; ?></a>
            <a href=""><?php echo $tensp; ?></a>
        </div>   
        <div class="row">
            <div class="col-sm-6">
                <div class="product-images">
                    <div class="product-main-img">
                        <img src="<?php echo $hinh ?>" class="zoom" style="background: white; width: 250px;
  height: 250px; padding: 20px;">                  
                    </div>
                </div>
            </div>
                            
            <div class="col-sm-6">
                <div class="product-inner">
                    <h2 class="product-name"> <?php echo $tensp; ?> </h2>
                    <div class="product-inner-price">
                        <ins id="price"> <?php echo $gia; ?> </ins>
                    </div>    
                                    
                    <form method="post" name="form">
                        <input type="hidden" name="dathang" />
<?php 
    if(isset($_SESSION["user"]))
    {
        echo"<button class='add_to_cart_button' type='submit'>Thêm vào giỏ</button>";
    }
    else
        echo "<div><b>Vui lòng đăng nhập để đặt hàng</b></div>";
?>
                    </form> 
                    <br>     
                    <div role="tabpanel">
                        <ul class="product-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Chi tiết</a></li>
                        </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <?php echo $mota; ?>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <h2>Đánh giá</h2>
                            <div class="submit-review">
                                <p><label for="name">Họ tên</label> <input name="name" type="text"></p>
                                <p><label for="email">Email</label> <input name="email" type="email"></p>
                                <div class="rating-chooser">
                                    <p>Tỉ lệ của bạn</p>
                                    <div class="rating-wrap-post">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p><label for="review">Đánh giá của bạn</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                <p><input type="submit" value="Submit"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>