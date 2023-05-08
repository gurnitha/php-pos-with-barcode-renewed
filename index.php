<!DOCTYPE html>
<html lang="en">
<head>
    <title>POS | Login</title>
    <!--============ head ============-->
    <?php require_once 'parsial/head.php'; ?>
    <!--============ head ============-->
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
                <?php
                echo "Hari ini adalah tanggal:  " . date("d/m/Y") . "<br>";
                ?>
            <span style="color:#212529;">Silakan login. Semoga semakin poduktif.</span></p>
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
    <?php require_once 'parsial/scripts.php'; ?>
    <!--============ scripts ============-->
</body>
</html>