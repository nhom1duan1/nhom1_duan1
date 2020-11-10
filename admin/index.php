<!DOCTYPE html>
<?php
      ob_start();
    ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang quản trị</title>
    <style>
      body {
        margin: 0;
        padding: 0;
      }
      header {
        background-color: darkslategrey;
        display: grid;
        grid-template-columns: 20% 15% 15% 50%;
        color: gainsboro;
      }
      .logo {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5% 0;
      }
      .logo img {
        width: 10%;
        margin-right: 3%;
      }
      .logo span {
        font-size: 1.5vw;
      }
      header a {
        display: flex;
        justify-content: center;
        align-items: center;
        color: gainsboro;
        text-decoration: none;
      }

      header a img {
        width: 10%;
        margin-right: 3%;
      }
      header a span {
        font-size: 1.2vw;
      }
      header a:hover {
        background-color: steelblue;
        color: white;
        transition: 0.2s;
      }
      .admin {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding-right: 5%;
      }
      main {
        display: grid;
        grid-template-columns: 20% 80%;
      }
      .left {
        color: white;
        border-right: gray 1px solid;
        background-color: black;
      }
      .left ul {
        list-style: none;
      }
      .left li {
        margin: 15% 0;
        width: 90%;
      }
      .left a {
        display: flex;
        justify-content: space-between;
        color: gainsboro;
        text-decoration: none;
        font-size: 1.2vw;
      }
      .left a img {
        width: 10px;
        height: 10px;
        margin-top: 2%;
      }
      .left>ul>li:hover .submenu{
        display:block;
      }
      .submenu {
        transition: all 0.5s ease;
        display: none;
      }
      .right{
        
        min-height: 567px;
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
    </style>
    
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="../site/images/admin.png" alt="" />
        <span>Administrator</span>
      </div>
      <a href="../site/index.php">
        <img src="../site/images/back.png" alt="" />
        <span>Vào trang web</span>
      </a>
      <a href=""><span>Liên hệ</span></a>
      <div class="admin">Xin chào: admin</div>
    </header>
    <main>
      <div class="left">
        <ul>
          <li><a href="index.php">Dashboard</a></li>
          <li>
            <a href="#">
              Loại sản phẩm
              <img src="../site/images/down-arrow.png" alt="" />
            </a>
            <ul class="submenu" id="sub1">
              <li><a href="index.php?ctrl=catalog&action=add_catalog">Thêm loại sản phẩm</a></li>
              <li><a href="index.php?ctrl=catalog">Quản lý loại sản phẩm</a></li>
            </ul>
          </li>
          <li>
            <a href="#"
              >Sản phẩm
              <img src="../site/images/down-arrow.png" alt="" />
            </a>
            <ul class="submenu" id="sub2">
              <li><a href="index.php?ctrl=product&action=add_product">Thêm sản phẩm mới</a></li>
              <li><a href="index.php?ctrl=product">Quản lý sản phẩm</a></li>
            </ul>
          </li>
          <li>
            <a href="index.php?ctrl=donhang"
              >Quản lý đơn hàng
            </a>
          </li>
          <li>
            <a href=""
              >Quản lý khách hàng 
            </a>
          </li>
          <li>
            <a href=""
              >Quản lý nhân viên
            </a>
          </li>
          <li>
            <a href="#" >
              Thống kê
              <img src="../site/images/down-arrow.png" alt="" />
            </a>
            <ul class="submenu" id="thongke">
              <li><a href="index.php?ctrl=chart&action=bieudocot">Biểu đồ hình cột</a></li>
              <li><a href="index.php?ctrl=chart&action=bieudotron">Biểu đồ hình tròn</a></li>
              <li><a href="index.php?ctrl=chart&action=bieudobang">Bảng thống kê</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="right">
        <?php
          $ctrl='home';
          if(isset($_GET['ctrl'])){
            $ctrl= $_GET['ctrl'];
          }
            include 'controller/'.$ctrl.'.php';
          ?>
      </div>
    </main>
    <footer></footer>
  </body>
</html>
