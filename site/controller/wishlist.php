<?php
    include 'model/wishlist.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
      
        case 'addtowish':
            //lay product theo id cate
           $id=$_GET['id'];
           addToWish($id);
            include 'view/wishlist.php';
        break;
       
        case 'deletewish':
            $id=$_GET['id'];
            deleteWish($id);
            include 'view/wishlist.php';
        break;

    }
  
?>
