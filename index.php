
<!DOCTYPE html>
<html lang="en">
<head>
    <title>POS | Login</title>
    <!--============ head ============-->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="icon" type="image/x-icon" href="assets/img/g-logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="./assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="./assets/plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="./assets/plugins/toastr/toastr.min.css">    <!--============ head ============-->
</head>
<body class="hold-transition login-page">

    <!-- Content -->
    <div class="login-box">
        <!-- Login form -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1">
                    <img src="assets/img/g-logo.png" width="60">
                    <b>PHP</b>Barcode</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg" style="color:#007BFF;">
                Hari ini adalah tanggal:  08/05/2023<br>            <span style="color:#212529;">Silakan login. Semoga semakin poduktif.</span></p>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input 
                            type="email" 
                            class="form-control" 
                            placeholder="Email" 
                            name="text_email" 
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input 
                            type="password" 
                            class="form-control" 
                            placeholder="Password" 
                            name="text_password" 
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <a href="forgot-password.html">Saya lupa password</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <button 
                                type="submit" 
                                class="btn btn-primary btn-block" 
                                name="btn_login">Log in</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <a href="#">Register</a>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="mb-1">
                </p>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!--============ scripts ============-->
        <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./assets/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="./assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="./assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="./assets/plugins/toastr/toastr.min.js"></script>     <!--============ scripts ============-->
</body>
</html>