<!-- ------------------------------------------------------- -->
<div class="container">
    <ol class="breadcrumb-page">
        <li><a href="index-2.html">Home </a></li>
        <li class="active"><a href="#">Our news</a></li>
    </ol>
</div>
<div class="container">
    <div class="row">
        <div class="float-none float-right">
            <div class="main-content">
                <div class="post-grid post-items">
                    <?php 
                    foreach ($post as $key) { echo '
                    <div class="post-grid-item col-md-6">
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="#"><img src="'.$key['anh_nen'].'"></a>
                                <span class="date">'.$key['ngay_dan'].'</span>
                            </div>
                            <div class="post-item-info">
                                <h3 class="post-name"><a href="index.php?ctrl=news&act=blog&id='.$key['id'].'">'.$key['tieu_de'].'</a>
                                </h3>
                                <div class="post-metas">
                                    <span class="author">Post by: <span>Admin</span></span>
                                    <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>3 Comments</span>
                                </div>
                                <div class="post-content">
                                    <p>'.$key['tom_tat'].'...</p>
                                    <a href="index.php?ctrl=news&act=blog&id='.$key['id'].'" class="read-more">Xem Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';}?>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>