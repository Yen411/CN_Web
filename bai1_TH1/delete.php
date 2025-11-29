<?php
// delete.php
$dataFile = __DIR__ . '/flowers.json';
$imagesDir = __DIR__ . '/images/';

if (!isset($_GET['id'])) {
    header('Location: admin.php'); exit;
}
$id = (int)$_GET['id'];

if (!file_exists($dataFile)) {
    header('Location: admin.php'); exit;
}

$flowers = json_decode(file_get_contents($dataFile), true) ?: [];

if (!isset($flowers[$id])) {
    header('Location: admin.php'); exit;
}

// xóa ảnh nếu có
if (!empty($flowers[$id]['image'])) {
    $img = $imagesDir . $flowers[$id]['image'];
    if (file_exists($img)) @unlink($img);
}

// xóa phần tử
array_splice($flowers, $id, 1);

// lưu lại
file_put_contents($dataFile, json_encode($flowers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: admin.php'); exit;
