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
	function updateUser($fullName,$password,$diaChi,$avatar,$soDienThoai,$phanQuyen,$email){
		$sql="update khachhang set mat_khau='$password',ho_ten='$fullName', dia_chi='$diaChi',anh_daidien='$avatar', so_dt='$soDienThoai', phan_quyen='$phanQuyen' where email='$email';";
		execute($sql);
		// header('localhost:index.php?ctrl=user');
	}
	function addAccount($fullName,$pass_mahoa,$email,$diaChi,$path,$soDienThoai,$phanQuyen)
	{
		$sql="INSERT INTO khachhang (ma_kh ,mat_khau ,ho_ten ,email ,dia_chi ,anh_daidien ,so_dt ,phan_quyen ,trang_thai)
		VALUES (NULL , '$pass_mahoa', '$fullName', '$email', '$diaChi', '$path', '$soDienThoai', '$phanQuyen', '1');";
		execute($sql);
	}
	function deleteAccount($email){
		$sql="delete from khachhang where email='$email'";
		execute($sql);
		//header('localhost:index.php?ctrl=user');
	}
	function getEmail($email)
	{
		$sql="select email from khachhang where email='$email'";
		return queryOne($sql);
		//($checkEmail=)
		
	}
 ?>