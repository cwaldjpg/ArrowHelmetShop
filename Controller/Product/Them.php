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
	include_once("View/Product/MenuLeft.php");
	include_once("View/Product/Them.php");
		if(isset($_POST['btnSave']))
		{
			include("Model/Upload.php");
			$TenSP=$_POST["txtTenSP"];
			$MaLoai=$_POST["cboLoai"];
			$MaNSX=$_POST["cboNSX"];
			$MoTa=addslashes($_POST['txtMoTa']);
			if(isset($_FILES["txtImageUrl"]))
				$Hinh = Upload::UploadImage("txtImageUrl","img");
			if(isset($_FILES["txtImageUrlQC"]))
				$HinhQC = Upload::UploadImage("txtImageUrlQC","img");
			else $HinhQC="";
			$GiaBan=$_POST["txtGiaBan"];
			if($Hinh!="")
			{	
				if(is_numeric($GiaBan))
				{
					$ret=$product->InsertProduct($MaLoai,$MaNSX,$TenSP,$MoTa,$GiaBan,$Hinh,$HinhQC);
					echo "<script>window.location ='admin.php?mod=Product&act=QuanLy'</script>";
				}
				else
				{
					echo "<p>Giá không hợp lệ</p>";
				}	
			}
			else
			{
				echo "<p>Vui lòng chọn file ảnh</p>";
			}
		}
?>
		</div>
	</div>
</div>