<?php
// admin.php
$dataFile = __DIR__ . '/flowers.json';
$imagesDir = 'images/';

// load data
$flowers = [];
if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $flowers = json_decode($json, true) ?: [];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Quản trị - Danh sách hoa</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px;}
        th, td { border:1px solid #ddd; padding:8px; text-align: left; vertical-align: middle;}
        th { background:#f4f4f4; }
        img { max-width:120px; height: auto; display:block; }
        .actions a { margin-right:8px; }
        form { border:1px solid #ddd; padding:12px; border-radius:6px; max-width:700px;}
        label { display:block; margin-top:8px;}
        input[type="text"], textarea { width:100%; padding:6px; box-sizing:border-box; }
    </style>
</head>
<body>
    <h1>🔧 Trang quản trị hoa (CRUD)</h1>

    <h2>Danh sách hoa</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Ảnh</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
        <?php if (count($flowers) === 0): ?>
            <tr><td colspan="5" style="text-align:center">Chưa có dữ liệu.</td></tr>
        <?php else: ?>
            <?php foreach ($flowers as $i => $f): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>
                        <?php if (!empty($f['image']) && file_exists(__DIR__ . "/$imagesDir" . $f['image'])): ?>
                            <img src="<?php echo $imagesDir . htmlspecialchars($f['image']); ?>" alt="">
                        <?php else: ?>
                            <div style="width:120px;height:80px;background:#f0f0f0;display:flex;align-items:center;justify-content:center">No image</div>
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($f['name']); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($f['desc'])); ?></td>
                    <td class="actions">
                        <a href="edit.php?id=<?php echo $i; ?>">Sửa</a>
                        <a href="delete.php?id=<?php echo $i; ?>" onclick="return confirm('Chắc chắn muốn xóa?');">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <h2>Thêm hoa mới</h2>
    <form action="add.php" method="post" enctype="multipart/form-data">
        <label>Tên hoa
            <input type="text" name="name" required>
        </label>
        <label>Mô tả
            <textarea name="desc" rows="4"></textarea>
        </label>
        <label>Ảnh (jpg/png) 
            <input type="file" name="image" accept="image/*" required>
        </label>
        <br/>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
