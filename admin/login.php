<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        background-color: rgb(27, 27, 27);
        text-align: center;
        font-family: sans-serif;
      }
      .row {
        background-color: white;
        margin: 5% auto;
        padding: 5% 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 50%;
      }
      span {
        font-size: 2vw;
      }
      form {
        margin: 5% auto;
        text-align: left;
        width: 90%;
        display: grid;
        grid-template-columns: 1fr;
      }
      .top {
        display: grid;
        grid-template-columns: 2fr 3fr;
      }
      .left {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding-left: 10%;
      }
      .left img {
        width: 65%;
      }
      .right {
        display: grid;
        grid-template-columns: 1fr;
      }
      .form-group {
        font-size: 1.3vw;
        margin: 2% 0;
      }
      .form-group input {
        margin: 2% 0;
        width: 94%;
        height: 30px;
        font-size: 1.3vw;
        padding-left: 5%;
      }
      .bottom {
        display: flex;
        padding-top: 5%;
      }
      .bottom button {
        width: 100%;
        padding: 1.5% 5%;
        font-size: 1.1vw;
        background-color: rgb(27, 27, 27);
        border: none;
        color: white;
        text-decoration: none;
        text-align: center;
      }
      .bottom button:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
          0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background: white;
        color: black;
      }
    </style>
  </head>
  <?php
        include 'model/login.php';
        if(isset($_POST['btn_login'])){
          $username= $_POST['user'];
          $password= $_POST['pass'];
          $account= getAllAccount($username, $password);
          if($account!=null){
            session_start();
            session_destroy();
            if(!isset($_SESSION['username'])){
              $_SESSION['username']= $account['username'];
              $_SESSION['password']= $account['password'];
              $_SESSION['phanquyen']= $account['phanquyen'];
            }
            
            if($_SESSION['phanquyen']==0){
              header('location: ../site/index.php');
            }
            else{
              header('location: index.php');
            }
          }
          else{
            echo '
              <script>
                alert("Đăng nhập không thành công !");
              </script>';
          }
        }
      ?>
  <body>
      
    <div class="row">
      <span>ĐĂNG NHẬP</span>
      <form action="" method="post">
        <div class="top">
          <div class="left">
            <img src="../site/images/lock-icon.png" alt="" />
          </div>
          <div class="right">
            <div class="form-group">
              <label for="">Tên đăng nhập:</label> <br />
              <input type="text" name="user" required />
            </div>
            <div class="form-group">
              <label for="">Mật khẩu:</label> <br />
              <input type="password" name="pass" required />
            </div>
          </div>
        </div>
        <div class="bottom">
          <button name="btn_login">Đăng nhập</button>
        </div>
      </form>
    </div>
  </body>
</html>
