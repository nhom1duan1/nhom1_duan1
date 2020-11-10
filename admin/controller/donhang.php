<?php
    include 'model/donhang.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }

    switch($action){
        case 'index':
            $donhang=getAllDonhang();
            include 'view/donhang/index.php';
        break;
        case 'xemchitiet':
            include 'model/product.php';
            $id_donhang=$_GET['id_donhang'];
            $chitietdonhang=getChitietdonhang($id_donhang);
            include 'view/donhang/chitietdonhang.php';
        break;
    }

?>