<div class="container">
            <ol class="breadcrumb-page">
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active"><a href="#">Chi tiết sản phẩm</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="product-content-single">
                <div class="row">
                    <div class="col-md-6 col-sm-12 padding-right">
                        <div class="product-media">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img id="img_zoom" data-zoom-image="<?php echo $product['hinh_anh'] ?>"
                                     src="<?php echo $product['hinh_anh'] ?>" alt="">
                                <a href="#" class="btn-zoom open_qv"><i class="flaticon-magnifying-glass"
                                                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="product-preview image-small product_preview">
                                <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true"
                                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="10"
                                     data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                                    <a href="#" data-image="<?php echo $product['hinh_anh'] ?>"
                                       data-zoom-image="<?php echo $product['hinh_anh'] ?>">
                                        <img src="<?php echo $product['hinh_anh'] ?>"
                                             data-large-image="<?php echo $product['hinh_anh'] ?>" alt="i1">
                                    </a>
                                    <a href="#" data-image="<?php echo $product['hinh_anh'] ?>"
                                       data-zoom-image="<?php echo $product['hinh_anh'] ?>">
                                        <img src="<?php echo $product['hinh_anh'] ?>"
                                             data-large-image="<?php echo $product['hinh_anh'] ?>" alt="i1">
                                    </a>
                                    <a href="#" data-image="<?php echo $product['hinh_anh'] ?>"
                                       data-zoom-image="<?php echo $product['hinh_anh'] ?>">
                                        <img src="<?php echo $product['hinh_anh'] ?>"
                                             data-large-image="<?php echo $product['hinh_anh'] ?>" alt="i1">
                                    </a>
                                    <a href="#" data-image="<?php echo $product['hinh_anh'] ?>"
                                       data-zoom-image="<?php echo $product['hinh_anh'] ?>">
                                        <img src="<?php echo $product['hinh_anh'] ?>"
                                             data-large-image="<?php echo $product['hinh_anh'] ?>" alt="i1">
                                    </a>
                                    <a href="#" data-image="<?php echo $product['hinh_anh'] ?>"
                                       data-zoom-image="<?php echo $product['hinh_anh'] ?>">
                                        <img src="<?php echo $product['hinh_anh'] ?>"
                                             data-large-image="<?php echo $product['hinh_anh'] ?>" alt="i1">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="product-info-main">
                            <div class="product-name"><a href="#"><?php echo $product['ten_sp'] ?></a></div>
                            <span class="star-rating">

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <span class="review">5 Review(s)</span>

                                </span>
                            <div class="product-info-stock-sku">
                                <div class="stock available">
                                    <span class="label-stock">Tình trạng: </span>Còn hàng
                                </div>
                            </div>
                            <div class="product-infomation">
                               <?php
                                    echo '
                                        <p>'.$product['mo_ta'].'<p>
                                    ';
                               ?>
                            </div>
                            <div class="product-info-price">
                                <span class="price">

                                    <ins>$<?php echo $product['gia_giam'] ?></ins>

                                    <del>$<?php echo $product['gia_goc'] ?></del>

                                </span>
                                <div class="quantity">
                                    <h6 class="quantity-title">Số lượng:</h6>
                                    <div class="buttons-added">
                                        <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                    </div>
                                </div>
                                <div class="single-add-to-cart">
                                    <a href="index.php?ctrl=cart&action=addtocart&id=<?php echo $product['ma_sp'] ?>" class="btn-add-to-cart">Thêm vào giỏ hàng</a>
                                    <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>So sánh</a>
                                    <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Danh sách yêu thích</a>
                                </div>
                            </div>
                            <div class="group-btn-share">
                                <a href="#"><img src="assets/images/detail/btn1.png" alt="btn1"></a>
                                <a href="#"><img src="assets/images/detail/btn2.png" alt="btn1"></a>
                                <a href="#"><img src="assets/images/detail/btn3.png" alt="btn1"></a>
                                <a href="#"><img src="assets/images/detail/btn4.png" alt="btn1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tab-details-product">
                <ul class="box-tab nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Mô tả sản phẩm</a></li>
                    <li><a data-toggle="tab" href="#tab-2">Thông tin sản phẩm</a></li>
                    <li><a data-toggle="tab" href="#tab-3">Bình luận khách hàng</a></li>
                </ul>
                <div class="tab-container">
                    <div id="tab-1" class="tab-panel active">
                        <div class="box-content">
                            <?php
                                    echo '
                                        <p>'.$product['mo_ta'].'<p>
                                    ';
                               ?>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-panel">
                        <div class="box-content">
                            <p>ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla ullamcorper,
                                interdum dolor vel, dictum justo. Vivamus finibus lorem id auctor
                                placerat. Ut fermentum nulla lectus, in laoreet metus ultrices ac. Integer eleifend urna
                                ultricies enim facilisis, vel fermentum eros porta.
                            </p>
                            <span>Weights & Dimensions</span>
                            <div class="parameter">
                                <p>Overall: 40" H x 35.5" L x 35.5" W</p>
                                <p>Bar height:40"</p>
                                <p>Overall Product Weight: 88 lbs</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-panel">
                        <div class="box-content">
                                <div class="form-content">
                                    <?php
                                        include 'model/comment.php';
                                        $ma_sp=$product['ma_sp'];
                                        $binhluan=getAllComment($ma_sp);
                                        $dem=0;
                                        foreach ($binhluan as $value) {
                                            $dem= $dem+1;
                                        };
                                    ?>
                                    
                                    <h1 class="comments-title">Bình Luận (<?php echo $dem?>)</h1>
                                    <?php
                                        $ma_sp=$product['ma_sp'];
                                        $binhluan=getAllComment($ma_sp);
                                        foreach ($binhluan as $value) {
                                            $ma_kh= $value['ma_kh'];
                                            $khachhang=getKhachhang($ma_kh);
                                            echo '
                                            <div class="be-comment">
                                                <div class="be-img-comment">	
                                                    <a href="#">
                                                        <img src="'.$khachhang['anh_daidien'].'" alt="" class="be-ava-comment">
                                                    </a>
                                                </div>
                                                <div class="be-comment-content">
                                                    
                                                        <span class="be-comment-name">
                                                            <a href="blog-detail-2.html">'.$khachhang['ho_ten'].'</a>
                                                            </span>
                                                        <span class="be-comment-time">
                                                            <i class="fa fa-clock-o"></i>
                                                            '.$value['thoigian'].'
                                                        </span>

                                                    <p class="be-comment-text">
                                                        '.$value['noi_dung'].'
                                                    </p>
                                                </div>
                                            </div>
                                            ';
                                        };
                                    ?>
                                    
                                    <h1 class="comments-title">Gửi bình luận</h1>
                                    
                                    <form class="form-block" action="index.php?ctrl=comment&action=addcomment" method="post">
                                        <div class="row">
                                            <div class="col-xs-12">									
                                                <div class="form-group">
                                                    <textarea name="noi_dung" class="form-input" required="" placeholder="Nhập bình luận tại đây"></textarea>
                                                    <input name="ma_kh" hidden type="text" value="<?php echo $_SESSION['id'] ?>">
                                                    <input name="ma_sp" hidden type="text" value="<?php echo $product['ma_sp']?>">
                                                </div>
                                            </div>
                                            <?php
                                                if(!isset($_SESSION['username'])){
                                                    echo '
                                                    <div class="col-xs-12">
                                                        <div class="alert alert-warning">
                                                            <strong>Cảnh báo!</strong> Bạn phải đăng nhập để gửi được bình luận. <a href="../admin/login.php">Đăng nhập ngay</a>
        
                                                        </div>
                                                    </div>
                                                    
                                                    ';
                                                    
                                                }
                                                else{
                                                    echo'
                                                    <button class="btn btn-danger pull-right" id="btn_binhluan">Gửi</button>
                                                    ';
                                                }
                                            ?>
                                    
                                            
                                        </div>
                                    </form>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="block-recent-view">
            <div class="container">
                <div class="title-of-section"><span>Có thể bạn thích</span></div>
                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="30"
                     data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1000":{"items":4}}'>
                      <?php
                      
                     foreach ($all as $koy){

                     echo '
                       
                      <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="index.php?ctrl=product&action=detail&id='.$koy['ma_sp'].'"><img src="../images/'.$koy['hinh_anh'].'" alt=""></a>
                                </div>
                                <span class="onsale">-50%</span>
                                  <a href="#" class="quick-view">Quick View</a> 
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">'.$koy['ten_sp'].'</a></div>
                                <span class="price">

                                        <ins>$'.$koy['gia_giam'].'</ins>

                                        <del>$'.$koy['gia_goc'].'</del>

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
                   ';
                     }?>
                   </div>
       </div>
       </div>
        </div>