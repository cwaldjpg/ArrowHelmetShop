<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">Hình</th>
                                        <th class="product-name">Sản phẩm </th>
                                        <th class="product-price">Giá </th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Thành tiền</th>
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
        $tien=number_format($row["GiaBan"],0);
        echo <<<EDO
            <tr class="cart_item">
                <td class="product-remove">
                    <a title="Bỏ sản phẩm" class="remove" href="index.php?mod=Cart&act=XuLyGioHang&Loai=Xoa&MaSP=$key" onclick="return confirm('Bạn có chắc muốn xóa không')">×</a>
                </td>
                <td class="product-thumbnail">
                    <a href="?mod=Product&act=ChiTiet&MaSP={$row['MaSP']}"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/{$row['Hinh']}"></a>
                </td>
                <td class="product-name">
                    <a href="">{$row['TenSP']}</a> 
                </td>
                <td class="product-price">
                    <span class="amount">{$tien}</span> 
                </td>
                <td class="product-quantity">
                    <a href='index.php?mod=cart&act=XuLyGioHang&Loai=Sub&Ma=$key' style='color:blue;'><b>-</b></a> 
                        $val 
                    <a href='index.php?mod=cart&act=XuLyGioHang&Loai=Add&Ma=$key' style='color:blue;'><b>+</b></a>
                </td>

                <td class="product-subtotal">
                    <span class="amount">{$tien1mon}</span> 
                </td>
            </tr>   
EDO;
    }   
?>
                                    <tr>
                                        <td colspan="2">TỔNG TIỀN</td>
                                        <td colspan="4"><?php echo number_format($sum,0);?></td>
                                    </tr>
                                    <tr>
                                        <td class="actions" colspan="6">
                                            <a href="index.php?mod=Order&act=Them"><input type="button" value="ĐẶT HÀNG" name="proceed" class="checkout-button button alt wc-forward" style="background: #ff4d4d"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>                        
                </div>                    
            </div>
        </div>
    </div>
</div>
