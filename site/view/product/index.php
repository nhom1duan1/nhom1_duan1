<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .center {
        margin: 0 auto;
        width: 80%;
      }
      .left {
        width: 25%;
        float: left;
        height: 600px;
        background: white;
      }
      .left ul {
      }
      .left li {
        margin-left: -17%;
        margin-top: 5%;
        list-style-type: none;
        border-bottom: 1px gray solid;
        padding: 2% 0;
      }
      .left a {
        font-size: 1.7vw;
        text-decoration: none;
        color: black;
        font-weight: lighter;
      }
      .left a:hover{
        color: royalblue;
      }
      .right {
        background: white;
        width: 75%;
        float: left;
        }

      .box {
        text-decoration: none;
        margin: 2% 1%;
        float: left;
        padding: 2%;
        width: 27%;
        height: 300px;
        background-color: white;
        text-align: left;
        position:relative;
        overflow: hidden;
      }

      .imgbox {
        height: 80%;
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
    <div class="center">
      <div class="left">
        <h3>DANH MỤC SẢN PHẨM</h3>
        <ul>
          <li><a href="index.php?ctrl=product&action=tatca" style="color: royalblue; font-weight: 500;" >Tất cả sản phẩm</a></li>
          <li><a href="">Điện thoại</a></li>
          <li><a href="">Laptop</a></li>
          <li><a href="">Phụ kiện</a></li>
        </ul>
        <h3>LỌC THEO GIÁ</h3>
        <div class="range">
          
        </div>
      </div>
      <div class="right">
      </div>
    </div>
  </body>
</html>
