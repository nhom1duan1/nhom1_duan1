<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Đơn hàng</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Chi tiết đơn hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          foreach($catalogs as $key){
                            echo'
                              <tr>
                                <td>'.$key['ma_donhang'].'</td>
                                <td>'.$key['ma_sp'].'</td>
                                <td>'.$key['soluong'].'</td>
                              </tr>
                            ';
                          }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>