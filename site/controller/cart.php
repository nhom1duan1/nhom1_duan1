<?php
    include 'model/cart.php';
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
                if (!$_SESSION['username']) {
                    header('location: ../admin/login.php');
                    break;
                }
                else{
                    $id=$_GET['id'];
                    addToCart($id);
                    echo '<script type="text/javascript">
                    window.location="index.php?ctrl=cart";
                    </script>';
                }
        break;
        case 'checkout':
            //luu thong tin don hang
           if(isset($_POST['submit'])){
            $ma_kh=$_POST['ma_kh'];
            $name=$_POST['name'];
            $ghichu=$_POST['ghichu'];
            $phone=$_POST['phone'];
            $diachi=$_POST['diachi'];
            $thanhtien=$_POST['thanhtien'];
            $ngay=date('Y-m-d H:i:s');//ngay thang nam, gio,.. hien tai
            $ma_donhang=addToOrder($ma_kh,$name,$ghichu,$phone,$diachi,$thanhtien,$ngay);
           //addToOrder($madh,$hinhanh,$gia,$soluong,$phone,$ngay,$gio,$diachi)
            //luu chi tiet don hang
            addToOrderDetail($ma_donhang);
            unset($_SESSION['carts']);//xoa gio hang
           echo '<script type="text/javascript">
            alert("Đặt hàng thành công !");
                 window.location="index.php";
        </script>';
           }
        break;
        case 'deleteCart':
            $id=$_GET['id'];
            deleteCart($id);
            header('location:index.php?ctrl=cart');
        break;

    }
  
?>
