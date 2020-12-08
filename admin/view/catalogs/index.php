<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Loại sản phẩm</h1>

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
                            <th scope="col">Mã loại</th>
                            <th scope="col">Tên loại</th>
                            <th scope="col">Thứ tự</th>
                            <th scope="col">Ẩn hiện</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Mã loại</th>
                            <th scope="col">Tên loại</th>
                            <th scope="col">Thứ tự</th>
                            <th scope="col">Ẩn hiện</th>
                            <th scope="col"></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                foreach($catalogs as $cate){
                  if($cate['an_hien']==1){
                    $anhien='Hiện';
                  }
                  else{
                    $anhien='Ẩn';
                  }
                  echo'
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
                      <td>'.$cate['ma_loai'].'</td>
                      <td>'.$cate['ten_loai'].'</td>
                       <td>'.$cate['thu_tu'].'</td>
                         <td>'.$anhien.'</td>
                      <td>
                        <a onclick="return canhbao()" href="index.php?ctrl=catalogs&action=delete&ma_loai='.$cate['ma_loai'].'" class="btn btn-warning" >Xoá</a>
                        <a href="index.php?ctrl=catalogs&action=edit&ma_loai='.$cate['ma_loai'].'"class="btn btn-info">Sửa</a>
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
            <a href="index.php?ctrl=catalogs&action=addnew" class="btn btn-danger">Thêm mới</a>
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