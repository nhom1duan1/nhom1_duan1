<form class="form-group" action="" method="POST" class="container d-flex justify-content-center">
			<!-- mật khẩu cũ -->
			<div class="form-group">
				<label>mật khẩu cũ</label><br>
				<input class="form-control" type="password" name="oldPassword" placeholder="mật khẩu cũ của bạn"><br>
			</div>
			<!-- mat khau -->
			<div class="form-group">
				<label>mật khẩu mới</label><br>
				<input class="form-control" type="password" name="password" placeholder="mật khẩu mới của bạn"><br>
			</div>
			<!-- nhap lai mat khau -->
			<div class="form-group">
				<label>nhập lại mật khẩu</label><br>
				<input class="form-control" type="password" name="password2" placeholder="nhập lại mới mật khẩu"><br>
			</div>
			<!-- SDT -->
			<div class="form-group">
				<label>Số điện thoại</label><br>
				<input class="form-control" pattern="[0][1-9]{1}[0-9]{3}" required type="tel" name="txtSDT" placeholder="nhập số điện thoại của bạn (0123-456-789)"><br>
			</div>
			<input class="btn btn-primary" type="submit" name="add" value="thêm tài khoản">
		</div>
	</div>
</form>