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
    <title>Index Page</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-1">
    <h4 class="fw-normal">จัดการสินค้าทั้งหมด <small class="text-muted">Manage Products</small></h4>
       <hr>
       <table id="mytable" class="table table-bordered table-striped">
    <thead class="table-light">
        <tr style="text-align: center;">
            <th>#</th> 
            <th>รูปภาพ</th>
            <th>ชื่อสินค้า</th>
            <th>ราคา</th>
            <th>อัพเดทเมื่อ</th>
            <th>จัดการ</th> 
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($sql)) { ?>
            <tr style="text-align: center;">
                <td><?php echo $row['id']; ?></td>
                <td>
                    <?php if (!empty($row['image'])) { ?>
                        <img src="pic/propic/<?php echo htmlspecialchars($row['image']); ?>" alt="Product Image" style="max-width: 100px; height: auto;">
                    <?php } else { ?>
                        <img src="pic/propic/default.png" alt="Default Image" style="max-width: 100px; height: auto;">
                    <?php } ?>
                </td>
                <td><?php echo ($row['name']); ?></td>
                <td><?php echo ($row['price']); ?> ฿</td>
                <td><?php echo ($row['postingdate']); ?></td>
                <td>
                    <a href="index.php?p=dashboard_pro/updatepro&id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="index.php?p=dashboard_pro/deletepro&del=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

    </div>

<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>

</body>
</html>