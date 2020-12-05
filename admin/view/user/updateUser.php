<form class="form-group" action="" method="POST">
	<label>ma khach hang: </label><span> <?php echo $id ?> </span><br>
	<label>Họ và tên</label><br>
	<input class="form-control" type="text" name="fullName" value="<?php echo $fullName ?>" placeholder="nhập Họ và tên"><br>
	<!-- <input type="text" name="userName" placeholder="tên đăng nhập của bạn"><br> -->
	<label>mật khẩu</label><br>
	<input class="form-control" type="password" name="password" placeholder="mật khẩu đăng nhập của bạn"><br>
	<label>nhập lại mật khẩu</label><br>
	<input class="form-control" type="password" name="password2" placeholder="nhập lại mật khẩu"><br>
	<label>địa chỉ email</label><br>
	<input readonly class="form-control" type="text" name="txtEmail" value="<?php echo $txtEmail ?>" placeholder="nhập địa chỉ email của bạn"><br>
	<label>địa chỉ của bạn</label><br>
	<textarea class="form-control" name="txtDC" placeholder="địa chỉ của bạn" maxlength="200"><?php echo $txtDC; ?></textarea><br>
	<label>ảnh đại diện</label><br>
	<input type="file" name="avatar" onchange="imgA();" >
	<!-- <div id="imgUser"></div>
	<script type="text/javascript">
		function imgA() {
			var img = document.getElementsByTagName('avatar').value;
			document.getElementByID('imgUser').innerHTML='<img src="'+img+'" alt="">';
		}
	</script> -->
	<label>Số điện thoại</label><br>
	<input class="form-control" pattern="[0][1-9]{1}[0-9]{8}" required type="text" name="txtSDT" value="<?php echo $txtSDT ?>" placeholder="nhập số điện thoại của bạn"><br>
	<select name="phanQuyen" class="form-control">
		<option value="1" >Khach Hang</option>
		<?php $Aoption=($phanQuyen=='0') ? '<option value="0" selected>Admin</option>': '<option value="0">Admin</option>'; echo $Aoption ?>
	</select><br>
              </div>
			   <div class="form-group">
                 <input class="btn btn-info" type="submit" name="add" value="Cập nhật">
                  <a href="index.php?ctrl=user" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>


