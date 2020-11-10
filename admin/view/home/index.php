<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        
      }
      .box {
        background-color: whitesmoke;
        width: 25%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
        float: left;
        margin: 2% 4.1%;
      }
      .box:hover{
        background-color: white;
        color: white;
      }
      .box a {
        text-decoration: none;
        color: white;
      }
      .top {
        font-size: 1.7vw;
        text-align: center;
        color: darkslategrey;
        padding: 2% 0;
        font-family: sans-serif;
        font-weight: bold;
      }
      .center {
        min-height: 130px;
        display: flex;
        justify-content: center;
      }
      .center img {
        width: 40%;
        margin: 0 auto;
        display: block;
      }
      .bot {
        min-height: 30px;
        overflow: hidden;
        padding: 2% 0;
      }
      .button {
        background-color: darkslategrey;
        display: block;
        width: 30%;
        padding: 2% 5%;
        margin: 0 auto;
        text-align: center;
        border-radius: 50px;
      }
      .button:hover{
        background-color: black;
        transition: 0.2s;
      }
    </style>
  </head>
  <body>
    <a href="index.php?ctrl=donhang">
      <div class="box mgright">
        <div class="top">ĐƠN HÀNG</div>
        <div class="center">
          <img src="../site/images/donhang.png" alt="" />
        </div>
        <div class="bot">
          <a href="" class="button">Xem ngay</a>
        </div>
      </div>
    </a>
    <a href="index.php?ctrl=product">
      <div class="box mgright">
        <div class="top">SẢN PHẨM</div>
        <div class="center">
          <img src="../site/images/sanpham.png" alt="" />
        </div>
        <div class="bot">
          <a href="" class="button">Xem ngay</a>
        </div>
      </div>
    </a>
    <a href="">
      <div class="box">
        <div class="top">KHÁCH HÀNG</div>
        <div class="center">
          <img src="../site/images/khachhang.png" alt="" />
        </div>
        <div class="bot">
          <a href="" class="button">Xem ngay</a>
        </div>
      </div>
    </a>
    <a href="index.php?ctrl=catalog">
      <div class="box mgright">
        <div class="top">LOẠI SẢN PHẨM</div>
        <div class="center">
          <img src="../site/images/nhacungcap.png" alt="" />
        </div>
        <div class="bot">
          <a href="index.php?ctrl=catalog" class="button">Xem ngay</a>
        </div>
      </div>
    </a>
    <a href="">
      <div class="box mgright">
        <div class="top">NHÂN VIÊN</div>
        <div class="center">
          <img src="../site/images/nhanvien.png" alt="" />
        </div>
        <div class="bot">
          <a href="" class="button">Xem ngay</a>
        </div>
      </div>
    </a>
    <a href="index.php?ctrl=chart">
      <div class="box">
        <div class="top">THỐNG KÊ</div>
        <div class="center">
          <img src="../site/images/binhluan.png" alt="" />
        </div>
        <div class="bot">
          <a href="index.php?ctrl=chart" class="button">Xem ngay</a>
        </div>
      </div>
  </body>
</html>
