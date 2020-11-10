<style>
  .card {
    margin: 5% auto;
    width: 90%;
    font-family: sans-serif;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .card-header {
    background-color: darkslategrey;
    padding: 1%;
    color: white;
  }
  .card-body {
    width: 95%;
    margin: 0 auto;
  }
  .form-group {
    margin: 2% 0;
    font-size: 1.2vw;
  }
  .form-group input {
    margin-top: 1%;
    width: 95%;
    padding: 1% 2%;
  }
  .btn {
    margin: 1% 0;
    width: 8%;
    padding: 0.5% 0;
    text-decoration: none;
  }
  .form-group select{
    width: 99.4%;
    padding: 1% 0;
  }
</style>
<div class="card">
  <div class="card-header info">THÊM SẢN PHẨM</div>
  <div class="card-body">
    <form action="index.php?ctrl=product&action=add" method="post">
      <div class="form-group">
        <label for="">Mã sản phẩm:</label><br />
        <input
          readonly
          type="text"
          name="id_sanpham"
          class="form-control"
          placeholder="Mã được tự động khởi tạo"
        />
      </div>
      <div class="form-group">
        <label for="">Loại sản phẩm</label><br />
        <select name="id_loaisp" id="">
          <?php
            foreach ($catalog as $value) {
              echo '
                <option value="'.$value['id_loaisp'].'">'.$value['ten_loaisp'].'</option>
              ';
            };
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Tên sản phẩm:</label><br />
        <input
          type="text"
          name="ten_sanpham"
          class="form-control"
          placeholder="Tên sản phẩm"
        />
      </div>
      <div class="form-group">
        <label for="">Hình sản phẩm:</label><br />
        <input
          type="file"
          name="hinh_sanpham"
          class="form-control"
        />
      </div>
      <div class="form-group">
        <label for="">Số lượng sản phẩm:</label><br />
        <input
          type="text"
          name="soluong"
          class="form-control"
          placeholder="Số lượng"
        />
      </div>
      <div class="form-group">
        <label for="">Giá sản phẩm:</label><br />
        <input
          type="text"
          name="gia_sanpham"
          class="form-control"
          placeholder="Giá"
        />
      </div>
      <div class="form-group">
        <button type="submit" class="btn">Lưu</button>
        <a href="#" class="btn">Danh sách</a>
      </div>
    </form>
  </div>
</div>
