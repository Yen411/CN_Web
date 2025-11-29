<?php
// add.php
$dataFile = __DIR__ . '/flowers.json';
$imagesDir = __DIR__ . '/images/';

// basic validation
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: admin.php'); exit;
}

$name = trim($_POST['name'] ?? '');
$desc = trim($_POST['desc'] ?? '');

if ($name === '') {
    echo "Tên không được để trống."; exit;
}

// handle uploaded image
$imageName = '';
if (!empty($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $tmp = $_FILES['image']['tmp_name'];
    $orig = basename($_FILES['image']['name']);
    $ext = strtolower(pathinfo($orig, PATHINFO_EXTENSION));
    $allowed = ['jpg','jpeg','png','gif'];

    if (!in_array($ext, $allowed)) {
        echo "Chỉ cho phép ảnh (jpg, png, gif)."; exit;
    }

    // tạo tên file duy nhất
    $imageName = time() . '-' . preg_replace('/[^a-z0-9\-\.]/i','', $orig);
    if (!is_dir($imagesDir)) mkdir($imagesDir, 0755, true);
    if (!move_uploaded_file($tmp, $imagesDir . $imageName)) {
        echo "Upload ảnh thất bại."; exit;
    }
}

// load existing
$flowers = [];
if (file_exists($dataFile)) {
    $flowers = json_decode(file_get_contents($dataFile), true) ?: [];
}

// append
$flowers[] = [
    'name' => $name,
    'desc' => $desc,
    'image' => $imageName
];

// save
file_put_contents($dataFile, json_encode($flowers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// redirect back
header('Location: admin.php'); exit;
