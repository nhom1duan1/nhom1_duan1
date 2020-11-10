<?php
    include_once('database.php');
    function getAllAccount($username, $password){
        $sql="Select *from account where username='$username' and password=MD5('$password');";
        return queryOne($sql);
    }
?>