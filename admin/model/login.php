<?php
    include_once('database.php');
    function getAllAccount($username){
        $sql="Select * from khachhang where email='$username'";
        return queryOne($sql);
    }
    function forGotPass($pass_mahoa,$username)
    {
    	$sql="update khachhang set mat_khau='$pass_mahoa' where email='$username';";
    	execute($sql);
    }
    function updatePassword($pass_mahoa,$email){
		$sql="update khachhang set mat_khau='$pass_mahoa' where email='$email';";
		execute($sql);
		// header('localhost:index.php?ctrl=user');
	}
?>