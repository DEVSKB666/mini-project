<?php
include_once('../dashboard_user/functionsuser.php');

$insertdata = new DB_con();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // เช็คว่าชื่อผู้ใช้หรืออีเมล์ซ้ำหรือไม่
    if ($insertdata->checkUsernameEmail($username, $email)) {
        echo json_encode(["status" => false, "message" => "ชื่อผู้ใช้หรืออีเมล์นี้มีอยู่แล้ว"]);
        exit();
    }

    // ลงทะเบียนผู้ใช้ใหม่
    $sql = $insertdata->register($fname, $lname, $email, $phonenumber, $address, $username, $password);
    if ($sql) {
        echo json_encode(["status" => true, "message" => "ลงทะเบียนสำเร็จ!"]);
    } else {
        echo json_encode(["status" => false, "message" => "เกิดข้อผิดพลาด!"]);
    }
} else {
    echo json_encode(["status" => false, "message" => "Method not allowed"]);
}
?>