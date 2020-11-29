<form class="form-group" action="" method="POST" class="container d-flex justify-content-center">
	<div class="card container ">
		<div class="card-header info">
                THÊM SẢN PHẨM
		</div>
		<div class="card-body">
			<!-- hot ten -->
			<div class="form-group">
				<label>Họ và tên</label><br>
				<input class="form-control" type="text" name="fullName" placeholder="nhập Họ và tên"><br>
			</div>
			<!-- mat khau -->
			<div class="form-group">
				<label>mật khẩu</label><br>
				<input class="form-control" type="password" name="password" placeholder="mật khẩu đăng nhập của bạn"><br>
			</div>
			<!-- nhap lai mat khau -->
			<div class="form-group">
				<label>nhập lại mật khẩu</label><br>
				<input class="form-control" type="password" name="password2" placeholder="nhập lại mật khẩu"><br>
			</div>
			<!-- email -->
			<div class="form-group">
				<label>địa chỉ email</label><br>
				<input class="form-control" type="text" name="txtEmail" placeholder="nhập địa chỉ email của bạn"><br>
			</div>
			<!-- dia chi cua ban -->
			<div class="form-group">
				<label>địa chỉ của bạn</label><br>
				<textarea class="form-control" name="txtDC" placeholder="địa chỉ của bạn" maxlength="200"></textarea><br>	
			</div>
			<!-- anh dai dien -->
			<div class="form-group">
				<label>ảnh đại diện</label><br>
				<input type="file" name="avatar">
			</div>
			<!-- SDT -->
			<div class="form-group">
				<label>Số điện thoại</label><br>
				<input class="form-control" pattern="[0][0-9]{3}-[0-9]{3}-[0-9]{3}" required type="tel" name="txtSDT" placeholder="nhập số điện thoại của bạn"><br>
			</div>
			<input class="btn btn-primary" type="submit" name="add" value="thêm tài khoản">
		</div>
	</div>
</form>