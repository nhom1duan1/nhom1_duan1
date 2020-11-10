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
<?php
  if(isset($_GET['id'])){
    $id_sanpham=$_GET['id'];
    $sql1=getProductByID($id_sanpham);
    $id=$sql1['id_sanpham'];
    $ten=$sql1['ten_sanpham'];
    $hinh=$sql1['hinh_sanpham'];
    $id_loaisp=$sql1['id_loaisp'];
    $soluong=$sql1['soluong'];
    $gia=$sql1['gia_sanpham'];
  }
?>
<div class="card">
  <div class="card-header info">CẬP NHẬT SẢN PHẨM</div>
  <div class="card-body">
    <form action="index.php?ctrl=product&action=update" method="post">
      <div class="form-group">
        <label for="">Mã sản phẩm:</label><br />
        <input
          readonly
          type="text"
          name="id_sanpham"
          class="form-control"
          value="<?php echo $id ?>"
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
          value="<?php echo $ten ?>"
        />
      </div>
      <div class="form-group">
        <label for="">Hình sản phẩm:</label><br />
        <input
          type="file"
          name="hinh_sanpham"
          class="form-control"
          value="<?php echo $hinh ?>"
        />
      </div>
      <div class="form-group">
        <label for="">Số lượng sản phẩm:</label><br />
        <input
          type="text"
          name="soluong"
          class="form-control"
          placeholder="Số lượng"
          value="<?php echo $soluong ?>"
        />
      </div>
      <div class="form-group">
        <label for="">Giá sản phẩm:</label><br />
        <input
          type="text"
          name="gia_sanpham"
          class="form-control"
          placeholder="Giá"
          value="<?php echo $gia ?>"
        />
      </div>
      <div class="form-group">
        <button type="submit" class="btn">Lưu</button>
        <a href="#" class="btn">Danh sách</a>
      </div>
    </form>
  </div>
</div>
