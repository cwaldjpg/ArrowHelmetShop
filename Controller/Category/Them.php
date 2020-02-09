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
	$Loai=new Category();
	include_once("View/Category/MenuLeft.php");
	include_once("View/Category/Them.php");
		if(isset($_POST['btnSave']))
		{
			include("Model/Upload.php");
			$TenLoai=$_POST["txtTenLoai"];
			if($TenLoai!="")
			{	
				$ret=$Loai->InsertCategory($TenLoai);
				if($ret>0)
					echo "<script>window.location ='admin.php?mod=Category&act=QuanLy'</script>";
				else
					echo "<p class=\"error\">Thêm bị lỗi</p>";
			}
			else
			{
				echo "<p>Vui lòng nhập tên</p>";
			}
		}
?>
		</div>
	</div>
</div>