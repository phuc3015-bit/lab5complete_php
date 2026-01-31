<?php
namespace App\Models;
use PDO;

class Product extends BaseModel {
    // Phần 1: Lấy tất cả
    public function all() {
        return $this->conn->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
    }

    // Phần 2: Xóa
    public function delete($id) {
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }

    // Phần 2.2: Lấy chi tiết 1 bản ghi
    public function find($id) {
        $sql = "SELECT * FROM students WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function insert($data) {
    $sql = "INSERT INTO students (fullname, student_code, email) VALUES (:fullname, :student_code, :email)";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute($data);
}
}