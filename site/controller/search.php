<?php
    include 'model/search.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            $search=$_GET['search'];
            $product=byName($search);
            include ('view/search.php');
            break;
    }
?>