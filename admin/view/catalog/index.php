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
          if(confirm("Bạn thực sự muốn xóa chứ ?")){
            window.location="index.php?ctrl=catalog&action=delete&id="+items[i].value;
          }
          else{
            return false;
          }
        }
      }
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
    height:600px;
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
    background-color: gainsboro;
  }
  th{
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
          QUẢN LÝ LOẠI HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table">
              <thead>
                <tr class="bg-info">
                  <th scope="col"></th>
                  <th scope="col">Mã loại</th>
                  <th scope="col">Tên loại</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($catalog as $value) {
                    echo'
                      <tr>
                        <td scope="row"><input type="checkbox" id="chonX" name="chonX[]" value="'.$value['id_loaisp'].'"></td>
                        <td>'.$value['id_loaisp'].'</td>
                        <td>'.$value['ten_loaisp'].'</td>
                        <td>
                          <a href="index.php?ctrl=catalog&action=delete&id='.$value['id_loaisp'].'" class="btn btn-warning">Xoá</a>
                          <a href="index.php?ctrl=catalog&action=edit&id='.$value['id_loaisp'].'" class="btn btn-info">Sửa</a>
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

