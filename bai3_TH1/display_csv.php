<?php
// Thiết lập để xử lý ký tự tiếng Việt (UTF-8)
header('Content-Type: text/html; charset=utf-8');

// Định nghĩa đường dẫn tới tệp CSV của bạn
$csv_file = '65HTTT_Danh_sach_diem_danh.csv'; // Corrected file name
$data = [];
$header = [];
$row_count = 0;

// Mở tệp tin để đọc ('r')
if (($handle = fopen($csv_file, 'r')) !== FALSE) {
    // Vòng lặp đọc từng dòng
    while (($row = fgetcsv($handle, 1000, ',')) !== FALSE) {
        // Xử lý dòng tiêu đề (hàng đầu tiên)
        if ($row_count === 0) {
            $header = $row;
        } else {
            // Xử lý dữ liệu
            // Thay vì dùng array_combine, ta chỉ cần lưu mảng dòng
            $data[] = $row;
        }
        $row_count++;
    }
    // Đóng tệp
    fclose($handle);
} else {
    // Thông báo lỗi nếu không mở được tệp
    die('Không thể mở tệp tin CSV: ' . $csv_file);
}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hiển Thị Danh Sách Tài Khoản CSV</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; color: #333; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>

    <h2>Danh sách Tài khoản </h2>

    <table>
        <thead>
            <tr>
                <?php 
                // Hiển thị tiêu đề cột
                foreach ($header as $col_name) {
                    // Sử dụng htmlspecialchars để đảm bảo an toàn và hiển thị đúng ký tự
                    echo '<th>' . htmlspecialchars($col_name) . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Lặp qua mảng dữ liệu để hiển thị từng hàng
            foreach ($data as $row) {
                echo '<tr>';
                foreach ($row as $cell_data) {
                    // Hiển thị dữ liệu từng ô
                    echo '<td>' . htmlspecialchars($cell_data) . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>
</html>