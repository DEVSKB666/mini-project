<?php

    include_once('dashboard_pro/functionsproduct.php');

    if (isset($_GET['del'])) {
        $proid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($proid);

        if ($sql) {
            echo "<script>alert('ลบสินค้า สำเร็จ!');</script>";
            echo "<script>window.location.href='index.php?p=dashboard_pro/managepro'</script>";
        }
    }
 
?>