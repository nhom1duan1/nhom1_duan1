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
			        		//session_destroy();
		            		$_SESSION['username']= $account['email'];
		            		
				            $_SESSION['password']= $account['mat_khau'];
				            $_SESSION['phanquyen']= $account['phan_quyen']; 
					        if($_SESSION['phanquyen']!=0){
					            header('location: ../../site/index.php?'.$_SESSION['username']);
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
						echo'
							<script>
								alert("Sai mật khẩu !");
								window.location="../index.php";
				            </script>';
	        		}
				}
		    }
			break;
		case 'forgetpass':
			if (isset($_POST['sb-pass'])) {
				$username=$_POST['userEmail'];
				//$email=getAllAccount($username);
				$account= getAllAccount($username);
				if ($account=="") {
					echo "<script>alert('tài khoản chưa tồn tại');window.location='../login.php';</script>";
				}
				else{
					//https://github.com/PHPMailer/PHPMailer/tree/master
					include '../../PHPMailer/class.phpmailer.php';
					include '../../PHPMailer/class.smtp.php';

					require '../../PHPMailerAutoload.php';
					// Instantiation and passing `true` enables exceptions
					$mail -> charSet = "UTF-8";
					$mail = new PHPMailer(true);
					try {
					    //Server settings
					    $mail->SMTPDebug = 4;                      // Enable verbose debug output
					    $mail->isSMTP();                                            // Send using SMTP
					    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
					    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
					    $mail->Username   = 'nhom1phpmailer@gmail.com';                     // SMTP username
					    $mail->Password   = 'duan12020@123';                               // SMTP password
					    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
					    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

					    //Recipients
					    $mail->setFrom('nhom1phpmailer@gmail.com', 'for got password');
					    $mail->addAddress($username, 'your password');

					    $mail->addReplyTo('nhom1phpmailer@gmail.com');
					    // Content
					    $mail->isHTML(true);// Set email format to HTML
					    $password=rand(100000,999999);//tạo password mới
					    $mail->Subject = 'đây là mật khẩu mới của bạn';//tiêu đề
					    $mail->Body = 'password: <b>'.$password.'</b>';//body mail
					    
					    //thông báo đã gửi mail đươc hây chưa 
					    if (!$mail->send()) {
					    	echo "gửi không thành công";
					    	echo 'mail Error: '.$mail->ErrorInfo;
					    }
					    echo 'Message has been sent';
					    $pass_mahoa=password_hash($password, PASSWORD_BCRYPT,["cost" => 12]);//mã hóa password
					    forGotPass($pass_mahoa,$username);//cập nhật password mới
					} catch (Exception $e) {
					    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
					}
				}
			}
			header('location:../index.php');
			break;
		default:
			# code...
			break;
	}
?>