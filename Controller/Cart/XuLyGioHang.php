<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>GIỎ HÀNG</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->
<?php
include_once("Model/Product.php");
include_once("Model/Cart.php");
$product = new Product();
if(isset($_SESSION['MyCart']))
{	
	if(isset($_GET['Loai']))
		switch($_GET['Loai'])
		{
			case "Xem":
				if(count ($_SESSION['MyCart'])!=0)
					include_once("View/Cart/Detail.php");
				else
					echo "<div style='font-size:18px; font-weight:bolder; line-height:35px; color:black' align='center'>Chưa có sản phẩm nào trong giỏ hàng</div>";
				break;
			case "Xoa":
				$masp = $_REQUEST['MaSP'];
				Cart::DeleteCart($masp);
				echo "Xóa thành công.";
				echo "<script>window.location ='index.php?mod=Cart&act=XuLyGioHang&Loai=Xem'</script>";
				break;
			case "Add":
				if(isset($_GET['Ma']))
				{
					$ma = $_GET['Ma'];
					$slg = $_SESSION["MyCart"][$ma];
					$slg++;
					Cart::UpdateCart($ma, $slg);
					echo "<script>window.location ='index.php?mod=Cart&act=XuLyGioHang&Loai=Xem'</script>";
				}
				break;
			case "Sub":
				if(isset( $_GET['Ma']))
				{
					$ma = $_GET['Ma'];
					$slg = $_SESSION["MyCart"][$ma];
					if($slg>1)
						$slg--;
					Cart::UpdateCart($ma, $slg);
					echo "<script>window.location ='index.php?mod=Cart&act=XuLyGioHang&Loai=Xem'</script>";
			}
			break;
		default: echo "<script>alert('Khong hợp lệ')</script>";
	}
}
?>