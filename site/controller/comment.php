<?php
    include 'site/model/comment.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch ($action) {
        case 'addcomment':
            $thoigian=date('Y-m-d H:i:s');
            $ma_sp=$_POST['ma_sp'];
            $ma_kh=$_POST['ma_kh'];
            $noi_dung=$_POST['noi_dung'];
            addNewComment($ma_kh, $ma_sp, $thoigian, $noi_dung);
            echo '
                <script>window.location="index.php?ctrl=product&action=detail&id='.$ma_sp.'"</script>
            ';
            break;
        default:
            # code...
            break;
    }
?>