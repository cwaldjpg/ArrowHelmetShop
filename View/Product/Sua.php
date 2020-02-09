<div class="col-md-8">
    <div class="product-content-right">
      <div class="row">
        <div class="woocommerce">
          <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">
            <div id="customer_details" class="col2-set">
              <div class="col-1">
                <div class="woocommerce-billing-fields">
                  <h3>Thông tin</h3>
                  <p>
                    <label>Tên sản phẩm <abbr title="required" class="required">*</abbr></label>
                    <input type="text" name="txtTenSP" id="txtTenSP" class="input-text" value="<?php echo $row['TenSP'];?>">
                  </p>
                  <p>
                    <label>Mã nón</label>
                    <select name="cboLoai">
<?php
                      foreach($cate as $rowmanu)
                      {
                        if($rowmanu['MaLoai']==$row['MaLoai'])
                        {
                        echo "<option value=\"$rowmanu[MaLoai]\" selected=\"selected\" >$rowmanu[TenLoai]</option>";
                        }
                        else
                        echo "<option value=\"$rowmanu[MaLoai]\" >$rowmanu[TenLoai]</option>";
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
                        if($rowmanu['MaNSX']==$row['MaNSX'])
                        {
                          echo "<option value=\"$rowmanu[MaNSX]\" selected=\"selected\" >$rowmanu[TenNSX]</option>";
                        }
                        else
                          echo "<option value=\"$rowmanu[MaNSX]\" >$rowmanu[TenNSX]</option>";
                      }
?>
                    </select>
                  </p>
                  <p>
                    <label>Mô tả</label>
                    <textarea name="txtMoTa" id="txtMoTa" cols="27" rows="7"  style="width:370px"><?php echo $row['MoTa']; ?></textarea>
                  </p>
                  <p>
                    <label>Giá bán</label>
                    <input type="text" name="txtGiaBan" id="txtGiaBan" value="<?php echo $row['GiaBan']; ?>" />
                  </p>
                  <p>
                    <label>Hình</label>
                    <img src="img/<?php echo $row['Hinh'] ?>">
                    <input type="file" name="txtImageUrl" id="txtImageUrl"/>
                  </p>
                  <p>
                    <label>Hình quảng cáo</label>
                    <img src="img/<?php echo $row['HinhQC'] ?>">
                    <input type="file" name="txtImageUrlQC" id="txtImageUrlQC"/>
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
