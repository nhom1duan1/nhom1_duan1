<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/style.css">
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
        <div class="w80">
          <div class="container">
            <a href="index.php?ctrl=home" class="logo">
              <img src="../site/images/logoF.png" alt="" />
              <span>Shop</span>
            </a>
          
            <a href="index.php?ctrl=cart&" class="cart"><img src="images/cart2.png" alt="">GIỎ HÀNG</a>
          </div>
        </div>
        <div class="menubar">
          <nav class="menu">
            <ul>
              <li><a href="">Điện thoại</a></li>
              <li><a href="">Điện thoại</a></li>
              <li><a href="">Điện thoại</a></li>
              <li><a href="">Điện thoại</a></li>
              <li><a href="">Điện thoại</a></li>
              <li><a href="index.php?ctrl=intro&action=intro">Giới thiệu</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <?php
          $ctrl='home';
          if(isset($_GET['ctrl'])){
            $ctrl= $_GET['ctrl'];
          }
            include 'controller/'.$ctrl.'.php';
        ?>
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
