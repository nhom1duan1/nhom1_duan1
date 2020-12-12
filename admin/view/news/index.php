<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tinh Tức</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách hiển thị</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table"  >
              <thead>
                <tr class="bg-primary">
                <th name="chonX[]"></th>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>noi dung</th>
                  <th>ngày</th>
                  <th>Ẩn Hiện</th>
                  <th>Xóa</th>
                  <th>Sửa</th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach ($showNews as $key )
                  {
                  echo'
                    <tr>
                      <td><input type="checkbox" name="chonX[]"></td>
                      <td>'.$key['id'].'</td>
                      <td>'.$key['tieu_de'].'</td>
                      <td>'.$key['ngay_dan'].'</td>
                      <td>'.$key['tac_gia'].'</td>
                      <td>'.$key['an_hien'].'</td>
                      <td><a onclick="return canhbao()" href="index.php?ctrl=news&act=delete&id='.$key['id'].'" class="btn btn-warning">Xóa</a></td>
                      <td><a href="index.php?ctrl=news&act=update&id='.$key['id'].'" class="btn btn-info">Sửa</a></td>
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