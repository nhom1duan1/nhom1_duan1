<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
      .top_product {
      background-color: white;
      text-align: center;
      width: 80%;
      margin: 0 auto;
    }

    .box {
      text-decoration: none;
      margin: 2% 4.5%;
      float: left;
      padding: 2%;
      width: 20%;
      height: 250px;
      background-color: white;
      text-align: left;
      border: 1px solid gainsboro;
      position:relative;
      overflow: hidden;
    }

    .imgbox {
      height: 90%;
    }

    .imgbox img {
      width: 100%;
      transform: translate(0, 0);
      transition: transform 0.5s ease;
    }

    .box:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      transition: 0.2s;
    }

    .name {
      font-size: 1.2vw;
      font-weight: bold;
      color: black;
    }

    .new_price {
      color: brown;
      font-size: 1.2vw;
      font-weight: bold;
    }
    .hover{ 
        background: rgba(0, 0, 0, 0.9);
        height: 15%;
        width:100%;
        position: absolute;
        left: 0;
        bottom:0;
        display: none;
        align-items: center;
        justify-content:center;
        color: white;
        font-size: 1.3vw;
        font-weight: 600;
      }
      @keyframes up{
        0%{
          bottom:-50%;
        }
        100%{
          bottom:0;
        }
      }
      .box:hover .hover{
        display: flex;
        animation-name: up;
        animation-duration: 0.5s;
        animation-iteration-count: 1;
      }
      .box:hover .imgbox img{
        transform: scale(1.1);
      }
    </style>
</head>
<body>
    <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="../site/images/banner1.jpg" style="width: 100%" />
        </div>

        <div class="mySlides fade">
          <img src="../site/images/banner2.png" style="width: 100%" />
        </div>

        <div class="mySlides fade">
          <img src="" style="width: 100%" />
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
            setTimeout(showSlides, 3000); // Change image every 2 seconds
          }
        </script>
      </div>
      <div class="top_product">
        <h2>SẢN PHẨM ĐƯỢC XEM NHIỀU NHẤT</h2>
        </div>
</body>
</html>