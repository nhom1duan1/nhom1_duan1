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
function addToOrder($ma_kh,$name,$ghichu,$phone,$diachi,$thanhtien,$ngay)
{
  $query="insert into donhang(ma_donhang,ma_kh,thanh_tien,thoi_gian,ten_nguoinhan,dia_chi,sdt,ghi_chu)
  values(null,'$ma_kh','$thanhtien','$ngay','$name','$diachi','$phone','$ghichu')";
  //INSERT INTO `donhang`(`ma_donhang`, `ma_kh`, `thanh_tien`, `thoi_gian`, `ten_nguoinhan`, `dia_chi`, `sdt`, `ghi_chu`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
  
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
    values('$ma_donhang','$masp','$sl')";
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