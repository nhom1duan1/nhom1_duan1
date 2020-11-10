<script language="JavaScript">
  function selectAll(){
		var items=document.getElementsByName('chonX[]');
			for(var i=0; i<items.length; i++){
				if(items[i].type=='checkbox')
					items[i].checked=true;
			}
		}
  function UnSelectAll(){
    var items=document.getElementsByName('chonX[]');
      for(var i=0; i<items.length; i++){
        if(items[i].type=='checkbox')
          items[i].checked=false;
        }
      }		
  function DeleteAll(){
    var items=document.getElementsByName('chonX[]');
      for(var i=0; i<items.length; i++){
        if(items[i].type=='checkbox'){
          if(items[i].checked){
            window.location="index.php?ctrl=product&action=delete&id="+items[i].value;
          }
        }
      }

  }
  function confirm_delete(){
    if(confirm('Bạn thực sự muốn xóa mục này ?')){
      return true;
    }
    else{
      return false;
    }
  }
</script>
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
    height: 400px;
    overflow-y: auto;
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
    width: 15%;
    padding: 0.5% 0;
    text-decoration: none;
  }
  table{
    width: 100%;
    border-collapse: collapse;
  }
  td{
    padding: 1% 0;
  }
  tr:nth-child(even){
    background-color: rgb(151, 197, 197);
  }
  th{
    text-align: left;
    padding: 1% 0;
    background-color: darkslategrey;
    color: white;
  }
  .card-footer{
    padding: 1%;
  }
</style>
<form action="#" method="post">
      <div class="card">
        <div class="card-header">
          QUẢN LÝ ĐƠN HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th scope="col">Tên khách hàng</th>
                  <th scope="col">Email</th>
                  <th scope="col">Địa chỉ</th>
                  <th scope="col">Số điện thoại</th>
                  <th scope="col">Ngày đặt hàng</th>
                  <th scope="col"></th>
                  <img src="" alt="">

                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($donhang as $value) {
                    echo'
                      <tr>
                        <td>'.$value['ten_khachhang'].'</td>
                        <td>'.$value['email'].'</td>
                        <td>'.$value['diachi'].'</td>
                        <td>'.$value['sdt'].'</td>
                        <td>'.$value['ngaydathang'].'</td>
                        <td>
                          <a href="index.php?ctrl=donhang&action=delete&id_donhang='.$value['id_donhang'].'" onclick="confirm_delete();" class="btn">Xoá</a>
                          <a href="index.php?ctrl=donhang&action=edit&id_donhang='.$value['id_donhang'].'" class="btn">Sửa</a>
                          <a href="index.php?ctrl=donhang&action=xemchitiet&id_donhang='.$value['id_donhang'].'" class="btn">Xem chi tiết</a>
                        </td>
                      </tr>
                    ';
                  }

                ?>
              </tbody>
            </table>
          </div>
        <div class="card-footer">
            <button type='button' class="btn" onclick='selectAll();'>Chọn tất cả</button>
            <button type="button" class="btn" onclick='UnSelectAll();'>Bỏ chọn</button>
            <button type="button" class="btn" onclick='DeleteAll();'>Xóa mục đã chọn</button>
        </div>
      </div>
</form>

