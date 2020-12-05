<?php
    include 'model/wishlist.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
               $ma_sp= $_GET['id'];
            include 'view/wishlist.php';
        break;
        case 'addtowish':
            //lay product theo id cate
           $id=$_GET['id'];
           $hinh =$_POST[''];
           $tensp=$_POST[''];
           $gia=$_POST[''];
           addToWish($id ,$hinh,$tensp,$gia);
            include 'view/wishlist.php';
        break;
       
        case 'deletewish':
            $id=$_GET['id'];
            deleteWish($id);
            include 'view/wishlist.php';
        break;

    }
  
?>
