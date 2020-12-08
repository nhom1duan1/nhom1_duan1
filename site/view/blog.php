        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="index-2.html">Home </a></li>
                <li class="active"><a href="#">blog</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="banner-paralax">
                <h1><?php echo $post['tieu_de']; ?></h1>
                <a href="#"><img src="<?php echo $post['anh_nen']; ?>" alt="banner-paralax"></a>
            </div>
        </div>
        <div class="container">
            <?php echo $post['noi_dung']; ?>            
        </div>
        <br><br>