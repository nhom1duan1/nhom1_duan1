<style>
	th{
		color:white;
	}
</style>
<form action="#" method="post" class="container d-flex justify-content-center">
      <div class="card container">
        <div class="card-header">
          CHI TIẾT ĐƠN HÀNG
        </div>
        <div class="card-body">
          <table class="table table-striped table"  >
              <thead>
                <tr class="bg-info">

                 <th>Mã đơn hàng</th>
					<th scope="col">Mã sản phẩm</th>
          	<th scope="col">Số lượng</th>
				

                </tr>
              </thead>
              <tbody>
              <?php
                foreach($catalogs as $key){
                 
                  echo'
                    <tr>
            <td>'.$key['ma_donhang'].'</td>
            <td>'.$key['ma_sp'].'</td>
             <td>'.$key['soluong'].'</td>
                    </tr>
                  ';
                }
              ?>
              </tbody>
            </table>
          </div>
        <div class="card-footer">
           <a href="index.php?ctrl=cart&action=index" class="btn btn-danger">Quay lại giỏ hàng</a>
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

