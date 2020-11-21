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
	</select><br>
              </div>
			   <div class="form-group">
                 <input class="btn btn-info" type="submit" name="add" value="Cập nhật">
                  <a href="index.php?ctrl=user" class="btn btn-danger">Danh sách</a>
              </div>
          </form>
        </div>
      </div>


