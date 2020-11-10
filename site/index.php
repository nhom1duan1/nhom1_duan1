<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap");

      body {
        margin: 0;
        padding: 0;
        font-family: calibri;
        scroll-behavior: smooth;
      }

      header {
        height: 100px;
        background-color: black;
      }

      header a {
        text-decoration: none;
      }

      #navbar {
        background-color: black;
        display: flex;
        position: relative;
        width: 100%;
        transition: 0.8s;
      }

      @keyframes truot {
        0% {
          top: -50%;
        }
        100% {
          top: 0%;
        }
      }

      .container {
        float: left;
        height: 100px;
        width: 80%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .container span {
        color: gainsboro;
        font-size: 2.2vw;
        margin-top: 3%;
        margin-left: 1%;
        font-weight: bolder;
        font-family: Tahoma;
      }

      .logo {
        width: 20%;
        height: 55px;
        display: flex;
      }

      .logo img {
        width: 25%;
        transform: translate(0, 0);
        transition: transform 0.5s ease;
      }

      .logo:hover img{
        transform: scale(1.1);
      }

      .logo span {
        font-family: "Staatliches", cursive;
        letter-spacing: 2px;
        font-size: 2.5vw;
        font-weight: lighter;
      }

      .menu {
        width: 70%;
      }

      .menu ul {
        list-style-type: none;
      }

      .menu>ul>li {
        display: inline;
        margin: 0 2%;
        position: relative;
      }

      .menu>ul>li>a {
        color: gainsboro;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1vw;
        letter-spacing: 1px;
        text-transform: uppercase;
      }

      .menu>ul>li>a:hover {
        color: #e4af26;
        transition: 0.4s;
      }

      .submenu{
        width: 200px;
        display: none;
        position: absolute;
        z-index:5;
        background-color: white;
        left: 0;
        padding: 0;
      }

      .submenu li{
        margin: 5% 5%;
      }

      .submenu a{
        color: black;
        font-weight: 500;
        transition: 0.2s;
      }
      .submenu a:hover{
        color: black;
        font-weight: 700;
      }

      .menu>ul>li:hover .submenu{
        display: block;
      }

      .cart{
        width: 15%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: gainsboro;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1vw;
        letter-spacing: 1px;
      }

      .cart img{
        width:40%;
        transform: translate(0, 0);
        transition: transform 0.5s ease;
      }

      .cart:hover img{
        transform: scale(1.1);
      }

      main {
        min-height: 650px;
        overflow: hidden;
        background: white;
      }

      footer {
        background-color: black;
        min-height: 100px;
        padding: 5% 0;
        color: gainsboro;
        font-weight: bold;
        font-size: 1.1vw;
        letter-spacing: 1px;
        text-transform: uppercase;
        
      }
      .img_footer{
        width: 20%;
        margin-left: 10%;
        display: flex;
        align-items: center;
        float: left;
      }
      .img_footer img{
        width: 30%;
        margin-right: 5%;
      }
      .menu_footer {
        width: 15%;
        float:left;
        margin-left: 10%;
      }

      .menu_footer ul {
        list-style-type: none;
      }

      .menu_footer>ul>li {
        display: list-item;
        margin: 7% 2%;
      }

      .menu_footer>ul>li>a {
        color: gainsboro;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1vw;
        letter-spacing: 1px;
        text-transform: uppercase;
      }

      .menu_footer>ul>li>a:hover {
        color: #e4af26;
        transition: 0.4s;
      }
      .admin{
        width:20%;
        float: right;
        margin-right:10%;
        text-align:center;
        display: flex;
        align-items: center;
        text-decoration: none;
        color: gainsboro;
      }
      .admin img{
        width: 25%;
        margin-right: 5%;
      }
      /* width */
      ::-webkit-scrollbar {
        width: 10px;
      }

      /* Track */
      ::-webkit-scrollbar-track {
        background: #f1f1f1; 
      }
      
      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #888; 
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #555; 
      }
      #scroll_top {
        position: fixed;
        width: 5%;
        right: 2%;
        bottom: 5%;
        z-index:20;
        display: none;
      }
      #scroll_top img{
        width: 100%;
        transform: translate(0, 0);
        transition: transform 0.5s ease;
      }
      #scroll_top:hover img{
        transform: scale(1.1);
      }

    </style>
    <script>
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
          document.getElementById("navbar").style.position = "fixed";
          document.getElementById("navbar").style.zIndex="100";
          document.getElementById("navbar").style.animationName="truot";
          document.getElementById("navbar").style.animationDuration="0.7s";
          document.getElementById("navbar").style.animationIterationCount="1";
          document.getElementById("navbar").style.background="rgba(0, 0, 0, 0.85)";
          document.getElementById("scroll_top").style.display="block";
        } else {
          document.getElementById("navbar").style.position = "relative";
          document.getElementById("navbar").style.animationName="";
          document.getElementById("scroll_top").style.display="none";
        }
      }
      function scroll_top(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
  </head>
  <body>
      <a href="" id="scroll_top" onclick="scroll_top();">
        <img src="images/Top.png" alt="">
      </a>
    <header>
      <div id="navbar">
        <div class="container">
          <a href="index.php?ctrl=home" class="logo">
            <img src="../site/images/logoF.png" alt="" />
            <span>Shop</span>
          </a>
          <nav class="menu">
          <ul>
            <li><a href="index.php?ctrl=home">TRANG CHỦ</a></li>
            <li>
              <a href="index.php?ctrl=product&action=tatca">SẢN PHẨM</a>
              <img src="images/down-arrow.png" alt="">
              <ul class="submenu">
                <li><a href="index.php?ctrl=product&action=tatca" style="font-weight: 550;">Tất cả sản phẩm</a></li>
                <li><a href="index.php?ctrl=product&action=tatca" style="font-weight: 550;">Điện thoại</a></li>
                <li><a href="index.php?ctrl=product&action=tatca" style="font-weight: 550;">laptop</a></li>
                <li><a href="index.php?ctrl=product&action=tatca" style="font-weight: 550;">Phụ kiện</a></li>
            </ul>
            </li>
            <li><a href="">ABOUT US</a></li>
            <li><a href="">KHUYẾN MÃI</a></li>
            <li><a href="">lIÊN HỆ</a></li>
          </ul>
            
          </nav>
          <a href="index.php?ctrl=cart&" class="cart"><img src="images/cart2.png" alt="">GIỎ HÀNG</a>
        </div>
      </div>
    </header>
    <main>
    </main>
    <footer>
      <div class="img_footer">
        <img src="images/logoF.png" alt="">
        Design by TrungKhai
      </div>
      <nav class="menu_footer">
          <ul>
            <li><a href="index.php?ctrl=home">TRANG CHỦ</a></li>
            <li>
              <a href="index.php?ctrl=product&action=tatca">SẢN PHẨM</a>
            </li>
            <li><a href="">ABOUT US</a></li>
            <li><a href="">KHUYẾN MÃI</a></li>
            <li><a href="">lIÊN HỆ</a></li>
          </ul>
      </nav>
      <a href="../admin/login.php" class="admin">
        <img src="images/admin.png" alt="" />
        <span>Administrator</span>
      </a>
    </footer>
  </body>
</html>
