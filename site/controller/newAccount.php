<?php 
	include 'site/view/newAccount.php';
	include 'site/model/user.php';
	if (isset($_POST['add'])) {
		$fullName=$_POST['fullName'];
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		$email=$_POST['txtEmail'];
		$diaChi=$_POST['txtDC'];
		($_POST['avatar']!=null)?$avatar=$_POST['avatar']:$avatar='1.img';
		$path='images/'.$avatar;
		$soDienThoai=$_POST['txtSDT'];
		if ($password==$password2 && $password!='') {
				//$email=getAllAccount($username);
				$account= getEmail($email);
				if ($email==($account['email'])) {
					echo '<script>alert("tài khoản đã tồn tại");window.location="index.php?ctrl=newAccount";</script>';
				}
				else{
					//https://github.com/PHPMailer/PHPMailer/tree/master
					$pass_mahoa=password_hash($password, PASSWORD_BCRYPT,["cost"=>12]);
					addAccount($fullName,$pass_mahoa,$email,$diaChi,$path,$soDienThoai);
					include 'PHPMailer/class.phpmailer.php';
					include 'PHPMailer/class.smtp.php';
					require 'PHPMailerAutoload.php';
					// Instantiation and passing `true` enables exceptions
					$mail = new PHPMailer(true);
					try {
						
					    //Server settings
					    $mail -> charSet = "UTF-8";
					    $mail->SMTPDebug = 2;                      // Enable verbose debug output
					    $mail->isSMTP();                                            // Send using SMTP
					    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
					    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
					    $mail->Username   = 'nhom1phpmailer@gmail.com';                     // SMTP username
					    $mail->Password   = 'duan12020@123';                               // SMTP password
					    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
					    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

					    //Recipients
					    $mail->setFrom('nhom1phpmailer@gmail.com', 'Fshop');
					    $mail->addAddress($email, 'tai khoản của bạn');

					    $mail->addReplyTo('nhom1phpmailer@gmail.com');
					    // Content
					    $mail->isHTML(true);// Set email format to HTML
					    $password=rand(100000,999999);//tạo password mới
					    $mail->Subject = 'Fshop';//tiêu đề
					    $mail->Body = '<h1>Chào mừng bạn đến với Fshop</h1><img src="http://shopdocongnghe.000webhostapp.com/site/assets/images/logo.png" width="250px"><p><span>Bạn đã tạo tài khoản thành công !!</span><br><a href="http://shopdocongnghe.000webhostapp.com/admin/login.php">Đăng nhập ngay</a></p>';//body mail
					    
					    //thông báo đã gửi mail đươc hây chưa 
					    if (!$mail->send()) {
					    	echo "gửi không thành công";
					    	//echo 'mail Error: '.$mail->ErrorInfo;
					    }
					    echo 'Message has been sent';
					 //    $pass_mahoa=password_hash($password, PASSWORD_BCRYPT,["cost" => 12]);//mã hóa password
						// forGotPass($pass_mahoa,$username);//cập nhật password mới
					    //echo "<script>window.location='../login.php';</script>";
					} catch (Exception $e) {
					    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
					}
				}
			echo '<script>alert("Đăng ký thành công");window.location="http://shopdocongnghe.000webhostapp.com";</script>';
		}
	}
?>