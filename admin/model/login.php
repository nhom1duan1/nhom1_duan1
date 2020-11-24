<?php
    include_once('database.php');
    function getAllAccount($username){
        $sql="Select * from khachhang where email='$username'";
        return queryOne($sql);
    }
?>