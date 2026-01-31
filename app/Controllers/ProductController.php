<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {
    protected $model;

    public function __construct() {
        $this->model = new Product();
    }

    public function index() {
        $products = $this->model->all();
        include 'views/product_list.php';
    }

    public function create() {
        include 'views/product-add.php';
    }

    public function store() {
        $data = [
            'fullname' => $_POST['fullname'],
            'student_code' => $_POST['student_code'],
            'email' => $_POST['email']
        ];
        $this->model->insert($data);
        header("Location: index.php?page=products");
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header("Location: index.php?page=products");
    }
    
    // Bạn có thể viết thêm edit() và update() tương tự
}