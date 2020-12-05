<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post" class="container d-flex justify-content-center">
      <div class="card container">
        <div class="card-header">
          QUẢN LÝ HÃNG SẢN XUẤT
        </div>
        <div class="card-body">
          <table class=""  >
              <thead>
                <tr class="bg-info">
				 <th scope="col"></th>
         <th>Mã hãng</th>
                 <th scope="col">Hãng</th>
					<th scope="col"></th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
              <?php
                foreach($catalogs as $key){
                  echo'
                    <tr>
                      <th scope="row"><input type="checkbox" id="chonX" name="chonX[]"></th>
                      <td>'.$key['ma_hang'].'</td>
            <td>'.$key['hang'].'</td>
            
          
                 <td>
						<a onclick="return canhbao()" class="btn btn-warning" href="index.php?ctrl=brand&action=delete&ma_hang='.$key['ma_hang'].'">Xóa</a>
						</td>
              <td>
						  <a class="btn btn-info" href="index.php?ctrl=brand&action=edit&ma_hang='.$key['ma_hang'].'">Sửa</a>
						</td>
           
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
            <a class="btn btn-danger" href="index.php?ctrl=brand&action=add">Thêm</a>
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

