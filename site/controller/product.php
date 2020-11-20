<?php
$action='index';
    if(isset($_GET['action'])){
        $action= $_GET['action'];
    }
    switch ($action) {
        case 'index':  
            include 'view/product.php';
        break;
        case 'detail':
            include 'view/detail_product.php';
        break;
        default:
            # code...
            break;
    }
?>