<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .center {
        width: 80%;
        margin: 0 auto;
        text-align: center;
      }
      table {
        border-collapse: collapse;
        width: 100%;
        margin: 0 auto;
        text-align: left;
      }
      th {
        background: royalblue;
        text-align: left;
        color: white;
        padding: 1%;
      }
      td {
        background: white;
      }
      .form_group {
        width: 100%;
        text-align: left;
      }
      .form_group label {
        font-size: 1.3vw;
      }
      .form_group input {
        width: 97%;
        padding: 1%;
        font-size: 1.2vw;
      }
      .form_group button {
        padding: 1% 2%;
        margin: 0 auto;
        display: block;
        background: royalblue;
        border: none;
        color: white;
        transform: translate(0, 0);
        transition: transform 0.5s ease;
      }
      .form_group button:hover {
        transform: scale(1.1);
      }
      .baorong{
        margin: 0 auto;
        color: white;
        padding: 2%;
        color: red;
        font-weight: bold;
        font-size: 1.5vw;
      }
    </style>
  </head>
  <body>
    <div class="center">
      <h2>Giỏ hàng của bạn</h2>
      <table class="table">
        <thead>
          <tr id='thead'>
            <th>Hình sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
         
        </tbody>
      </table>
      <div id="form_dathang">
        <form method="post" action="index.php?ctrl=cart&action=checkout">
        <h2 style="width: 100%">Thông tin người đặt hàng</h2>
          <div class="form_group">
            <label for="">Họ và tên</label><br />
            <input type="text" name="fullName" class="form-control" required />
          </div>
          <br />
          <div class="form_group">
            <label for="">Email:</label><br />
            <input type="email" name="email" required />
          </div>
          <br />
          <div class="form_group">
            <label for="">Địa chỉ</label><br />
            <input type="text" name="address" class="form-control" required />
          </div>
          <br />
          <div class="form_group">
            <label for="">Số điện thoại</label><br />
            <input type="text" name="phone" class="form-control" required />
          </div>
          <br />
          <div class="form_group">
            <button type="submit" name="submit" class="btn btn-primary">
              Đặt hàng
            </button>
          </div>
          <br />
        </form>
      </div>
    </div>
  </body>
</html>
