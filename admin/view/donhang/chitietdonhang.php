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
    margin: 2% auto;
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
          CHI TIẾT ĐƠN HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">Số lượng</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($chitietdonhang as $value) {
                      $id_sanpham=$value['id_sanpham'];
                      $sql= getProductbyID($id_sanpham);
                      $ten_sanpham= $sql['ten_sanpham'];
                    echo'
                      <tr>
                        <td>'.$ten_sanpham.'</td>
                        <td>'.$value['soluong'].'</td>
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

