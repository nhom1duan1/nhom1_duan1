<?php
    include_once ('database.php');
    function getAllComment(){
        $sql="SELECT * FROM binhluan ORDER by ma_binhluan";
        return query($sql);
    }
    function deleteComment($id){
        $sql="DELETE FROM binhluan WHERE ma_binhluan='$id'";
        execute($sql);
    }
?>