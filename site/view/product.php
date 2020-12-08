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
                            <a href="#" class="banner-img"><img src="site/assets/images/product/banner-product.jpg"
                                                                alt="banner-product"></a>
                            <div class="promotion-banner-inner">
                                <h4>Lựa chọn hàng đầu</h4>
                                <h3>Bộ sưu tập đồng hồ tốt nhất</h3>
                                <a class="banner-link" href="index.php?ctrl=product&action=showbyId&id=5">Xem ngay</a>
                            </div>
                        </div>
                        <div class="toolbar-products">
                            <h4 class="title-product">
                                TẤT CẢ SẢN PHẨM
                            </h4>
                            <div class="toolbar-option">
                                <div class="toolbar-sort">
                                    
                                    <?php
                                        if(isset($_GET['sort'])){
                                            $s=$_GET['sort'];
                                        }
                                        else{
                                            $s="see";
                                        }
                                        echo '
                                        <script>
                                        document.getElementbyId("'.$s.'").style.color="red";
                                    </script>
                                        ';
                                    ?>
                                    <select title="sort" name="sort" id="sort" class="chosen-select sorter-options form-control" onchange="locationSort();">
                                        <option id="see" name="see" value="see">Độ phổ biến</option>
                                        <option id="nameaz" name="nameaz" value="nameaz">Tên A-Z</option>
                                        <option id="nameza" name="nameza" value="nameza">Tên Z-A</option>
                                        <option id="pricetop" name="pricetop" value="pricetop">Giá từ cao đến thấp</option>
                                        <option id="pricedown" name="pricedown" value="pricedown">Giá từ thấp đến cao</option>
                                    </select>
                                <script type="text/javascript">
                                        function locationSort(){
                                            var sort = document.getElementById('sort').value;
                                            window.location="index.php?ctrl=product&action=product&sort="+sort;
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="products products-list products-grid equal-container auto-clear">
                            <?php
                                foreach ($product as $value) {
                                    echo '
                                        <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href="index.php?ctrl=product&action=detail&id='.$value['ma_sp'].'"><img src="images/'.$value['hinh_anh'].'" alt="p8"></a>
                                                    </div>
                                                    <span class="onsale">-50%</span>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="#">'.$value['ten_sp'].'
                                                    </a></div>
                                                    <span class="price">

                                                            <ins>'.$value['gia_giam'].'-VNĐ</ins>

                                                            <del>'.$value['gia_goc'].'-VNĐ</del>

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
                                <?php
                                $sort='';
                                if (isset($_GET['action'])) {
                                    $action=$_GET['action'];
                                }
                                if (isset($_GET['sort'])) {
                                    $sort="&sort=".$_GET['sort'];
                                }
                                $i=1;
                                $total_page=ceil($total['totalrecord']/$limit);
                                while($i<=$total_page){
                                    echo 
                                    '
                                    <li class="active"><a href="index.php?ctrl=product&action='.$action.$sort.'&current_page='.$i.'">'.$i.'</a></li>
                                    ';
                                    $i++;
                                }
                            ?>
                            </ul>
                            <span class="show-resuilt">Hiển thị 9 của tất cả sản phẩm</span>
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
                                            <?php
                                                foreach ($brand as $value) {
                                                    echo '
                                                        <li><label class="inline"><a href="index.php?ctrl=product&action=brand&id='.$value['ma_hang'].'">'.$value['hang'].'</a></label></li>
                                                    ';
                                                }
                                            ?>
                                            
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
                       
                        