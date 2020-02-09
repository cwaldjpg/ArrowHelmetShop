<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>SẢN PHẨM</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
     <div class="container">
        <div class="row">
<?php
	include_once "Model/Product.php";
	include_once "Model/Cart.php";
	$da = new Product();
	//session_destroy();
	if(isset($_POST["dathang"]))
	{
		$id = $_GET["MaSP"];	
		if(isset($_SESSION['user']))
		{				
			
			if(Cart::IsExist($id))
			{	echo "<script>alert('Sản phẩm này đã có trong giỏ hàng!'); </script>";	

			}
			else
			{
				Cart::InsertCart($id);
				echo "<script>alert('Đã thêm sản phẩm vào giỏ hàng!');window.location ='index.php?mod=Product&act=ChiTiet&MaSP=$id'</script>";	
			}
		}
	}
	$rs=$da->GetProductByRandom();
	include_once("View/Product/ChiTietByRandom.php");
	$id=$_GET["MaSP"];
	$r=$da->GetProductByID($id);
	
	$tensp=$r["TenSP"];
	$mansx=$r["MaNSX"]; $tennxs=$r["TenNSX"];
	$hinh="img/".$r["Hinh"];$gia=number_format($r["GiaBan"],0,',',',')."₫";
	$maloai=$r["MaLoai"]; $tenloai=$r["TenLoai"];
	$luotxem=$r['LuotXem'];
	$input=$da->UpdateView($id,$luotxem);
	$mota=$r["MoTa"];
	include_once("View/Product/ChiTiet.php");

	$rs=$da->GetSameProduct($id,$maloai,$mansx);
	if($rs==0) echo"Chưa tìm thấy sản phẩm cùng loại nào";			
	else include_once("View/Product/ChiTietCungLoai.php"); 
?>
		</div>
    </div>
</div>