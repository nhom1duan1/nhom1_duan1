<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hãng sản xuất</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm mới</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="index.php?ctrl=brand&action=insert" method="post">
                    <div class="form-group">
                        <label for="">Hãng</label>
                        <input type="text" name="hang" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name='btn' class="btn btn-primary">Thêm</button>
                        <a href="index.php?ctrl=brand&action=index" class="btn btn-danger">Danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>