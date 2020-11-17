<link rel="stylesheet" href="style.css">
<table boder=""id="showProduct">
	<tr>
		<th>Mã Sản Phẩm</th>
		<th>Hình Anh</th>
		<th>Tên Sản Phẩm</th>
		<th>Tên Loại</th>
		<th>Giá Góc</th>
		<th>Giá Giảm</th>
		<th>Hãng</th>
		<th>Truy Cập</th>
		<th>Ẩn Hiện</th>
		<th>Xóa</th>
		<th>Sửa</th>
	</tr>
	<?php 
		foreach ($products as $key ) {
			echo'
				<tr>
					<td>'.$key['ma_sp'].'</td>
					<td><img width="100px" height="100px" src="../site/images/'.$key['hinh_anh'].'"></td>
					<td>'.$key['ten_sp'].'</td>
					<td>'.$key['ten_loai'].'</td>
					<td>'.$key['gia_goc'].'</td>
					<td>'.$key['gia_giam'].'</td>
					<td>'.$key['hang'].'</td>
					<td>'.$key['truy_cap'].'</td>
					<td>'.$key['an_hien'].'</td>
					<td><a href="index.php?ctrl=product&act=delete&id='.$key['ma_sp'].'">delete</a></td>
					<td><a href="index.php?ctrl=product&act=update&id='.$key['ma_sp'].'">edit</a></td>
				</tr>
			';
		}
	?>
</table>
<!-- hình ảnh giá loại tên ẩn hiện -->