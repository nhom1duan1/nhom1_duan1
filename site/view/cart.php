            <!-- MAIN -->
            <main class="site-main shopping-cart">
                <div class="container">
                    <ol class="breadcrumb-page">
                        <li><a href="index-2.html">Home </a></li>
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
                                                        <a href="index.php?ctrl=cart&action=remove&id='.$p['id'].'" class="action-remove"><span><i class="flaticon-close"
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
                                    <button type="submit" class="btn-clean">
                                        <span>Update Shopping Cart</span>
                                    </button>
                                    <button type="submit" class="btn-update">
                                        <span>Xóa toàn bộ giỏ hàng</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <div class="order-summary">
                                <h4 class="title-shopping-cart">Giỏ hàng của bạn</h4>
                                <div class="checkout-element-content">
                                    <span class="order-left">Tính tiền:<span>$<?php echo $tongtien ?></span></span>
                                    <span class="order-left">Phí ship:<span>Miễn phí</span></span>
                                    <span class="order-left">Tổng:<span>$<?php echo $tongtien ?></span></span>
                                    
                                    <button type="submit" class="btn-checkout">
                                        <span>Xác nhận</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-recent-view single">
                    <div class="container">
                        <div class="title-of-section">You may be also interested</div>
                        <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                            data-autoplay="false" data-dots="false" data-loop="true" data-margin="30"
                            data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":4}}'>
                            <div class="product-item style1">
                                <div class="product-inner equal-elem">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="assets/images/home1/r1.jpg" alt="r1"></a>
                                        </div>
                                        <span class="onsale">-50%</span>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Modern Watches</a></div>
                                        <span class="price">

                                                <ins>$229.00</ins>

                                                <del>$259.00</del>

                                            </span>
                                        <span class="star-rating">

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <span class="review">5 Review(s)</span>

                                            </span>
                                        <div class="group-btn-hover style2">
                                            <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                                            aria-hidden="true"></i></a>
                                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a>
                                            <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item style1">
                                <div class="product-inner equal-elem">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="assets/images/home1/r2.jpg" alt="r2"></a>
                                        </div>
                                        <span class="onnew">new</span>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Cellphone Factory</a></div>
                                        <span class="price price-dark">

                                                <ins>$229.00</ins>

                                            </span>
                                        <span class="star-rating">

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <span class="review">5 Review(s)</span>

                                            </span>
                                        <div class="group-btn-hover style2">
                                            <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                                            aria-hidden="true"></i></a>
                                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a>
                                            <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item style1">
                                <div class="product-inner equal-elem">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="assets/images/home1/r3.jpg" alt="r3"></a>
                                        </div>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Smartphone 4 GB</a></div>
                                        <span class="price price-dark">

                                                <ins>$229.00</ins>

                                            </span>
                                        <span class="star-rating">

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <span class="review">5 Review(s)</span>

                                            </span>
                                        <div class="group-btn-hover style2">
                                            <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                                            aria-hidden="true"></i></a>
                                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a>
                                            <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item style1">
                                <div class="product-inner equal-elem">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="assets/images/home1/r4.jpg" alt="r4"></a>
                                        </div>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Extra Bass On</a></div>
                                        <span class="price price-dark">

                                                <ins>$229.00</ins>

                                            </span>
                                        <span class="star-rating">

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <span class="review">5 Review(s)</span>

                                            </span>
                                        <div class="group-btn-hover style2">
                                            <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                                            aria-hidden="true"></i></a>
                                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a>
                                            <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item style1">
                                <div class="product-inner equal-elem">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="assets/images/home1/r5.jpg" alt="r5"></a>
                                        </div>
                                        <span class="onsale">-50%</span>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Smartwatch</a></div>
                                        <span class="price">

                                                <ins>$229.00</ins>

                                                <del>$259.00</del>

                                            </span>
                                        <span class="star-rating">

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <span class="review">5 Review(s)</span>

                                            </span>
                                        <div class="group-btn-hover style2">
                                            <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                                            aria-hidden="true"></i></a>
                                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a>
                                            <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item style1">
                                <div class="product-inner equal-elem">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="#"><img src="assets/images/home1/r6.jpg" alt="r6"></a>
                                        </div>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a href="#">Modern Watches</a></div>
                                        <span class="price price-dark">

                                                <ins>$229.00</ins>

                                            </span>
                                        <span class="star-rating">

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <span class="review">5 Review(s)</span>

                                            </span>
                                        <div class="group-btn-hover style2">
                                            <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                                            aria-hidden="true"></i></a>
                                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a>
                                            <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main><!-- end MAIN -->