<?php 
	include 'model/database.php';
	function getShowUser(){
		$sql="select * from khachhang";
		return query($sql);
	}
	function getUserbyId($ma_kh){
		$sql="select * from khachhang where ma_kh='$ma_kh'";
		return queryOne($sql);
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
	function addAccount($fullName,$pass_mahoa,$email,$diaChi,$path,$soDienThoai,$phanQuyen)
	{
		$sql="INSERT INTO khachhang (ma_kh ,mat_khau ,ho_ten ,email ,dia_chi ,anh_daidien ,so_dt ,phan_quyen ,trang_thai)
		VALUES (NULL , '$pass_mahoa', '$fullName', '$email', '$diaChi', '$path', '$soDienThoai', '$phanQuyen', '1');";
		execute($sql);
	}
	function deleteAccount($id){
		$sql="delete from khachhang where ma_kh='$id'";
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