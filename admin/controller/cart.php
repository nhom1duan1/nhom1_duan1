<?php
    include 'model/cart.php';
    $action='index';
  if(isset($_GET['action'])){
    $action=$_GET['action'];
  }
  switch ($action) {
            case 'index':
            $catalogs =getAllCart();
            include 'view/cart/index.php';
            break;

            case 'delete':
            $id=$_GET['ma_donhang'];
            deleteCart($id);
            header('location:index.php?ctrl=cart&action=index');
            break;

            case 'edit':
            $id=$_GET['ma_donhang'];
            include 'view/cart/updateCart.php';
            break;

            case 'update':
            $id=$_POST['id'];
            $tinhtrang=$_POST['tinhtrang'];
            updateCart($id,$tinhtrang);
            header('location:index.php?ctrl=cart&action=index');
            break;

              case 'detail':
            $catalogs =getDetail();
            include 'view/cart/chitietCart.php';
            break;
            default;
        break;
        }
     
?>