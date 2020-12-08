<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hãng sản xuất</h1>

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
                            <th></th>
                            <th>Mã hãng</th>
                            <th>Tên Hãng </th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Mã hãng</th>
                            <th>Tên Hãng </th>
                            <th colspan="2"></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                                          foreach($catalogs as $key){
                                            echo'
                                              <tr>
                                                <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
                                                <td>'.$key['ma_hang'].'</td>
                                                <td>'.$key['hang'].'</td>
                                                <td>
                                                  <a onclick="return canhbao()" class="btn btn-warning" href="index.php?ctrl=brand&action=delete&ma_hang='.$key['ma_hang'].'">Xóa</a>
                                                  <a class="btn btn-info" href="index.php?ctrl=brand&action=edit&ma_hang='.$key['ma_hang'].'">Sửa</a>
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
            <a class="btn btn-danger" href="index.php?ctrl=brand&action=add">Thêm</a>
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