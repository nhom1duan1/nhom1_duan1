<?php
    include 'model/product.php'; 
$action='index';
    if(isset($_GET['action'])){
        $action= $_GET['action'];
    }
    switch ($action) {
        case 'brand':
        include 'model/catalogs.php';
         $brand=getBrand();
          $ma_hang=$_GET['id'];
          $product= showProductbyId_loai($ma_hang);
            include 'view/productbyId.php';
       break;
        default:
            # code...
            break;
    }
?>