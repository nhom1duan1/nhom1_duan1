<form action="index.php?ctrl=product&act=chinhsua" method="POST">
				<label>Mã sản phẩm</label>
				<input type="text" name="id_sp" value="<?php echo $productId['ma_sp']?>" >
				<label>Tên Sản Phẩm</label>
				<input type="text" name="productName" value="<?php echo $productId['ten_sp']?>" >
				<label>Tên Loại</label>
				<input type="text" name="catalogName"value="<?php echo $productId['ten_loai']?>">
				<label>Gía Gốc</label>
				<input type="number" name="giaGoc" min="1000" max="999999999"value="<?php echo $productId['gia_goc']?>">
				<label>Giá Giảm</label>
				<input type="number" name="giaGiam"  min="1000" max="999999999"value="<?php echo $productId['gia_giam']?>">
				<label>Tên Hãng</label>
				<input type="text" name="brand" value="<?php echo $productId['hang']?>">
				<input type="file" name="imgProduct">
				<label>Mô tả sãn phẩm</label>
				<textarea maxlength="100" name="moTa"></textarea>
				<label>Đánh Giá</label>
				<textarea maxlength="100" name="danhGia"></textarea>
				<label>Thứ Tự</label>
				<input type="number" name="thuTu"value="<?php echo $productId['thu_tu']?>">
				<label>Ẩn Hiện</label>
				<input type="" name="anHien"value="<?php echo $productId['an_hien']?>">
				<button type="submit" name="btn">Chỉnh sửa</button>
	
</form>
<!-- hình ảnh giá loại tên ẩn hiện -->