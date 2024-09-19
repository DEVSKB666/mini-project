<?php
include_once('dashboard_pro/functionsproduct.php');

$insertdata = new DB_con();

if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "pic/propic/" . basename($image);


    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'png', 'jpeg', 'gif'];
    
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "<script>alert('รูปภาพต้องเป็นไฟล์ JPG, JPEG, PNG หรือ GIF เท่านั้น!');</script>";
    } elseif ($_FILES['image']['size'] > 5000000) {
        echo "<script>alert('ขนาดไฟล์ไม่ควรเกิน 5MB!');</script>";
    } else {

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql = $insertdata->insert($name, $price, $image); 
            if ($sql) {
                echo "<script>alert('เพิ่มข้อมูลเรียบร้อย!');</script>";
            } else {
                echo "<script>alert('เกิดข้อผิดพลาด! กรุณาลองใหม่อีกครั้ง!');</script>";
            }
        } else {
            echo "<script>alert('อัพโหลดภาพล้มเหลว!');</script>";
        }
    }
    
}
?>


<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลสินค้า</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-1">
        <h4 class="fw-normal">เพิ่มรายการสินค้า <small class="text-muted">Add Products</small></h4>
        <hr>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="name" class="form-label">ชื่อสินค้า</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">ราคา</label>
                <input type="text" class="form-control" name="price" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">ภาพสินค้า</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success">เพิ่มข้อมูล</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>