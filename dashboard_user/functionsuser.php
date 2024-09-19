<?php

 define('DB_SERVER','localhost');
 define('DB_USER','root');
 define('DB_PASS','');
 define('DB_NAME','db_miniproject');

    class DB_con {

        public function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;
    
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error(); // แก้ไขจาก mysqli_connect_erro() เป็น mysqli_connect_error()
            }
        }

        public function insert($firstname, $lastname, $email, $phonenumber, $address, $username , $password) {
            $result = mysqli_query($this->dbcon, "INSERT INTO tblusers (firstname, lastname, email, phonenumber, address, username ,password) VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$address', '$username', '$password')");
            return $result;
        }
        

        public function fetchdata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers WHERE id = '$userid' ");
            return $result;
        }

        public function update($firstname, $lastname, $email, $phonenumber, $address ,$userid ,$username , $password) {
            $result = mysqli_query($this->dbcon, "UPDATE tblusers SET 
            firstname = '$firstname', 
            lastname = '$lastname',
            email = '$email',
            phonenumber = '$phonenumber',
            address = '$address',
            username = '$username',
            password = '$password'    
            WHERE id = '$userid'
            ");
            return $result; 

        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tblusers  WHERE id = '$userid'");
            return $deleterecord;
        }

        public function countUsers() {
            $result = mysqli_query($this->dbcon, "SELECT COUNT(*) as total_users FROM tblusers");
            $row = mysqli_fetch_assoc($result);
            return $row['total_users'];
        }
        
        // ฟังก์ชันสำหรับนับจำนวนโปรดักทั้งหมด
        public function countProducts() {
            $result = mysqli_query($this->dbcon, "SELECT COUNT(*) as total_products FROM tblproducts");
            $row = mysqli_fetch_assoc($result);
            return $row['total_products'];
    }

    public function checkUsernameEmail($username, $email) {
        $stmt = $this->conn->prepare("SELECT * FROM tblusers WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }

    public function register($fname, $lname, $email, $phonenumber, $address, $username, $password) {
        $stmt = $this->conn->prepare("INSERT INTO tblusers (firstname, lastname, email, phonenumber, address, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // แฮชรหัสผ่าน
        $stmt->bind_param("sssssss", $fname, $lname, $email, $phonenumber, $address, $username, $hashedPassword);
        return $stmt->execute();
    }
}

?>