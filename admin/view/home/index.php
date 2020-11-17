<table boder="1"id="showProduct">
	<tr>
		<th>Mã Sảng Phẩm</th>
		<th>Tên Sản Phẩm</th>
		<th>Mã Loại</th>
		<th>Tên Loại</th>
		<th>Giá Góc</th>
		<th>Giá Giảm</th>
		<th>Hãng</th>
		<th>Hình Anh</th>
		<th>Mô Tả</th>
		<th>Dánh Giá</th>
		<th>Truy Cập</th>
		<th>Thứ Tự</th>
		<th>Ẩn Hiện</th>
		<th>Thêm</th>
		<th>Xóa</th>
		<th>Sửa</th>
	</tr>
	<?php 
		foreach ($products as $key ) {
			echo'
				<tr>
					<td>'.$key['ma_sp'].'</td>
					<td>'.$key['ten_sp'].'</td>
					<td>'.$key['ma_loai'].'</td>
					<td>'.$key['ten_loai'].'</td>
					<td>'.$key['gia_goc'].'</td>
					<td>'.$key['gia_giam'].'</td>
					<td>'.$key['hang'].'</td>
					<td><img width="100px" height="100px" src="../site/images/'.$key['hinh_anh'].'"></td>
					<td>'.$key['mo_ta'].'</td>
					<td>'.$key['danh_gia'].'</td>
					<td>'.$key['truy_cap'].'</td>
					<td>'.$key['thu_tu'].'</td>
					<td>'.$key['an_hien'].'</td>
				</tr>
			';
		}
	?>
</table>
<!-- hình ảnh giá loại tên ẩn hiện -->