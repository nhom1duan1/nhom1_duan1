<?php
    include_once 'model/cart.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            include('view/cart.php');
        break;
        case 'addtocart':
            //lay product theo id cate
           $id=$_GET['id'];
           addToCart($id);
           echo '<script type="text/javascript">
                 window.location="index.php?ctrl=cart";
        </script>';
        break;
        case 'checkout':
            //luu thong tin don hang
            $fname=$_POST['fullName'];
            $add=$_POST['address'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $ngay=date('Y-m-d H:i:s');//ngay thang nam, gio,.. hien tai
            $madh=addToOrder($fname,$add,$email,$phone,$ngay);
            //luu chi tiet don hang
            addToOrderDetail($madh);
            unset($_SESSION['carts']);//xoa gio hang
           echo '<script type="text/javascript">
                 window.location="index.php";
        </script>';
        break;
        case 'deleteCart':
            $id=$_GET['id'];
            deleteCart($id);
            header('location:index.php?ctrl=cart');
        break;

    }
  
?>
