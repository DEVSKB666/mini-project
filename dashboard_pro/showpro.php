<?php
include_once('dashboard_pro/functionsproduct.php');
$fetchdata = new DB_con();
$sql = $fetchdata->fetchdata();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-1">
        <h4 class="fw-normal">สินค้าทั้งหมด <small class="text-muted">All Products</small></h4>
        <hr>

        <div class="row">
            <?php while ($row = mysqli_fetch_array($sql)) { ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
                <div class="card w-100 h-100">
                    <img src="pic/propic/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top"
                        alt="Product Image" style="max-height: 150px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem;">ชื่อสินค้า:
                            <?php echo htmlspecialchars($row['name']); ?></h5>
                        <p class="card-text" style="font-size: 0.875rem;">ราคา:
                            <?php echo htmlspecialchars($row['price']); ?> ฿</p>
                    </div>
                </div>
            </div>
            <?php } ?>
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