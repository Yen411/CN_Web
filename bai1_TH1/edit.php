<?php
// edit.php
$dataFile = __DIR__ . '/flowers.json';
$imagesDir = __DIR__ . '/images/';

// load data
$flowers = [];
if (file_exists($dataFile)) {
    $flowers = json_decode(file_get_contents($dataFile), true) ?: [];
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
if ($id === null || !isset($flowers[$id])) {
    echo "Bản ghi không tồn tại."; exit;
}

// khi submit form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $desc = trim($_POST['desc'] ?? '');

    if ($name === '') {
        echo "Tên không được rỗng."; exit;
    }

    // xử lý ảnh mới nếu có
    $newImage = $flowers[$id]['image'] ?? '';
    if (!empty($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $tmp = $_FILES['image']['tmp_name'];
        $orig = basename($_FILES['image']['name']);
        $ext = strtolower(pathinfo($orig, PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif'];
        if (!in_array($ext, $allowed)) { echo "Chỉ cho phép ảnh."; exit; }

        $newImage = time() . '-' . preg_replace('/[^a-z0-9\-\.]/i','', $orig);
        if (!is_dir($imagesDir)) mkdir($imagesDir, 0755, true);
        if (!move_uploaded_file($tmp, $imagesDir . '/' . $newImage)) { echo "Upload ảnh thất bại"; exit; }

        // xóa ảnh cũ nếu tồn tại
        if (!empty($flowers[$id]['image']) && file_exists($imagesDir . '/' . $flowers[$id]['image'])) {
            @unlink($imagesDir . '/' . $flowers[$id]['image']);
        }
    }

    // cập nhật
    $flowers[$id]['name'] = $name;
    $flowers[$id]['desc'] = $desc;
    $flowers[$id]['image'] = $newImage;

    file_put_contents($dataFile, json_encode($flowers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    header('Location: admin.php'); exit;
}

$f = $flowers[$id];
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Sửa hoa</title></head>
<body>
    <h2>Sửa hoa: <?php echo htmlspecialchars($f['name']); ?></h2>
    <form method="post" enctype="multipart/form-data">
        <label>Tên:
            <input type="text" name="name" value="<?php echo htmlspecialchars($f['name']); ?>" required>
        </label><br/><br/>
        <label>Mô tả:<br/>
            <textarea name="desc" rows="5"><?php echo htmlspecialchars($f['desc']); ?></textarea>
        </label><br/><br/>
        <label>Ảnh hiện tại:<br/>
            <?php if (!empty($f['image']) && file_exists($imagesDir . '/' . $f['image'])): ?>
                <img src="images/<?php echo htmlspecialchars($f['image']); ?>" style="max-width:200px"><br/>
            <?php else: ?>
                (Không có ảnh)
            <?php endif; ?>
        </label><br/>
        <label>Thay ảnh mới (nếu muốn):
            <input type="file" name="image" accept="image/*">
        </label><br/><br/>
        <button type="submit">Lưu thay đổi</button>
        <a href="admin.php">Hủy</a>
    </form>
</body>
</html>
