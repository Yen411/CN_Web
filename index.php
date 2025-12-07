<?php

// Import Model
require_once 'SinhVienModel.php';

$host = '127.0.0.1';
$dbname = 'cse485_web';
$username = 'root';
$password = '';
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}

// Nếu người dùng submit form thêm sinh viên
if (isset($_POST['ten_sinh_vien']) && isset($_POST['email'])) {
    $ten = $_POST['ten_sinh_vien'];
    $email = $_POST['email'];

    addSinhVien($pdo, $ten, $email);

    header("Location: index.php");
    exit;
}

// Lấy danh sách sinh viên để gửi sang View
$danh_sach_sv = getAllSinhVien($pdo);

// Gọi View
include 'views/sinhvien_view.php';

?>
