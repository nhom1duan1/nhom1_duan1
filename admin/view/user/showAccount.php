<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tài khoản khách hàng</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách hiển thị</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th>Mã khách hàng</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Phân quyền</th>
                            <th></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col"></th>
                            <th>Mã khách hàng</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Phân quyền</th>
                            <th></th>
                            <th scope="col"></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                foreach($users as $key){
               
                  echo'
                    <tr>
					  <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
            <td>'.$key['ma_kh'].'</td>
            <td><img width="100px" height="100px" src="'.$key['anh_daidien'].'"></td>
                    
						<td>'.$key['ho_ten'].'</td>
						<td>'.$key['email'].'</td>
						<td>'.$key['dia_chi'].'</td>
						<td>'.$key['so_dt'].'</td>
						<td>'.(($key['phan_quyen']=='0')?'admin':'khách hàng').'</td>
                  
						<td>
            <a class="btn btn-warning" href="index.php?ctrl=user&act=edit&email='.$key['email'].'">Sửa</a>
            </td>
            <td>
						<a onclick="return canhbao()" class="btn btn-info" href="index.php?ctrl=user&act=delete&ma_kh='.$key['ma_kh'].'">Xóa</a>
						</td>
                    </tr>
                  ';
                }
              ?>
                    </tbody>
                </table>
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <div class="card-footer">
            <input type="button" class="btn btn-info" onclick='selectAll()' value="Chọn tất cả">
            <input type="button" class="btn btn-info" onclick='UnSelectAll()' value="bỏ Chọn tất cả">
            <button onclick="return canhbao()" type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
            <a href="index.php?ctrl=user&act=newAccount" class="btn btn-danger">Thêm mới</a>
        </div>
    </div>

</div>
<script language="JavaScript">
function selectAll() {
    var items = document.getElementsByName('chonX[]');
    for (var i = 0; i < items.length; i++) {
        if (items[i].type == 'checkbox')
            items[i].checked = true;
    }
}
</script>
<script>
function UnSelectAll() {
    var items = document.getElementsByName('chonX[]');
    for (var i = 0; i < items.length; i++) {
        if (items[i].type == 'checkbox')
            items[i].checked = false;
    }
}
</script>