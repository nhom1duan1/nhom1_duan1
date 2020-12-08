<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post">
      <div class="card container ">
        <div class="card-header">
          QUẢN LÝ SẢN PHẨM
        </div>
        <div class="card-body">
          <table class="table table-striped table"  >
              <thead>
                <tr class="bg-primary">
                <th name="chonX[]"></th>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>noi dung</th>
                  <th>ngày</th>
                  <th>Ẩn Hiện</th>
                  <th>Xóa</th>
                  <th>Sửa</th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach ($showNews as $key )
                  {
                  echo'
                    <tr>
                      <td><input type="checkbox" name="chonX[]"></td>
                      <td>'.$key['id'].'</td>
                      <td>'.$key['tieu_de'].'</td>
                      <td>'.$key['ngay_dan'].'</td>
                      <td>'.$key['tac_gia'].'</td>
                      <td>'.$key['an_hien'].'</td>
                      <td><a onclick="return canhbao()" href="index.php?ctrl=news&act=delete&id='.$key['id'].'" class="btn btn-warning">Xóa</a></td>
                      <td><a href="index.php?ctrl=news&act=update&id='.$key['id'].'" class="btn btn-info">Sửa</a></td>
                    </tr>
                  ';
                }
              ?>
              </tbody>
            </table>
          </div>
        <div class="card-footer">
            <input type="button" class="btn btn-info" onclick='selectAll()' value="Chọn tất cả" >
            <input type="button" class="btn btn-info" onclick='UnSelectAll()' value="bỏ Chọn tất cả" >
            <button onclick="return canhbao()" type="submit" class="btn btn-info">Xoá danh mục đã chọn</button>
        </div>
      </div>
</form>
<script language="JavaScript">
              function selectAll(){
				var items=document.getElementsByName('chonX[]');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=true;
				}
			}
</script>
<script>
              function UnSelectAll(){
                var items=document.getElementsByName('chonX[]');
                for(var i=0; i<items.length; i++){
                  if(items[i].type=='checkbox')
                    items[i].checked=false;
                }
              }			
            </script>