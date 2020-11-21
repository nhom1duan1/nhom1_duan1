<?php 
	include 'model/user.php';
	$act='index';
	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	}
	switch ($act) {
		case 'index':
			$users=getShowUser();
			include 'view/user/showAccount.php';
			break;

		case 'add':
			include 'view/user/newAccount.php';
			$users=getShowUser();
		break;
		case 'newAccount':
			if (isset($_POST['add'])) {
				if (isset($_POST['phanQuyen'])) {
					$fullName=$_POST['fullName'];
					$password=$_POST['password'];
					$email=$_POST['txtEmail'];
					$diaChi=$_POST['txtDC'];
					$avatar=$_POST['avatar'];
					$soDienThoai=$_POST['txtSDT'];
					$phanQuyen=$_POST['phanQuyen'];
					echo $phanQuyen.'dasadasd';
					addAdmin($fullName,$password,$email,$diaChi,$avatar,$soDienThoai,$phanQuyen);
				}
				else{
					$fullName=$_POST['fullName'];
					$password=$_POST['password'];
					$email=$_POST['txtEmail'];
					$diaChi=$_POST['txtDC'];
					$avatar=$_POST['avatar'];
					$soDienThoai=$_POST['txtSDT'];
					addUser($fullName,$password,$email,$diaChi,$avatar,$soDienThoai);
					//header('location:http://localhost/duan1/nhom1_duan1/site/index.php');
				}
			}
			break;
		case 'edit':
			$email='';
			if (isset($_GET['email'])) {
				$email=$_GET['email'];
			}
			$users=getShowUserID($email);
			// foreach ($users as $key) {
			// 	echo $key['ho_ten'];
			// }
			
			if (isset($_POST['add'])) {
				$fullName=$_POST['fullName'];
				$password=$_POST['password'];
				$password2=$_POST['password2'];
				$diaChi=$_POST['txtDC'];
				$avatar=$_POST['avatar'];
				$path='../images/images/'.$avatar;
				$soDienThoai=$_POST['txtSDT'];
				$phanQuyen=$_POST['phanQuyen'];
				if ($password==$password2) {
					updateUser($fullName,$password,$diaChi,$path,$soDienThoai,$phanQuyen,$email);
					header("location:index.php?ctrl=user");
					break;
				}
				else{
					echo 'mat khau khong trung';
				}
			}
			$id=$users['ma_kh'];
			$fullName=$users['ho_ten'];
			$txtEmail=$users['email'];
			$txtDC=$users['dia_chi'];
			$avatar=$users['anh_daidien'];
			$txtSDT=$users['so_dt'];
			$phanQuyen=$users['phan_quyen'];
			include 'view/user/updateUser.php';
			break;
			case 'delete':
				$id=$_GET['ma_kh'];
				
					deleteAccount($id);
					header("locaion:index.php?ctrl=user");
				break;
		default:
			echo "sai cu phap";
			break;
	}
	
?>