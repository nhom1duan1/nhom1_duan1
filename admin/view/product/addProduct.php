<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Sản phẩm</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm mới</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="index.php?ctrl=product&act=insert" method="post">
                    <div class="form-group">
                        <label for="">Mã Sản Phẩm</label>
                        <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
                    </div>

                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="productName" class="form-control" placeholder="Tên sản phẩm" required>
                    </div>
                    <div class="form-group">
                        <label for="">Loại sản phẩm</label>
                        <select name="loai" class="form-control" id="" required>
                            <?php
                      foreach($catalogs as $cate){
                        echo '<option value='.$cate['ma_loai'].' >'.$cate['ten_loai'].'</option>';
                      }
                    ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Giá gốc</label>
                        <input type="text" name="giaGoc" class="form-control" placeholder="Giá gốc" required>
                    </div>
                    <div class="form-group">
                        <label for="">Giá giảm</label>
                        <input type="text" name="giaGiam" class="form-control" placeholder="Giá Giảm" required>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" name="mota" class="form-control" placeholder="Mô tả">
                    </div>
                    <div class="form-group">
                        <label for="">Hãng</label>
                        <select name="brand" class="form-control" id="">
                            <?php
                      foreach($hang as $ceta){
                        echo '<option value='.$ceta['ma_hang'].' >'.$ceta['hang'].'</option>';
                      }
                    ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Truy cập</label>
                        <input type="text" name="truycap" class="form-control" placeholder="Truy cập">
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="imgProduct" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Thứ tự</label>
                        <input type="text" name="thutu" class="form-control" placeholder="Thứ tự" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ẩn hiện</label>
                        <select name="anhien" id="" class="form-control">
                            <option value="0">Ẩn</option>
                            <option value="1" selected>Hiện</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <a href="index.php?ctrl=product" class="btn btn-danger">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>