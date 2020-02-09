<div class="col-md-8">
    <div class="product-content-right">
    	<div class="row">
    		<table class="table table-dark table-hover">
              	<thead>
                	<tr>
	                  <th>Tên sản phẩm</th>
	                  <th>Đơn giá</th>
	                  <th>Số lượng</th>
	                  <th>Tổng</th>
	                </tr>
	            </thead>
	            <tbody>
<?php
	foreach($rs as $row)	
	{
		$tong=$row['DonGia']*$row['SoLuong'];
		echo <<<EDO
					<tr>
						<td>{$row['TenSP']}</td>
						<td>{$row['DonGia']}</td>
						<td>{$row['SoLuong']}</td>
						<td>{$tong}</td>
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
	if(isset($numpages))
	{
		for($i=1;$i<=$numpages;$i++)
		{	
			if($Trang == $i)
				echo "<li><a href='admin.php?mod=OrderItems&act=QuanLy&id={$row['MaHD']}&page=$i'><b>$i</b></a></li>";
			else
				echo "<li><a href='admin.php?mod=OrderItems&act=QuanLy&id={$row['MaHD']}&page=$i'>$i</a></li>";
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
