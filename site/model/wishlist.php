<?php
   include 'product.php';
   

  function addToWish($id ,$hinh,$tensp,$gia){
     $sql="INSERT INTO wishlist(ma,hinh_anh,ten_sp,gia_giam)
     values(null,'$hinh','$tensp','$gia') ";
      $lastId = executeReturnID($sql);
      return $lastId;
   //lay thong tin san pham can them vao gio hang
   $product=showProductbyId($id);
   $bool=false;
   $i=0;
   if(!isset($_SESSION['wishlist']))
   {
       $_SESSION['wishlist']=array( '0'=> array("id"=>$id,"name"=> $product['ten_sp'],  "price"=> $product['gia_giam'],"image"=> $product['hinh_anh'],"quantity"=>1));
   }
   else 
   {
     foreach ($_SESSION['wishlist'] as $item) {
       if($item['id']==$id){
         array_splice($_SESSION['wishlist'],$i,1,array(array("id"=>$id,"name"=> $product['ten_sp'], "price"=> $product['gia_giam'],"image"=> $product['hinh_anh'],"quantity"=>$item['quantity']+1)));
         $bool=true;
       }
       $i++;
     }
     if($bool==false){
       array_push($_SESSION['wishlist'],array("id"=>$id,"name"=> $product['ten_sp'],  "price"=> $product['gia_giam'],"image"=> $product['hinh_anh'],"quantity"=>1));
     }
   }
  }

function deleteWish($id){
    $product=showProductbyId($id);
    $i=0;
    if(isset($_SESSION['wishlist'])){
        foreach($_SESSION['wishlist'] as $item)
      if($item['id']==$id)
      {
        
          array_splice($_SESSION['wishlist'],$i,1);
        
        $i++;
      }
  }
}
?>