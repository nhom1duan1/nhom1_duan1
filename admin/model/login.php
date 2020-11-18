<?php
    include_once('database.php');
    function getAllAccount($username, $password){
        $sql="Select *from khachhang where email='$username' and mat_khau=MD5('$password');";
        return queryOne($sql);
    }
?>