<div class="col-md-8">
    <div class="product-content-right">
    	<div class="row">
    		<table class="table table-dark table-hover">
              	<thead>
                	<tr>
	                  <th>Họ tên khách hàng</th>
	                  <th>Số điện thoại</th>
	                  <th>Ngày đặt</th>
	                  <th>Nơi giao</th>
	                  <th>Tình trạng</th>
	                  <th>Tổng tiền</th>
	                  <th>Xem chi tiết</th>
	                  <th>Xóa</th>
	                  <th>Sửa</th>
	                </tr>
	            </thead>
	            <tbody>
<?php
	foreach($rs as $row)
	{
		echo <<<EDO
					<tr>
						<td>{$row['TenKH']}</td>
						<td>{$row['SoDienThoai']}</td>
						<td>{$row['NgayDat']}</td>
						<td>{$row['NoiGiao']}</td>
						<td>{$row['TinhTrang']}</td>
						<td>{$row['TongTien']}</td>
						<td>
							<a href="admin.php?mod=OrderItems&act=QuanLy&id={$row['MaHD']}">Xem chi tiết</a>
						</td>
						<td>
							<a href="admin.php?mod=Order&act=Xoa&id={$row['MaHD']}" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</a>
						</td>
						<td>
							<a href="admin.php?mod=Order&act=Sua&id={$row['MaHD']}">Sửa</a>
						</td>
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
				echo "<li><a href='admin.php?mod=Order&act=QuanLy&page=$i'><b>$i</b></a></li>";
			else
				echo "<li><a href='admin.php?mod=Order&act=QuanLy&page=$i'>$i</a></li>";
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