<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Bình luận khách hàng</h1>

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
                            <th scope="col">Mã bình luận</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">thời gian</th>
                            <th>Nội dung</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Mã bình luận</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">thời gian</th>
                            <th>Nội dung</th>
                            <th scope="col"></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
              //include 'model/product.php';
              //include 'model/user.php';
                foreach($comment as $cate){
                  $ma_kh= $cate['ma_kh'];
                  $id= $cate['ma_sp'];
                  $product= showProductbyId($id);
                  $khachhang= getUserbyId($ma_kh);
                  echo'
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
                      <td>'.$cate['ma_binhluan'].'</td>
                      <td>'.$khachhang['ho_ten'].'</td>
                       <td>'.$product['ten_sp'].'</td>
                       <td><img style="width: 100px" src="'.$product['hinh_anh'].'" > </td>
                        <td>'.$cate['thoigian'].'</td>
                          <td>'.$cate['noi_dung'].'</td>
                      <td>
                        <a href="index.php?ctrl=comment&action=delete&ma_binhluan='.$cate['ma_binhluan'].'" class="btn btn-warning" >Xoá</a>
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
            <button type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
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