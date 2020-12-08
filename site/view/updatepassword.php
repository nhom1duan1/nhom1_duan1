
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <div class="container">
	  <h3 class="title">ĐỔI MẬT KHẨU</h3>
	<form class="form-group" action="" method="POST" class="container d-flex justify-content-center was-validated">
				<!-- mật khẩu cũ -->
				<div class="form-group">
					<label for="oldPassword">Mật khẩu cũ</label><br>
					<input class="form-control" type="password" name="oldPassword" id="oldPassword" placeholder="Mật khẩu cũ của bạn" required><br>
					<div class="valid-feedback">Valid.</div>
    				<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<!-- mat khau -->
				<div class="form-group">
					<label>mật khẩu mới</label><br>
					<input class="form-control" type="password" name="password" placeholder="Mật khẩu mới của bạn" required><br>
					<div class="valid-feedback">Valid.</div>
    				<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<!-- nhap lai mat khau -->
				<div class="form-group">
					<label>nhập lại mật khẩu</label><br>
					<input class="form-control" type="password" name="password2" placeholder="Nhập lại mới mật khẩu" required><br>
					<div class="valid-feedback">Valid.</div>
    				<div class="invalid-feedback">Please fill out this field.</div>
				</div>
				<!-- SDT -->
				<div class="form-group">
					<label>Số điện thoại</label><br>
					<input class="form-control" pattern="[0][0-9]{9}" required type="tel" name="txtSDT" placeholder="Nhập số điện thoại của bạn" required><br>
				</div>
				<input class="btn btn-primary" type="submit" name="add" value="Đổi mật khẩu">
				<div class="valid-feedback">Valid.</div>
    			<div class="invalid-feedback">Please fill out this field.</div>
			</div>
		</div>
	</form>
</div>