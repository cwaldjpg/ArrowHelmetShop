<div class="col-md-8">
    <div class="product-content-right">
      <div class="row">
        <div class="woocommerce">
          <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">
            <div id="customer_details" class="col2-set">
              <div class="col-1">
                <div class="woocommerce-billing-fields">
                <h3>Thông tin thành viên</h3>
                <p>
                  <label>IsAdmin</label>
                  <select name="cboIsAdmin">
<?php
                  if($row['IsAdmin']==0){
                    echo "<option value=\"0\" selected=\"selected\">No</option>";
                    echo "<option value=\"1\">Yes</option>";
                  }      
                  else{
                    echo "<option value=\"1\" selected=\"selected\">Yes</option>";
                    echo "<option value=\"0\">No</option>";
                  }
?>
                  </select>
                </p>
                <p>
                  <label>Tên thành viên</label>
                  <input type="text" name="txtTenKH" id="txtTenKH" class="input-text" value="<?php echo $row['TenKH'];?>">
                </p>
                <p>
                  <label>Số điện thoại</label>
                   <input type="text" name="txtSDT" id="txtSDT" class="input-text" value="<?php echo $row['SoDienThoai'];?>">
                </p>
                <p>
                  <label>Địa chỉ</label>
                  <input type="text" name="txtDiaChi" id="txtDiaChi" class="input-text" value="<?php echo $row['DiaChi'];?>">
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