<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','db_miniproject');

class DB_con {

    function __construct() {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error(); // แก้ไขจาก mysqli_connect_erro() เป็น mysqli_connect_error()
        }
    }

    // insert product
    public function insert($name, $price, $image) { 
        $result = mysqli_query($this->dbcon, "INSERT INTO tblproducts (name, price, image) VALUES ('$name', '$price', '$image')");
        return $result;
    }
    

    public function fetchdata(){
        $result = mysqli_query($this->dbcon, "SELECT * FROM tblproducts");
        return $result;
    }

    public function fetchonerecord($proid) {
        $result = mysqli_query($this->dbcon, "SELECT * FROM tblproducts WHERE id = '$proid'");
        return $result;
    }

    public function updateWithImage($proid, $name, $price, $image) {
        $result = mysqli_query($this->dbcon, "UPDATE tblproducts SET 
            name = '$name', 
            price = '$price', 
            image = '$image' 
            WHERE id = '$proid'");
        return $result;
    }
    

    // delete product
    public function delete($proid) {
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tblproducts WHERE id = '$proid'");
        return $deleterecord;
    }

    // นับจำนวนโปรดักทั้งหมด
    public function countProducts() {
        $result = mysqli_query($this->dbcon, "SELECT COUNT(*) as total_products FROM tblproducts");
        $row = mysqli_fetch_assoc($result);
        return $row['total_products'];
    }


    
    
}
?>
