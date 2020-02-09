<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>LOẠI NÓN</h2>
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
	include_once("Model/Category.php");
	$Loai = new Category();
	if(isset($_GET['id']))
	{
		$MaLoai = $_GET['id'];
		$row = $Loai->GetCategoryByID($MaLoai);
		include_once("View/Category/MenuLeft.php");
		include_once("View/Category/Sua.php");
		if(isset($_POST['btnChange']))
		{
			$TenLoai=$_POST["txtTenLoai"];
			$ret=$Loai->UpdateCategory($MaLoai,$TenLoai);
			if($ret>0)
			{
				echo "<script>window.location ='admin.php?mod=Category&act=QuanLy'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
		}
	}
?>
		</div>
	</div>
</div>
