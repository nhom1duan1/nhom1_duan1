<?php
    include 'model/product.php';
    $action='index';
    if(isset($_GET['action'])){
       $action =$_GET['action'];
    }

    switch ($action) {
        case 'index': 
            $product=getAllProduct();
            include 'view/chart/bieudocot.php';
            break;
        
        case 'bieudotron': 
            $product=getAllProduct();
            include 'view/chart/bieudotron.php';
            break;
        case 'bieudocot': 
            $product=getAllProduct();
            include 'view/chart/bieudocot.php';
            break;
        case 'bieudobang': 
            $product=getAllProduct();
            include 'view/chart/bieudobang.php';
            break;
        default:
            # code...
            break;
    }

    
?>