<?php 
	include '../site/model/database.php';
	function getShowUser(){
		$sql="select*from khachhang";
		return query($sql);
	}
	function getShowUserID($email){
		$sql="select*from khachhang where email='$email'";
		return queryOne($sql);
	}
	function updateUser($fullName,$password,$diaChi,$path,$soDienThoai,$phanQuyen,$email){
		if($path==""){
			$sql="update khachhang set mat_khau='$password',ho_ten='$fullName', dia_chi='$diaChi',anh_daidien='$path', so_dt='$soDienThoai', phan_quyen='$phanQuyen' where email='$email';";
		}else{
			$sql="update khachhang set mat_khau='$password',ho_ten='$fullName', dia_chi='$diaChi', so_dt='$soDienThoai', phan_quyen='$phanQuyen' where email='$email';";
		}
		
		execute($sql);
		// header('localhost:index.php?ctrl=user');
	}
	function addAdmin($fullName,$password,$email,$diaChi,$avatar,$soDienThoai,$phanQuyen)
	{
		$sql="INSERT INTO khachhang (ma_kh ,mat_khau ,ho_ten ,email ,dia_chi ,anh_daidien ,so_dt ,phan_quyen ,trang_thai)
		VALUES (NULL , '$password', '$fullName', '$email', '$diaChi', '$avatar', '$soDienThoai', '$phanQuyen', '1');";
		execute($sql);
	}
	function deleteAccount($id){
		$sql="delete from khachhang where ma_kh='$id'";
		execute($sql);
		header('localhost:index.php?ctrl=user');
	}
 ?>