<form class="form-group" action="" method="POST">
	<label>Họ và tên</label><br>
	<input class="form-control" type="text" name="fullName" placeholder="nhập Họ và tên"><br>
	<!-- <input type="text" name="userName" placeholder="tên đăng nhập của bạn"><br> -->
	<label>mật khẩu</label><br>
	<input class="form-control" type="password" name="password" placeholder="mật khẩu đăng nhập của bạn"><br>
	<label>nhập lại mật khẩu</label><br>
	<input class="form-control" type="password" name="password2" placeholder="nhập lại mật khẩu"><br>
	<label>địa chỉ email</label><br>
	<input class="form-control" type="text" name="txtEmail" placeholder="nhập địa chỉ email của bạn"><br>
	<label>địa chỉ của bạn</label><br>
	<textarea class="form-control" name="txtDC" placeholder="địa chỉ của bạn" maxlength="200"></textarea><br>
	<label>ảnh đại diện</label><br>
	<input type="file" name="avatar">
	<!-- <div id="imgUser"></div>
	<script type="text/javascript">
		function imgA() {
			var img = document.getElementsByTagName('avatar').value;
			document.getElementByID('imgUser').innerHTML='<img src="'+img+'" alt="">';
		}
	</script> -->
	<label>Số điện thoại</label><br>
	<input class="form-control" type="text" name="txtSDT" placeholder="nhập số điện thoại của bạn"><br>
	<select name="phanQuyen" class="form-control">
		<option value="0" >Khach Hang</option>
		<?php $Aoption=($phanQuyen=='1') ? '<option value="1" selected>Admin</option>': '<option value="1">Admin</option>'; echo $Aoption.$phanQuyen ?>
	</select><br>
	<input type="submit" name="add" value="thêm tài khoản">
</form>