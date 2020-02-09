<div class="col-md-8">
    <div class="product-content-right">
    	<div class="row">
    		<table class="table table-dark table-hover">
              	<thead>
                	<tr>
	                  <th>Tên sản phẩm</th>
	                  <th>Loại</th>
	                  <th>Loại nón</th>
	                  <th>Giá</th>
	                  <th>Mô tả</th>
	                  <th>Hình</th>
	                  <th>Hình quảng cáo</th>
	                  <th>Xóa</th>
	                  <th>Sửa</th>
	                </tr>
	            </thead>
	            <tbody>
<?php
	foreach($rs as $row)
	{
		$gia=number_format($row['GiaBan'],0,",",",");
		$mota=$row["MoTa"];
		echo <<<EDO
					<tr>
						<td>{$row['TenSP']}</td>
						<td>{$row['TenLoai']}</td>
						<td>{$row['TenNSX']}</td>
						<td>{$gia}</td>
						<td><div onclick="alert('{$mota}')">Click Here</div></td>
						<td><img src="img/{$row['Hinh']}"></td>
						<td><img src="img/{$row['HinhQC']}" width="350px"></td>
						<td>
							<a href="admin.php?mod=Product&act=Xoa&id={$row['MaSP']}" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</a>
						</td>
						<td>
							<a href="admin.php?mod=Product&act=Sua&id={$row['MaSP']}">Sửa</a>
						</td>
					</tr>
EDO;
	}
?>
				</tbody>
			</table>
		</div>
		<div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                     	<ul class="pagination">
<?php
	if(isset($MaLoai))
		$idCate="&idCate=".$MaLoai;
	else
		$idCate="";
	if(isset($MaNSX))
		$idNSX="&idNSX=".$MaNSX;
	else
		$idNSX="";
	if(isset($numpages))
	{
		for($i=1;$i<=$numpages;$i++)
		{	
			if($Trang == $i)
				echo "<li><a href='admin.php?mod=Product&act=QuanLy&page=$i'><b>$i</b></a></li>";
			else
				echo "<li><a href='admin.php?mod=Product&act=QuanLy&page=$i'>$i</a></li>";
		}
	}
?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>