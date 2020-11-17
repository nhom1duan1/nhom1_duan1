<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        font-family: calibri;
        background-color: #f3f3f3;
      }
      .product {
        width: 80%;
        margin: 0 auto;
        min-height: 650px;
        background-color: white;
      }
      .content {
        padding: 1% 2%;
        width: 96%;
        height: 70px;
        margin-bottom: 2%;
        border-bottom: 1px gainsboro solid;
      }
      .name {
        font-size: 2vw;
        font-weight: bold;
        color: rgb(20, 20, 20);
      }
      .view {
        font-size: 1.3vw;
        color: rgb(80, 80, 80);
      }
      .detail {
        display: grid;
        grid-template-columns: 2fr 2fr 1fr;
      }
      .img {
        min-height: 250px;
        overflow: hidden;
      }
      .img img {
        width: 90%;
      }
      .info {
      }
      .price {
        font-size: 3vw;
        color: rgb(20, 20, 20);
        font-weight: bold;
      }
      .ship {
        background-color: rgb(235, 235, 235);
        padding: 1% 0;
        width: 86%;
        padding: 2%;
        font-size: 1.3vw;
        border: 1px gainsboro solid;
      }
      .shop {
      }
      .mua {
        background-color: #d0021b;
        width: 90%;
        display: block;
        text-decoration: none;
        color: white;
        text-align: center;
        padding: 1% 0;
        font-size: 1.2vw;
        margin-top: 5%;
      }
      .mua span {
        font-size: 2vw;
        font-weight: 400;
      }
      .tragop {
        background-color: #337ab7;
        width: 44%;
        display: block;
        text-decoration: none;
        color: white;
        text-align: center;
        padding: 2% 0;
        font-size: 1vw;
        float: left;
        margin-top: 2%;
      }
      .tragop span {
        font-size: 1.5vw;
        font-weight: 400;
      }
      .mgright2 {
        margin-right: 2%;
      }
      .udai {
        border: 1px gainsboro solid;
        width: 86%;
        padding: 2%;
      }
    </style>
  </head>
  <body>
    <div class="product">
          <div class="content">
            <div class="name">Tên Sản phẩm</div>
            <div class="view">Lượt xem: ...</div>
          </div>
          <div class="detail">
            <div class="img">
              <img src="images/" alt="" />
            </div>
            <div class="info">
              <div class="price">Giá sản phẩm</div>
              <div class="ship">GIAO HÀNG TRONG 1 GIỜ 63 TỈNH THÀNH</div>
              <div class="udai">
                <h3>Ưu đãi:</h3>
                <ul>
                  <li>Trả góp 0%</li>
                  <li>Thu cũ đổi mới - Trợ giá ngay 15%</li>
                  <li>Tặng PMH 500,000đ mua Apple Watch/AirPods Pro</li>
                  <li>Tặng PMH 300,000đ mua ốp lưng chính hãng</li>
                  <li>Tặng gói iCloud 50GB miễn phí 3 tháng</li>
                  <li>Tặng suất mua Đồng hồ thời trang giảm đến 40%</li>
                </ul>
              </div>
              <div class="btn">
                <a class="mua" href="index.php?ctrl=cart&action=addtocart&id=">
                  <span>THÊM VÀO GIỎ HÀNG</span> <br />
                  Giao hàng trong 1 giờ hoặc nhận tại shop
                </a>
                <a class="tragop mgright2" href="">
                  <span>TRẢ GÓP 0%</span> <br />
                  Xét duyệt nhanh qua điện thoại
                </a>
                <a class="tragop" href="">
                  <span>TRẢ GÓP QUA THẺ</span> <br />
                  Visa, Master Card, JCB
                </a>
              </div>
            </div>
            <div class="shop">
              <h3>K Shop cam kết</h3>
              <ul>
                <li>Hàng chính hãng</li>
                <li>Bảo hành 12 Tháng chính hãng</li>
                <li>Giao hàng miễn phí toàn quốc trong 60 phút</li>
                <li>Bảo hành nhanh tại K Shop trên toàn quốc</li>
              </ul>
            </div>
          </div>
        </div>
  </body>
</html>
