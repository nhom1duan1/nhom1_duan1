<table class="table table-striped table" border="1">
	<tr>
		<th>Mã khách hàng</th>
		<th>Avatar</th>
		<th>Tên khách hàng</th>
		<th>Email</th>
		<th>Địa chỉ</th>
		<th>SĐT</th>
		<th>Phan quyền</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php 
		foreach ($users as $key) {
			echo'
			<tr>
				<td>'.$key['ma_kh'].'</td>
				<td>'.$key['anh_daidien'].'</td>
				<td>'.$key['ho_ten'].'</td>
				<td>'.$key['email'].'</td>
				<td>'.$key['dia_chi'].'</td>
				<td>'.$key['so_dt'].'</td>
				<td>'.(($key['phan_quyen']!='0')?'khách hàng':'admin').'</td>
				<td><a class="btn btn-warning" href="index.php?ctrl=user&act=edit&email='.$key['email'].'">sua</a></td>
				<td><a class="btn btn-info" href="index.php?ctrl=user&act=delete&email='.$key['email'].'">xoa</a></td>
			</tr>
			';
		}
	?>
</table>