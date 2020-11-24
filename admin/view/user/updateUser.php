<<<<<<< HEAD
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
	<input type="file" name="avatar" onchange="imgA();" value=" <?php echo $avatar ?> ">
	<!-- <div id="imgUser"></div>
	<script type="text/javascript">
		function imgA() {
			var img = document.getElementsByTagName('avatar').value;
			document.getElementByID('imgUser').innerHTML='<img src="'+img+'" alt="">';
		}
	</script> -->
	<label>Số điện thoại</label><br>
	<input class="form-control" type="text" name="txtSDT" value="<?php echo $txtSDT ?>" placeholder="nhập số điện thoại của bạn"><br>
	<select name="phanQuyen" class="form-control">
		<option value="1" >Khach Hang</option>
		<?php $Aoption=($phanQuyen!='0') ? '<option value="0" selected>Admin</option>': '<option value="1">Admin</option>'; echo $Aoption ?>
=======
<div class="card mt-3">
        <div class="card-header info">
          QUẢN LÝ KHÁCH HÀNG
        </div>
        <div class="card-body">
          <form   method="post">
            <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input  type="text" readonly name="id" class="form-control" value="<?php echo $id?>">
              </div>
              <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" name="fullName" class="form-control" value="<?php echo $fullName ?>" >

              </div>
               <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" name="password" class="form-control" >
              </div>
               <div class="form-group">
                <label for="">Nhập lại mật khẩu</label>
                <input type="password"  name="password2" class="form-control" >
              </div>
               <div class="form-group">
                <label for="">Email</label>
                <input readonly type="text" name="txtEmail" class="form-control"  value="<?php echo $txtEmail ?>">
              </div>
			   <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" name="txtDC"  class="form-control" value=" <?php echo $txtDC; ?>">
              </div>
			   <div class="form-group">
                <label for="">Ảnh đại diện</label>
                <input type="file"  name="avatar"  class="form-control"  onchange="imgA();" value=" <?php echo $avatar ?> ">
              </div>
			   <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" name="txtSDT" value=" <?php echo $txtSDT ?> "   class="form-control" >
              </div>
             
			   <div class="form-group">
                 <select name="phanQuyen" class="form-control">
		<option value="0" >Khach Hang</option>
		<?php $Aoption=($phanQuyen=='1') ? '<option value="1" selected>Admin</option>': '<option value="1">Admin</option>'; echo $Aoption.$phanQuyen ?>
>>>>>>> b001f3a8fb317aa8e6e76f08f84ee4ce86860ebf
	</select><br>
              </div>
			   <div class="form-group">
                 <input class="btn btn-info" type="submit" name="add" value="Cập nhật">
                  <a href="index.php?ctrl=user" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>


