<?php 
	include '../model/login.php';
	$act='index';
	if (isset($_GET['act']))
	{
		$act=$_GET['act'];
	}
	switch ($act) {
		case 'index':
			include '../login.php';
			break;
		case 'login':
	        if(isset($_POST['btn_login'])){
		        $username= $_POST['user'];
		        $password= $_POST['pass'];
		        $account= getAllAccount($username);
		        if ($account['email']!='') {
		        	if (password_verify($password, $account['mat_khau'])) {
		        		if($account!=null){
			        		session_start();
			        		session_destroy();
		            		$_SESSION['username']= $account['email'];
		            		
				            $_SESSION['password']= $account['mat_khau'];
				            $_SESSION['phanquyen']= $account['phan_quyen']; 
					        if($_SESSION['phanquyen']!=0){
					            header('location: ../../site/index.php?user='.$_SESSION['username']);
					        }
					        else{
					        	header('location: ../index.php?ad='.$_SESSION['username']);
					        	//echo $_SESSION['username'].'aaaaa';
					        }
		        		}
				    	else{
				        	echo '
				            <script>
				            	alert("Đăng nhập không thành công !");
				            </script>';
				        }
	        		}
	        		else{
	        			header('location:../login.php');
	        		}
		        }
		    }
			break;
		
		default:
			# code...
			break;
	}
?>