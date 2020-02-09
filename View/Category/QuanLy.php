<div class="col-md-8">
    <div class="product-content-right">
    	<div class="row">
    		<table class="table table-dark table-hover">
              	<thead>
                	<tr>
	                  <th>Tên loại</th>
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
						<td>{$row['TenLoai']}</td>
						<td>
							<a href="admin.php?mod=Category&act=Xoa&id={$row['MaLoai']}" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</a>
						</td>
						<td>
							<a href="admin.php?mod=Category&act=Sua&id={$row['MaLoai']}">Sửa</a>
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
	if(isset($numpages))
	{
		for($i=1;$i<=$numpages;$i++)
		{	
			if($Trang == $i)
				echo "<li><a href='admin.php?mod=Category&act=QuanLy&page=$i'><b>$i</b></a></li>";
			else
				echo "<li><a href='admin.php?mod=Category&act=QuanLy&page=$i'>$i</a></li>";
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