<div class="col-md-8">
  <div class="product-content-right">
    <div class="row">
      <div class="woocommerce">
        <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">
          <div id="customer_details" class="col2-set">
            <div class="col-1">
              <div class="woocommerce-billing-fields">
                <h3>Thông tin hóa đơn</h3>
                <p>
                  <select name="cboTinhTrang">
<?php
                  echo "<option value=\"1\" >Đã giao</option>";
                  if($row['TinhTrang']=="Chưa giao")
                    echo "<option value=\"2\" selected=\"selected\" >$row[TinhTrang]</option>";
                  else
                    echo "<option value=\"2\" >Chưa giao</option>";
                  if($row['TinhTrang']=="Đang giao")
                    echo "<option value=\"3\" selected=\"selected\" >$row[TinhTrang]</option>";
                  else
                    echo "<option value=\"3\" >Đang giao</option>";
                  if($row['TinhTrang']=="Đã hủy")
                    echo "<option value=\"4\" selected=\"selected\" >$row[TinhTrang]</option>";
                  else
                    echo "<option value=\"4\" >Đã hủy</option>";  
?>
                  </select>
                </p>
                <p>
                  <label>Tên khách hàng</label>
                  <input type="text" name="txtTenKH" id="txtTenKH" class="input-text" value="<?php echo $row['TenKH'];?>">
                </p>
                <p>
                  <label>Nơi giao</label>
                  <input type="text" name="txtNoiGiao" id="txtNoiGiao" class="input-text" value="<?php echo $row['NoiGiao'];?>">
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