<?php
include_once('dashboard_user/functionsuser.php');

$fetchdata = new DB_con();
$sql = $fetchdata->fetchdata();

$total_users = $fetchdata->countUsers();
$total_products = $fetchdata->countProducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main content -->
        <div class="container-fluid">
            <h4 class="fw-normal">ระบบจัดการร้านค้า <small class="text-muted">Control panel real-time</small></h4>
            <hr>


            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?php echo $total_users; ?> <small>คน</small></h3>
                            <p>จำนวนผู้ใช้ทั้งหมด</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="index.php?p=dashboard_user/manageuser" class="small-box-footer">
                            ดูทั้งหมด <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>



                <div class="col-lg-4 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $total_products; ?> <small>รายการ</small></h3>
                            <p>จำนวนสินค้าทั้งหมด</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="index.php?p=dashboard_pro/showpro" class="small-box-footer">
                            ดูทั้งหมด <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>


                <!-- <div class="col-lg-4 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner text-center">
                            <h4>นายรณชัย สุวรรณศร ทท.3/1</h4>
                            <p>เทคโนโลยีสารสนเทศ</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

</body>

</html>