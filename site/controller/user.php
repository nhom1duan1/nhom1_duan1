<?php 
    include 'view/newAccount.php';
    if(isset($_POST['addAccount'])){
        include '../model/database.php';
        $fullname=$_POST['fullname'];
        $password=$_POST['password'];
        $password=$_POST['password2'];
        $email=$_POST['txtemail'];
        $SDT=$_POST['txtsdt'];
        execute("INSERT INTO khachhang (ma_kh ,mat_khau ,ho_ten ,email ,dia_chi ,anh_daidien ,so_dt ,phan_quyen ,trang_thai)
		VALUES (NULL , '$pass_mahoa', '$fullName', '$email', '$diaChi', '$path', '$soDienThoai', '$phanQuyen', '1');");
    }
?>