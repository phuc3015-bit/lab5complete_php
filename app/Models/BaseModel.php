<?php
namespace App\Models;
use PDO;

class BaseModel {
    protected $conn;

    public function __construct() {
        $host = "localhost";
        $dbname = "buoi2_php"; // Đã sửa từ 'lab2_db' thành 'buoi2_php'
        $username = "root";
        $password = ""; // Mặc định của XAMPP là để trống

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
    }
}