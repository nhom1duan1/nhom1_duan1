<?php 
//include 'model/user.php';
$act='index';
if (isset($_GET['act'])) {
	$act=$_GET['act'];
}
switch ($act) {
	case 'index':
	$users=getShowUser();
	include 'view/user/showAccount.php';
	break;
	case 'newAccount':
	include 'view/user/newAccount.php';
	if (isset($_POST['add'])) {
		if (isset($_POST['phanQuyen'])) {
			$fullName=$_POST['fullName'];
			$password=$_POST['password'];//edit password varchar >=(60)
			$password2=$_POST['password2'];
			$email=$_POST['txtEmail'];
			if ($email!=''&&$email==getEmail($email)['email']) {
				echo "<script>alert('vui long kiem tra email da co nguoi su dung');</script>";
				break;
			}
			//sua sql laij unde
			$diaChi=$_POST['txtDC'];
			($_POST['avatar']!=null)?$avatar=$_POST['avatar']:$avatar='1.img';

			$path='../site/images/'.$avatar;
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
				addAccount($fullName,$pass_mahoa,$email,$diaChi,$path,$soDienThoai,$phanQuyen);
				header('location:index.php?ctrl=user');
			}
			else{
				echo "<script>alert('vui long kiem tra mat khau');</script>";
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
>>>>>>> b001f3a8fb317aa8e6e76f08f84ee4ce86860ebf
				break;
			}
					
		}
		else{
			$fullName=$_POST['fullName'];
			$password=$_POST['password'];
			$email=$_POST['txtEmail'];
			$diaChi=$_POST['txtDC'];
			$avatar=$_FILE['avatar']['name'];
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
	
	if (isset($_POST['add'])) {
		$fullName=$_POST['fullName'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		$diaChi=$_POST['txtDC'];
		$avatar=$_POST['avatar'];
		$soDienThoai=$_POST['txtSDT'];
		$phanQuyen=$_POST['phanQuyen'];
		if ($password==$password2&& $password!='') {
			$pass_mahoa=password_hash($password, PASSWORD_BCRYPT,['cost'=>12]);
			updateUser($fullName,$pass_mahoa,$diaChi,$avatar,$soDienThoai,$phanQuyen,$email);
			header("localhost:index.php?ctrl=user");
			break;
		}
		else{
			echo "<script>alert('vui long kiem tra mat khau');</script>";
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
	$email=$_GET['email'];
	deleteAccount($email);
	echo "<script>
	alert('XÓA THÀNH CÔNG')
	</script>";
	header('location: index.php?ctrl=user');
	break;
	default:
	echo "sai cu phap";
	break;
}
?>