<div class="product-big-title-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="product-bit-title text-center">
          <h2>THANH TOÁN</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="single-product-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="product-content-right">
          <div class="woocommerce">
            <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">
              <div id="customer_details" class="col2-set">
                <div class="col-1">
                  <div class="woocommerce-billing-fields">
                    <h3>Hóa đơn chi tiết</h3>
                    <p id="billing_full_name_field" class="form-row form-row-first validate-required">
                      <label class="" for="billing_full_name">Họ tên <abbr title="required" class="required">*</abbr></label>
                      <input type="text" name="txtTenKH" id="txtTenKH" value="<?php echo $TenKH;?>" class="input-text" required>
                    </p>
                    <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                      <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr></label>
                      <input type="text" placeholder="Ví dụ: 280 An Dương Vương, Phường 4, Quận 5" name="txtNoiGiao" id="txtNoiGiao" class="input-text" required>
                    </p>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <h3 id="order_review_heading" style="color: #ff4d4d">THÔNG TIN SẢN PHẨM</h3>
              <div id="order_review" style="position: relative;">
                <table class="shop_table">
                  <thead>
                    <tr>
                      <th class="product-name">Sản phẩm</th>
                      <th class="product-total">Toàn Bộ</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
  $sum=0;
  foreach($_SESSION["MyCart"] as $key=>$val)
  {
    $sum1=0;
    $row=$product->GetProductByID($key);
    $sum1+=$val*$row["GiaBan"];
    $sum+=$sum1;
    $tien1mon=number_format($sum1,0);
    $tien=number_format($sum,0);
    echo <<<EDO
                    <tr class="cart_item">
                      <td class="product-name">{$row["TenSP"]}<strong class="product-quantity">× {$val}</strong></td>
                      <td class="product-total"><span class="amount">{$tien1mon}</span></td>
                    </tr>
EDO;
  }
  echo <<<EDO

EDO;
?>
                  </tbody>
                  <tfoot>
                    <tr class="order-total">
                      <th>Tổng cộng</th>
                      <td><strong><span class="amount"><?php echo $tien ?></span></strong> </td>
                    </tr>
                  </tfoot>
                </table>
                <div id="payment">
                  <div class="form-row place-order">
                    <input type="submit" data-value="Place order" value="THANH TOÁN" name="btnChange" id="btnChange" class="button alt">
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>