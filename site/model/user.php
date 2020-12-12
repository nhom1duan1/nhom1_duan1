<?php 
	include 'database.php';
	function addAccount($fullName,$pass_mahoa,$email,$diaChi,$path,$soDienThoai)
	{
		$sql="INSERT INTO khachhang (ma_kh ,mat_khau ,ho_ten ,email ,dia_chi ,anh_daidien ,so_dt ,phan_quyen ,trang_thai)
		VALUES (NULL , '$pass_mahoa', '$fullName', '$email', '$diaChi', '$path', '$soDienThoai', 1, 1);";
		execute($sql);
	}
	function getEmail($email)
	{
		$sql="select email from khachhang where email='$email'";
		return queryOne($sql);
	}
?>