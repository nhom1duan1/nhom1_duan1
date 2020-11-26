<?php
   include 'product.php';
   
function addToCart($id){
  
    
   //lay thong tin san pham can them vao gio hang
   $product=showProductbyId($id);
   $bool=false;
   $i=0;
   if(!isset($_SESSION['carts']))
   {
       $_SESSION['carts']=array( '0'=> array("id"=>$id,"name"=> $product['ten_sp'],  "price"=> $product['gia_giam'],"image"=> $product['hinh_anh'],"quantity"=>1));
   }
   else 
   {
     foreach ($_SESSION['carts'] as $item) {
       if($item['id']==$id){
         array_splice($_SESSION['carts'],$i,1,array(array("id"=>$id,"name"=> $product['ten_sp'], "price"=> $product['gia_giam'],"image"=> $product['hinh_anh'],"quantity"=>$item['quantity']+1)));
         $bool=true;
       }
       $i++;
     }
     if($bool==false){
       array_push($_SESSION['carts'],array("id"=>$id,"name"=> $product['ten_sp'],  "price"=> $product['gia_giam'],"image"=> $product['hinh_anh'],"quantity"=>1));
     }
   }
}
function addToOrder($madh,$hinhanh,$gia,$soluong,$phone,$ngay,$gio,$diachi)
{
  $query="insert into donhang(ma_donhang,hinhanh,gia,soluong,ngay_dat,diachi,phone,gio_dat)
  values('$madh','$hinhanh','$gia','$soluong','$diachi','$phone','$ngay','$gio')";
  $lastId = executeReturnID($query);
  return $lastId;//tra ve ma don hang moi vua them
}
function addToOrderDetail($ma_donhang)
{
  foreach ($_SESSION['carts'] as $item) 
  {
    $masp=$item['id'];
    $sl=$item['quantity'];
    $query="insert into chitietdonhang(ma_donhang,ma_sp,soluong)
    values('$ma_donhang','$ma_sp','$soluong')";
    $STH = execute($query);
  }
}
function deleteCart($id){
    $product=showProductbyId($id);
    $i=0;
    if(isset($_SESSION['carts'])){
        foreach($_SESSION['carts'] as $item)
      if($item['id']==$id)
      {
        
          array_splice($_SESSION['carts'],$i,1);
        
        $i++;
      }
  }
}
?>