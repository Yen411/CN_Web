<?php
// Đọc file JSON
$jsonData = file_get_contents("flowers.json");
$flowers = json_decode($jsonData, true); // chuyển JSON -> array
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách các loài hoa</title>
    <style>
        .flower {
            width: 250px;
            margin: 15px;
            display: inline-block;
            vertical-align: top;
            text-align: center;
        }
        img {
            width: 200px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<h2>🌸 Danh sách các loài hoa</h2>

<?php foreach ($flowers as $f): ?>
    <div class="flower">
        <img src="images/<?php echo $f['image']; ?>" alt="">
        <h3><?php echo $f['name']; ?></h3>
        <p><?php echo $f['desc']; ?></p>
    </div>
<?php endforeach; ?>

</body>
</html>
