<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Sản phẩm</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="index.php?ctrl=product&act=chinhsua" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Họ và tên</label><br>
                        <input class="form-control" type="text" name="fullName" value="<?php echo $fullName ?>"
                            placeholder="nhập Họ và tên"><br>
                    </div>
                    <div class="form-group">
                        <label>mật khẩu</label><br>
                        <input class="form-control" type="password" name="password"
                            placeholder="mật khẩu đăng nhập của bạn"><br>
                    </div>
                    <div class="form-group">
                        <label>nhập lại mật khẩu</label><br>
                        <input class="form-control" type="password" name="password2"
                            placeholder="nhập lại mật khẩu"><br>
                    </div>
                    <div class="form-group">
                        <label>địa chỉ email</label><br>
                        <input readonly class="form-control" type="text" name="txtEmail" value="<?php echo $txtEmail ?>"
                            placeholder="nhập địa chỉ email của bạn"><br>
                    </div>
                    <div class="form-group">
                        <label>địa chỉ của bạn</label><br>
                        <textarea class="form-control" name="txtDC" placeholder="địa chỉ của bạn"
                            maxlength="200"><?php echo $txtDC; ?></textarea><br>
                    </div>
                    <div class="form-group">
                        <label>ảnh đại diện</label><br>
                        <input type="file" name="avatar" onchange="imgA();">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label><br>
                        <input class="form-control" pattern="[0][1-9]{1}[0-9]{8}" required type="text" name="txtSDT"
                            value="<?php echo $txtSDT ?>" placeholder="nhập số điện thoại của bạn"><br>
                    </div>
                    <div class="form-group">
                        <label for="">Phân quyền</label>
                        <select name="phanQuyen" class="form-control">
                            <option value="1">Khach Hang</option>
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
    </div>

</div>