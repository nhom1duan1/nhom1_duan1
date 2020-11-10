
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
</style>
<?php
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql1=getCatalogByID($id);
    $id_loaisp=$sql1['id_loaisp'];
    $ten=$sql1['ten_loaisp'];
  }
?>
<div class="card">
  <div class="card-header info">CẬP NHẬT LOẠI SẢN PHẨM</div>
  <div class="card-body">
    <form action="index.php?ctrl=catalog&action=update" method="post">
      <div class="form-group">
        <label for="">Mã danh mục:</label><br />
        <input
          type="text"
          name="MaLoai"
          class="form-control"
          readonly
          value="<?php echo $id_loaisp?>" 
        />
      </div>
      <div class="form-group">
        <label for="">Tên danh mục:</label><br />
        <input
          type="text"
          name="TenLoai"
          class="form-control"
          placeholder="Tên loại"
          value="<?php echo $ten?>" 
        />
      </div>
      <div class="form-group">
        <button type="submit" class="btn">Cập Nhật</button>
        <a href="#" class="btn">Danh sách</a>
      </div>
    </form>
  </div>
</div>
