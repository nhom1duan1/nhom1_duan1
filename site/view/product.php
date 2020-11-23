<div class="container">
            <ol class="breadcrumb-page">
                <li><a href="index-2.html">Trang Chủ</a></li>
                <li class="active"><a href="#">Sản phẩm</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 float-none float-right">
                    <div class="main-content">
                        <div class="promotion-banner style-3">
                            <a href="#" class="banner-img"><img src="assets/images/product/banner-product.jpg"
                                                                alt="banner-product"></a>
                            <div class="promotion-banner-inner">
                                <h4>Lựa chọn hàng đầu</h4>
                                <h3>Bộ sưu tập đồng hồ tốt nhất</h3>
                                <a class="banner-link" href="grid-product.html">Xem ngay</a>
                            </div>
                        </div>
                        <div class="toolbar-products">
                            <h4 class="title-product">
                                TẤT CẢ SẢN PHẨM
                            </h4>
                            <div class="toolbar-option">
                                <div class="toolbar-sort">
                                    <select title="sort" class="chosen-select sorter-options form-control">
                                        <option selected="selected" value="position">Độ phổ biến</option>
                                        <option value="name">Tên</option>
                                        <option value="price">Giá</option>
                                    </select>
                                </div>
                                <div class="toolbar-per">
                                    <select title="limit" class="chosen-select limiter-options form-control">
                                        <option selected="selected" value="6">Hiển thị 10</option>
                                        <option value="15">Hiển thị 20</option>
                                        <option value="30">Hiển thị 30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="products products-list products-grid equal-container auto-clear">
                            <?php
                                foreach ($product as $value) {
                                    echo '
                                        <div class="product-item style1 width-30 col-md-4 col-sm-3 col-xs-6 equal-elem">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href="index.php?ctrl=product&action=detail"><img src="'.$value['hinh_anh'].'" alt="p8"></a>
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
                                                        <a href="#" class="btn-add-to-cart">Thêm vào giỏ hàng</a>
                                                        <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                        <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o"
                                                                                        aria-hidden="true"></i>Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
                            ?>
                        </div>
                        <div class="pagination">
                            <ul class="nav-links">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="back-next"><a href="#">Next</a></li>
                            </ul>
                            <span class="show-resuilt">Showing 1-8 of 12 result</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="col-sidebar">
                        <div class="filter-options">
                            <div class="block-title">Lọc theo</div>
                            <div class="block-content">
                                <div class="filter-options-item filter-categori">
                                    <div class="filter-options-title">Loại sản phẩm</div>
                                    <div class="filter-options-content">
                                        <ul>
                                            <?php
                                                foreach ($catalogs as $value) {
                                                    echo '
                                                        <li><label class="inline"><a href="index.php?ctrl=product&action=showbyId&id='.$value['ma_loai'].'">'.$value['ten_loai'].'</a></label></li>
                                                    ';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-options-item filter-brand">
                                    <div class="filter-options-title">Hãng sản xuất</div>
                                    <div class="filter-options-content">
                                        <ul>
                                            <li><label class="inline"><input type="checkbox"><span class="input"></span>Apple</label>
                                            </li>
                                            <li><label class="inline"><input type="checkbox"><span class="input"></span>Samsung</label>
                                            </li>
                                            <li><label class="inline"><input type="checkbox"><span class="input"></span>Lenovo
                                            </label></li>
                                            <li><label class="inline"><input type="checkbox"><span class="input"></span>Dell
                                            </label></li>
                                            <li><label class="inline"><input type="checkbox"><span class="input"></span>Tosiba
                                            </label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-options-item filter-price">
                                    <div class="filter-options-title">Giá</div>
                                    <div class="filter-options-content">
                                        <div class="price_slider_wrapper">
                                            <div data-label-reasult="Price:" data-min="0" data-max="3000" data-unit="$"
                                                 class="slider-range-price " data-value-min="85" data-value-max="2000">
                                                <span class="text-right">Lọc</span>
                                            </div>
                                            <div class="price_slider_amount">
                                                <div class="price_label">
                                                    Price: <span class="from">$85</span>-<span class="to">$2000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-banner-sidebar">
                            <a href="#"><img src="assets/images/product/banner-sidebar.jpg" alt="banner-sidebar"></a>
                            <div class="promotion-banner-inner">
                                <h4>Fly Drone</h4>
                                <h3>Tincidunt interdum senectus fames sociis sem platea </h3>
                                <a class="banner-link" href="grid-product.html">Shop now</a>
                            </div>
                        </div>
                        