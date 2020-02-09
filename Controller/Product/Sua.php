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
	include_once("Model/Product.php");
	$product = new Product();
	include_once("Model/NhaSanXuat.php");
	$NhaSanXuat=new NhaSanXuat();
	$nsx = $NhaSanXuat->GetNSX();
	include_once("Model/Category.php");
	$Category=new Category();
	$cate = $Category->GetCategories();
	if(isset($_GET['id']))
	{
		$MaSP = $_GET['id'];
		$row = $product->GetProductByID($MaSP);
		include_once("View/Product/MenuLeft.php");
		include_once("View/Product/Sua.php");
		if(isset($_POST['btnChange']))
		{
			include("Model/Upload.php");
			$TenSP=$_POST["txtTenSP"];
			$MaLoai=$_POST["cboLoai"];
			$MaNSX=$_POST["cboNSX"];
			$MoTa=addslashes($_POST['txtMoTa']);
			$GiaBan=$_POST["txtGiaBan"];
			if(isset($_FILES["txtImageUrl"]))
				$Hinh = Upload::UploadImage("txtImageUrl","img");
			else $Hinh="";
			if(isset($_FILES["txtImageUrlQC"]))
				$HinhQC = Upload::UploadImage("txtImageUrlQC","img");
			else $HinhQC="";
			$ret=$product->UpdateProduct($MaSP,$MaLoai,$MaNSX,$TenSP,$MoTa,$GiaBan,$Hinh,$HinhQC);
			if($ret>0)
			{
				echo "<script>window.location ='admin.php?mod=Product&act=QuanLy'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
			
		}
	}
?>
		</div>
	</div>
</div>