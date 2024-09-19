<?php
  session_start();
  if(session_id() != $_SESSION['sess_id']) {
    header("Location: login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini Project</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav sidebar-toggle">
                <li class="nav-item px-3">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto border-left">
                <li class="nav-item px-3">
                    <img src="pic/admin.jpg" class="img-circle m-1" alt="User Image" width="30 px;">
                    <i class="fa fa-cog" aria-hidden="true"></i> <?php echo $_SESSION['sess_username']; ?>
                </li>

            </ul>

        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary">
            <!-- Brand Logo -->
            <div class="brand-link text-decoration-none bg-light">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle"
                    style="opacity: .8">
                <span class="brand-text font-weight-light"><span class="fw-bold">ADMIN</span> PANEL</span>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="pic/admin.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info text-light fw-bold">
                        <?php echo $_SESSION['sess_username']; ?>
                        <small><i class="fa fa-circle text-success"></i> ออนไลน์</small>

                    </div>
                </div>


                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link text-bg-success border-left" style="height: 40px;">
                            <i class="fa fa-cog fa-icon"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="fa fa-desktop fa-icon"></i>
                                    <p>หน้าแดชบอร์ด</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="index.php?p=dashboard_pro/showpro" class="nav-link">
                                    <i class="fa fa-rss fa-icon"></i>
                                    <p>แสดงสินค้า</p>
                                </a>
                            </li>
                        </ul>

                    </li>

                    <!-- เมนู Manage -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active border-left"
                            style="height: 40px; display: flex; align-items: center;">
                            <i class="fa fa-list-ul fa-icon"></i>
                            <p>
                                Manage
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?p=dashboard_user/manageuser" class="nav-link">
                                    <i class="fa fa-users fa-icon"></i>
                                    <p>จัดการผู้ใช้งาน</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?p=dashboard_pro/managepro" class="nav-link">
                                    <i class="fa fa-shopping-cart fa-icon"></i>
                                    <p>จัดการสินค้า</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?p=dashboard_pro/insertpro" class="nav-link">
                                    <i class="fa fa-cart-plus fa-icon"></i>
                                    <p>เพิ่มสินค้า</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- เมนู Logout -->
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link bg-danger">
                            <i class="fa fa-power-off fa-icon text-white" aria-hidden="true"></i>
                            <p style="margin: 0;">ออกจากระบบ</p>
                        </a>
                    </li>

                </ul>

            </div>

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 633.4px;padding: 10px;">


            <?php 
      if  (isset($_REQUEST['p'])) {
        include $_REQUEST['p'] . ".php";
    } else {
      include "dashboard.php";
    }
    ?>

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Dev by Skybright.</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>