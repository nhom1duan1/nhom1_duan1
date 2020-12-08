<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tài khoản khách hàng</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm mới</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form class="form-group" action="" method="POST">
                    <div class="form-group">
                        <label>Họ và tên</label><br>
                        <input class="form-control" type="text" name="fullName" placeholder="Nhập họ tên vào"
                            required><br>
                    </div>
                    <!-- mat khau -->
                    <div class="form-group">
                        <label>Mật khẩu</label><br>
                        <input pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                            title="Mật khẩu phải có tối thiểu 8 ký tự, ít nhất một chữ cái và một số"
                            class="form-control" type="password" name="password"
                            placeholder="mật khẩu đăng nhập của bạn"><br>
                    </div>
                    <!-- nhap lai mat khau -->
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label><br>
                        <input class="form-control" type="password" name="password2"
                            placeholder="nhập lại mật khẩu"><br>
                    </div>
                    <!-- email -->
                    <div class="form-group">
                        <label>Địa chỉ email</label><br>
                        <input
                            pattern='/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i'
                            class="form-control" type="text" title="Email không hợp lệ" name="txtEmail"
                            placeholder="nhập địa chỉ email của bạn" required><br>
                    </div>
                    <!-- dia chi cua ban -->
                    <div class="form-group">
                        <label>Địa chỉ của bạn</label><br>
                        <textarea class="form-control" name="txtDC" placeholder="địa chỉ của bạn"
                            maxlength="200"></textarea><br>
                    </div>
                    <!-- anh dai dien -->
                    <div class="form-group">
                        <label>Ảnh đại diện</label><br>
                        <input type="file" name="avatar">
                    </div>
                    <!-- SDT -->
                    <div class="form-group">
                        <label>Số điện thoại</label><br>
                        <input class="form-control" pattern="[0][0-9]{9}" required type="tel" name="txtSDT"
                            placeholder="nhập số điện thoại của bạn"><br>
                    </div>
                    <!-- phan quyen -->
                    <div class="form-group">
                        <select name="phanQuyen" class="form-control">
                            <option value="1">Khách hàng</option>
                            <?php $Aoption=($phanQuyen=='0') ? '<option value="0" selected>Quản trị viên</option>':'<option value="0">Quản trị viên</option>';echo $Aoption.$phanQuyen ?>
                        </select>
                    </div><br>
                    <input class="btn btn-danger" type="submit" name="add" value="Thêm">
                    <a class="btn btn-primary" type="submit" href="index.php?ctrl=user">Danh sách</a>
                </form>
            </div>
        </div>
    </div>

</div>