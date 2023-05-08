<!-- ui/blank.php -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>POS | Register</title>
        <!--|||||||||||||| head ||||||||||||||-->
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="../assets/plugins/sweetalert2/sweetalert2.min.css">
        <!-- Toastr -->
        <link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css">
        <!--|||||||||||||| head ||||||||||||||-->
    </head>
    <body class="hold-transition sidebar-mini">
        <!--||||||||||||||||||| navbar |||||||||||||||||||-->
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- <a href="index3.html" class="nav-link">Home</a> -->
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- <a href="#" class="nav-link">Contact</a> -->
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="../assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--||||||||||||||||||| navbar |||||||||||||||||||-->
            <!--||||||||||||||||| aside_main |||||||||||||||||-->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                <img src="../../assets/dist/img/admin/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">POST Barcode</span>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="../../assets/dist/img/admin/ing.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">
                            <span class="right badge badge-danger">
                            Ing                    </span>
                            </a>
                        </div>
                    </div>
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dhashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Categori
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Produk
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        POS
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-list"></i>
                                    <p>
                                        Daftar order
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Laporan penjualan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-calculator"></i>
                                    <p>
                                        Pajak
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../ui/auth/register.php" class="nav-link">
                                    <i class="nav-icon fas fa-plus-square"></i>
                                    <p>
                                        Registrasi
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../ui/auth/changepassword.php" class="nav-link">
                                    <i class="nav-icon fas fa-user-lock"></i>
                                    <p>
                                        Rubah password
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../ui/auth/logout.php" class="nav-link">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!--||||||||||||||||| aside_main |||||||||||||||||-->
            <!--||||||||||||||||||| content |||||||||||||||||||-->
            <div class="content-wrapper">
                <!--|||||||||||||||| CONTENT HEADER ||||||||||||||||-->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Register</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Register</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!--|||||||||||||||| CONTENT HEADER ||||||||||||||||-->
                <!--||||||||||||||||| MAIN CONTENT |||||||||||||||||-->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!--||||||||||||||| FORM |||||||||||||||-->
                            <div class="col-lg-4">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">Register</h5>
                                    </div>
                                    <form action="" method="POST">
                                        <div class="card-body">
                                            <!-- Name -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input 
                                                    type="text" 
                                                    class="form-control" 
                                                    id="exampleInputEmail1" 
                                                    placeholder="Enter name"
                                                    name="txtname"
                                                    required>
                                            </div>
                                            <!-- Email -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input 
                                                    type="email" 
                                                    class="form-control" 
                                                    id="exampleInputEmail1" 
                                                    placeholder="Enter email"
                                                    name="txtemail"
                                                    required>
                                            </div>
                                            <!-- Password -->
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input 
                                                    type="password" 
                                                    class="form-control" 
                                                    id="exampleInputPassword1" 
                                                    placeholder="Password"
                                                    name="txtpassword"
                                                    required>
                                            </div>
                                            <!-- Role -->
                                            <div class="form-group">
                                                <label>Role</label>
                                                <select 
                                                    class="form-control" 
                                                    name="txtselect_option"
                                                    required>
                                                    <option value="" disabled selected>Pilih role</option>
                                                    <option>Admin</option>
                                                    <option>User</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Save button -->
                                        <div class="card-footer">
                                            <button 
                                                type="submit" 
                                                class="btn btn-primary float-right"
                                                name="btnsave">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--||||||||||||||| FORM |||||||||||||||-->
                            <!--||||||||||||||| TABLE ||||||||||||||-->
                            <div class="col-lg-8">
                                <table class="table table-striped card-primary card-outline">
                                    <thead>
                                        <td>#</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Password</td>
                                        <td>Role</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ing</td>
                                            <td>admin@admin.com</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td></td>
                                            <td>
                                                <a href="../auth/register.php?id=1" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>melly</td>
                                            <td>user@user.com</td>
                                            <td>user</td>
                                            <td>user</td>
                                            <td></td>
                                            <td>
                                                <a href="../auth/register.php?id=2" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>testuser1</td>
                                            <td>testuser1@mail.com</td>
                                            <td>testuser1</td>
                                            <td>User</td>
                                            <td></td>
                                            <td>
                                                <a href="../auth/register.php?id=15" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>testadmin1</td>
                                            <td>testadmin1@mail.com</td>
                                            <td>testadmin1</td>
                                            <td>Admin</td>
                                            <td></td>
                                            <td>
                                                <a href="../auth/register.php?id=20" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>testuser2</td>
                                            <td>testuser2@mail.com</td>
                                            <td>testuser2</td>
                                            <td>User</td>
                                            <td></td>
                                            <td>
                                                <a href="../auth/register.php?id=22" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>testadmin2</td>
                                            <td>testadmin2@mail.com</td>
                                            <td>testadmin2</td>
                                            <td>Admin</td>
                                            <td></td>
                                            <td>
                                                <a href="../auth/register.php?id=23" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--||||||||||||||| TABLE ||||||||||||||-->
                        </div>
                    </div>
                </div>
                <!--||||||||||||||||| MAIN CONTENT |||||||||||||||||-->
            </div>
            <!--||||||||||||||||||| content |||||||||||||||||||-->
            <!--||||||||||||||||| aside_control ||||||||||||||-->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Admin Sidebar content</p>
                </div>
            </aside>
            <!--||||||||||||||||| aside_control ||||||||||||||-->
            <!--||||||||||||||||||| footer |||||||||||||||||||-->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline">
                    POS Barcode Inventory System
                </div>
                <strong>Copyright &copy; I Nyoman Gurnitha 2023 <a href="">ING</a>.</strong> All rights reserved.
            </footer>
        </div>
        <!--||||||||||||||||||| scripts ||||||||||||||||||-->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../assets/dist/js/adminlte.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
        <script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="../assets/plugins/toastr/toastr.min.js"></script>
        <!-- Start alert messages -->
        <!-- End alert messages -->
    </body>
</html>