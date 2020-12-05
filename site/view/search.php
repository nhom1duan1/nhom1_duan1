<!-- <div align="center">
    <form action="search.php" method="get">
        Search: <input type="text" name="search" />
        <input type="submit" name="ok" value="search" />
    </form>
</div> -->
<div class="container">
<?php
    foreach ($product as $value) {
        echo '
            <div class="product-item style1 width-20 col-md-3 col-sm-4 col-xs-6 equal-elem">
                <div class="product-inner">
                    <div class="product-thumb">
                        <div class="thumb-inner">
                            <a href="index.php?ctrl=product&action=detail&id='.$value['ma_sp'].'"><img src="'.$value['hinh_anh'].'" alt="p8"></a>
                        </div>
                        <span class="onsale">-50%</span>
                        <a href="#" class="quick-view">Quick View</a>
                    </div>
                    <div class="product-innfo">
                        <div class="product-name"><a href="#">'.$value['ten_sp'].'
                        </a></div>
                        <span class="price">

                                <ins>$'.$value['gia_giam'].'</ins>

                                <del>$'.$value['gia_goc'].'</del>

                            </span>
                        <span class="star-rating">

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <span class="review">5 Review(s)</span>

                            </span>
                        <div class="info-product">
                            <p>Weigh: 8.25 kg</p>
                            <p>Size: One Size Fits All </p>
                            <p>Guarantee: 2 Year</p>
                        </div>
                        <div class="single-add-to-cart">
                            <a href="index.php?ctrl=cart&action=addtocart&id='.$value['ma_sp'].'" class="btn-add-to-cart">Thêm vào giỏ hàng</a>
                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                            <a href="index.php?ctrl=wishlist&action=addtowish&id='.$value['ma_sp'].'" class="wishlist"><i class="fa fa-heart-o"
                                                            aria-hidden="true"></i>Wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
?>
</div>