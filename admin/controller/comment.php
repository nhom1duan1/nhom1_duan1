<?php
    include_once 'model/comment.php';
    
 $action='index';
  if(isset($_GET['action'])){
    $action=$_GET['action'];
  }
  switch ($action) {
            case 'index':
             
            $comment=getAllComment();
            include 'view/comment/index.php';
            break;
            
            case 'delete':
              $id=$_GET['ma_binhluan'];
              deleteComment($id);
              header('location: index.php?ctrl=comment&action=index');
            break;
            default;
        break;
        }
?>