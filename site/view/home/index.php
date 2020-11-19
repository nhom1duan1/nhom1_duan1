<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="view/home/style.css" />
  </head>
  <body>
    <div class="center">
      <!--Banner-->
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="images/banner1.jpg" style="width: 100%" />
        </div>

        <div class="mySlides fade">
          <img src="images/banner2.jpg" style="width: 100%" />
        </div>
        <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
              slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 1000); // Change image every 2 seconds
          }
        </script>
      </div>
      <!-- Hết Banner-->

      <!--Tin tức-->
      <div class="tintuc">
        <div class="title">
          <a href="">TIN CÔNG NGHỆ</a>
        </div>
        <div class="content">
          <div class="tin">
            <div class="hinh-tin">
              <img src="images/tin1.jpg" alt="" />
            </div>
            <div class="title-tin">Đánh giá camera Galaxy M51: Dành cho người thích sáng tạo nội dung hình ảnh suốt ngày đêm</div>
          </div>
          <div class="tin">
            <div class="hinh-tin">
              <img src="images/tin1.jpg" alt="" />
            </div>
            <div class="title-tin">...</div>
          </div>
          <div class="tin">
            <div class="hinh-tin">
              <img src="images/tin1.jpg" alt="" />
            </div>
            <div class="title-tin">...</div>
          </div>
          <div class="tin">
            <div class="hinh-tin">
              <img src="images/tin1.jpg" alt="" />
            </div>
            <div class="title-tin">...</div>
          </div>
        </div>
      </div>
      <!--Hết tin tức-->

      <!--Top sản phẩm-->
      <div class="topproduct">
        <div class="title-top"><h3>ĐIỆN THOẠI NỔI BẬT NHẤT</h3></div>
        <div class="content-top">
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
        </div>
      </div>

      <!--Top sản phẩm-->
      <div class="topproduct">
        <div class="title-top"><h3>LAPTOP NỔI BẬT NHẤT</h3></div>
        <div class="content-top">
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
        </div>
      </div>

      <!--Top sản phẩm-->
      <div class="topproduct">
        <div class="title-top"><h3>PHỤ KIỆN NỔI BẬT NHẤT</h3></div>
        <div class="content-top">
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
          <a href="#" class="box">
            <div class="imgbox">
              <img
                src="images/iphone-xs-max-64gb-like-new_2.jpg"
                alt=""
              />
            </div>
            <div class="name">Iphone Xs Max</div>
            <div class="new_price">15.999.000 vnđ</div>
            <div class="hover">Xem chi tiết</div>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
