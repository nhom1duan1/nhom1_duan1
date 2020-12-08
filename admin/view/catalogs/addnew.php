<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Loại sản phẩm</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm mới</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="index.php?ctrl=catalogs&action=insert" method="post">

                    <div class="form-group">
                        <label for="">Mã danh mục</label>
                        <input type="text" readonly name="id" class="form-control" placeholder="Mã loại tự phát sinh">
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="nameCata" class="form-control" placeholder="Tên loại" required>
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
                        <a href="index.php?ctrl=catalogs" class="btn btn-danger">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>