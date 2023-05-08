<?php 

// 1. Panggil db
require_once ('db/konekdb.php'); 
// 2. Start session
session_start();

// 3. Jika tombol login diklik,
if(isset($_POST['btn_login'])){

    // 3.1 Ambil data yang dikirim dari field login form
    $useremail = $_POST['text_email'];
    $password = $_POST['text_password'];

    // 3.2 Testing: memastikan hasil tangkapannya
    // echo $useremail. " ".$password;
    // 3.3 Testing berhasil dan comment bagian ini


    // 4. READ - Read data dari tbl_user
    $select = $pdo->prepare("
        SELECT * 
        FROM tbl_user 
        WHERE useremail='$useremail' AND userpassword='$password'");

    // 4.1 Jalankan select
    $select->execute();
    // 4.2 Fetch hasilnya dalam bentuk asosiatif array
    $row = $select->fetch(PDO::FETCH_ASSOC);

    // 5. Jika row dalam bentuk array
    if(is_array($row)) {
    
        // 5.1 Login sebagai admin
        if($row['useremail'] == $useremail and $row['userpassword'] == $password and $row['role'] == "admin") {

            // Perlihatkan message
            echo "Admin sukses login!";
            // Alihkan ke admin dashboard
            header('refresh: 1;ui/admin/dashboard.php');

            $_SESSION['userid'] = $row['userid'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['useremail'] = $row['useremail'];
            $_SESSION['role'] = $row['role'];
        } 

        // 5.2 Login sebagai staf
        elseif ($row['useremail'] == $useremail and $row['userpassword'] == $password and $row['role'] == "user") {

            // Perlihatkan message
            echo "Staf sukses login!";
            // Alihkan ke admin dashboard
            header('refresh: 1;ui/staf/dashboard.php');
        } 
    } 

    // 6. Jika email dan/atau password yang dikirim tidak sama dengan email dan password yang tersimpan di dalam db
    else {

        // Perlihatkan message
        echo"Email atau password salah... ulangi lagi";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POS | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="icon" type="image/x-icon" href="assets/img/g-logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="assets/plugins/sweetalert2/sweetalert2.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
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
                echo "" . date("d-m-Y") . "<br>";
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

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="assets/plugins/toastr/toastr.min.js"></script> 
</body>
</html>