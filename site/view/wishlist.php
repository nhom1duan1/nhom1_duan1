<main class="site-main shopping-cart">
                <div class="container">
                    <ol class="breadcrumb-page">
                        <li><a href="index.php">Trang chủ </a></li>
                        <li class="active"><a href="#">Danh sách yêu thích</a></li>
                    </ol>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-cart" method="post">
                                <div class="table-cart">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="tb-image"></th>
                                            <th class="tb-product">Tên sản phẩm</th>
                                            <th class="tb-price">Giá sản phẩm</th>
                                            <th class="tb-qty">Số lượng</th>
                                          
                                            <th class="tb-add"></th>
                                            <th class="tb-remove"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            
                                          
                                            foreach ($_SESSION['wishlist'] as $p){ 
                                                echo '
                                                
                                                <tr>
                                                    <td class="tb-image"><a href="#" class="item-photo"><img src="'.$p['image'].'" width="100px" /></a></td>
                                                    <td class="tb-product">
                                                        <div class="product-name"><a href="#">'.$p['name'].'</a></div>
                                                    </td>
                                                    <td class="tb-price">
                                                        <span class="price">$'.$p['price'].'</span>
                                                    </td>
                                                    <td class="tb-qty">
                                                        <div class="quantity">
                                                            <div class="buttons-added">
                                                                <input name="soluong" type="text" value="'.$p['quantity'].'" title="Qty" class="input-text qty text"
                                                                    size="1">
                                                                <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                                                <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    <td class="tb-add">
                                                     <a href="index.php?ctrl=cart&action=addtocart&id='.$p['id'].'" class="btn-add-to-cart">Thêm vào giỏ hàng</a>
                                                     </td>
                                                    <td class="tb-remove">
                                                        <a href="index.php?ctrl=wishlist&action=deletewish&id='.$p['id'].'" class="action-remove"><span><i class="flaticon-close"
                                                                                                aria-hidden="true"></i></span></a>
                                                    </td>
                                                </tr>
                                                ';
                                                
                                              
                                            } 
                                        
                                        ?>
                                        </tbody>
                                       
                                    </table>
                                      <div class="cart-actions">

                                    <button type="button" class="btn-continue">
                                        <span><a href="index.php">Tiếp tục mua sắm</a> </span>
                                    </button>
                                    </div>
                                    
                                </div>

                                
                                        </form>