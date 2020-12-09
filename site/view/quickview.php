      <main class="site-main shopping-cart">
                <div class="container">
                    <ol class="breadcrumb-page">
                        <li><a href="index.php">Trang chủ </a></li>
                        <li class="active"><a href="#">Shopping Cart</a></li>
                    </ol>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <form class="form-cart" method="post">
                                <div class="table-cart">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="tb-image"></th>
                                            <th class="tb-product">Tên sản phẩm</th>
                                            <th class="tb-price">Giá sản phẩm</th>
                                            <th class="tb-qty">Số lượng</th>
                                            <th class="tb-total">Thành tiền</th>
                                            <th class="tb-remove"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            
                                            $tongtien=0;
                                            if(!isset($_SESSION['carts'])){
                                            echo '
                                                <div class="baorong">Bạn chưa chọn sản phẩm nào !</div>
                                                <script>
                                                document.getElementById("thead").style.display="none";
                                                </script>
                                            ';
                                            }
                                            else{ 
                                            foreach ($_SESSION['carts'] as $p){ 
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
                                                    <td class="tb-total">
                                                        <span class="price">'.$p['price']*$p['quantity'].'</span>
                                                    </td>
                                                    <td class="tb-remove">
                                                        <a href="index.php?ctrl=cart&action=deleteCart&id='.$p['id'].'" class="action-remove"><span><i class="flaticon-close"
                                                                                                aria-hidden="true"></i></span></a>
                                                    </td>
                                                </tr>
                                                ';
                                                
                                                $tongtien= $tongtien + $p['price']*$p['quantity'];
                                            } 
                                            } 
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-actions">
                                    <button type="button" class="btn-continue">
                                        <span><a href="index.php?ctrl=product">Tiếp tục mua sắm</a> </span>
                                    </button>
                                </div>
                            </form>
                        </div>