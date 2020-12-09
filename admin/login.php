<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Login</title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <style>
    body {
        background: url("../images/background.jpg");
        background-size: 100%;
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="../images/login.jpg" alt="" style="width: 100%">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Chào mừng bạn!</h1>
                                    </div>
                                    <form class="user" method="post" action="controller/login.php?act=login">
                                        <div class="form-group">
                                            <input name="user" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nhập địa chỉ email..." require />
                                        </div>
                                        <div class="form-group">
                                            <input name="pass" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Nhập mật khẩu.." require />
                                        </div>
                                        <button name="btn_login" class="btn btn-primary btn-user btn-block">
                                            Đăng nhập
                                        </button>
                                        <hr />
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Đăng nhập Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Đăng nhập
                                            Facebook
                                        </a>
                                    </form>
                                    <hr />
                                    <div class="text-center">
                                        <a class="small" href="#" data-toggle="modal" data-target="#myModal">Quên mật
                                            khẩu?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="../site/index.php?ctrl=user">Tạo tài khoản!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Forgot Password -->
    <!-- position: fixed;
    z-index: 1;
    width: 100vw;
    height: 100vh;
    top: 0;
    background-color: #666666de;
} -->
    <div class=" modal" id="myModal">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body pt-3">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img src="../images/forget.jpg" alt="" style="width: 100%">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2">Bạn quên mật khẩu?</h1>
                                            <p class="mb-4">Hãy nhập email của bạn. Chúng tôi sẽ tạo một mật khẩu mới và
                                                gửi vào email của bạn. Bạn cũng có thể đổi mật khẩu theo ý mình. </p>
                                        </div>
                                        <form class="user" action="controller/login.php?act=forgetpass" method="POST">
                                            <div class="form-group">
                                                <input aria-describedby="emailHelp" class="form-control" type="email"
                                                    name="userEmail" placeholder="Nhập địa chỉ email của bạn">
                                            </div>
                                            <input class="btn btn-primary btn-user btn-block" type="submit"
                                                name="sb-pass" value="Gửi">

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>