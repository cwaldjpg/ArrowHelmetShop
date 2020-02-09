<div class="col-md-8">
  <div class="product-content-right">
    <div class="row">
      <div class="woocommerce">
        <form enctype="multipart/form-data" action="admin.php?mod=OrderItems&act=Sua&idHD=<?php echo $MaHD; ?>&id= <?php echo $MaCTHD; ?>" class="checkout" method="post" name="checkout">
          <div id="customer_details" class="col2-set">
            <div class="col-1">
              <div class="woocommerce-billing-fields">
                <h3>Chi tiết hóa đơn</h3>
                <p>
                  <label>Tên sản phẩm</label>
                  <input readonly type="text" name="txtTenSP" id="txtTenSP" class="input-text" value="<?php echo $row['TenSP'];?>">
                </p>
                <p>
                  <label>Số lượng</label>
                  <input type="text" name="txtSoLuong" id="txtSoLuong" class="input-text" value="<?php echo $row['SoLuong'];?>">
                </p>
                <p>
                  <label>Đơn giá</label>
                  <input readonly type="text" name="txtSoLuong" id="txtSoLuong" class="input-text" value="<?php echo $row['DonGia'];?>">
                </p>
                <p>
                  <input type="submit" name="btnChange" id="btnChange" value="Update" class="checkout-button button alt wc-forward" style="background: #ff4d4d">
                </p>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
