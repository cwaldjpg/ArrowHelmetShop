<div class="col-md-8">
    <div class="product-content-right">
      <div class="row">
        <div class="woocommerce">
          <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">
            <div id="customer_details" class="col2-set">
              <div class="col-1">
                <div class="woocommerce-billing-fields">
                  <h3>Thêm sản phẩm</h3>
                  <p>
                    <label>Tên sản phẩm <abbr title="required" class="required">*</abbr></label>
                    <input type="text" name="txtTenSP" id="txtTenSP" class="input-text" required>
                  </p>
                  <p>
                    <label>Mã nón</label>
                    <select name="cboLoai">
<?php
                      foreach($cate as $rowmanu)
                      {
                        echo "<option value=".$rowmanu['MaLoai'].">".$rowmanu['TenLoai']."</option>";
                      }
?>
                    </select>
                  </p>
                  <p>
                    <label>Loại nón</label>
                    <select name="cboNSX">
<?php
                      foreach($nsx as $rowmanu)
                      {
                        echo "<option value=".$rowmanu['MaNSX'].">".$rowmanu['TenNSX']."</option>";
                      }
?>
                    </select>
                  </p>
                  <p>
                    <label>Mô tả</label>
                    <textarea name="txtMoTa" id="txtMoTa" cols="27" rows="7"  style="width:370px"></textarea>
                  </p>
                  <p>
                    <label>Giá bán</label>
                    <input type="text" name="txtGiaBan" id="txtGiaBan" />
                  </p>
                  <p>
                    <label>Hình</label>
                    <input type="file" name="txtImageUrl" id="txtImageUrl"/>
                  </p>
                  <p>
                    <label>Hình quảng cáo</label>
                    <input type="file" name="txtImageUrlQC" id="txtImageUrlQC"/>
                  </p>
                  <p>
                    <input type="submit" name="btnSave" id="btnSave" value="Insert" class="checkout-button button alt wc-forward" style="background: #ff4d4d">
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