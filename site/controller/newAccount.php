<?php 
	include 'view/newAccount.php';
	include '../model/user.php';
	if (isset($_POST['add'])) {
		$fullName=$_POST['fullName'];
		$password=$_POST['password'];//edit password varchar >=(60)
		$password2=$_POST['password2'];
		$email=$_POST['txtEmail'];
		if ($email!=''||$email==getEmail($email)['email']) {
			echo "<script>alert('vui long kiem tra email da co nguoi su dung');</script>";
			break;
		}
		//sua sql laij unde
		$diaChi=$_POST['txtDC'];
		($_POST['avatar']!=null)?$avatar=$_POST['avatar']:$avatar='1.img';

		$path='../images/'.$avatar;
		$soDienThoai=$_POST['txtSDT'];
		$phanQuyen=$_POST['phanQuyen'];
		if ($password==$password2 && $password!='') {
			//$pass_mahoa=sha1("hehe");//kq 40 ký tự e24b801c310567e96f84c3c33ad20e38fb10a7ac
			//$pass_mahoa = password_hash('hehe', PASSWORD_BCRYPT, ['cost'=>12]);
			//$2y$12$DfczLIjOypADyBJN2uE8kOfV2j7Kzc7y03UbW2AhDiQyw/7PNL5Ta
			//$2y$12$rmfNODrRQjVZw6kGF7WLE.hmle8SoRTSRaq/55ifAdVZNNk.f5uei
			//$mahoa=sha1("nhom2");
			//788c213624f90a0d32fe6d4b2e057c14dfaf1280
			//$option=['cost'=>12];
			$pass_mahoa=password_hash($password, PASSWORD_BCRYPT,["cost"=>12]);
			//password_hash chi su dung duoc cho sever co php 5.5.0 tro len
			//tao 1 chuoi hash
			addAccount($fullName,$pass_mahoa,$email,$diaChi,$path,$soDienThoai);
			header('location:index.php?ctrl=user');
		}
		else{
			echo "<script>alert('vui long kiem tra mat khau');</script>";
		}
	}
?>