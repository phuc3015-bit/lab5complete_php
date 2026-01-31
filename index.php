<?php
require 'vendor/autoload.php';
use App\Controllers\ProductController;

$controller = new ProductController();
$page = $_GET['page'] ?? 'products'; // Mặc định vào danh sách

switch ($page) {
    case 'products':
        $controller->index();
        break;
    case 'product-add':
        $controller->create(); // Hiển thị form thêm
        break;
    case 'product-store':
        $controller->store(); // Xử lý lưu dữ liệu
        break;
    case 'product-delete':
        $controller->delete(); // Xử lý xóa
        break;
    default:
        echo "404 - Không tìm thấy trang";
        break;
}