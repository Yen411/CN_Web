<?php
// Dữ liệu câu hỏi được trích xuất chính xác từ nội dung tệp Quiz.txt của bạn
$quizData = [
    [
        'question' => 'Thành phần nào sau đây KHÔNG phải là một thành phần giao diện người dùng (UI) trong Android?',
        'options' => ['TextView', 'Button', 'Service', 'ImageView'],
        'answer' => ['Service'],
        'type' => 'single'
    ],
    [
        'question' => 'Layout nào thường được sử dụng để sắp xếp các thành phần UI theo chiều dọc hoặc chiều ngang?',
        'options' => ['RelativeLayout', 'LinearLayout', 'FrameLayout', 'ConstraintLayout'],
        'answer' => ['LinearLayout'],
        'type' => 'single'
    ],
    [
        'question' => 'Intent trong Android được sử dụng để làm gì?',
        'options' => ['Hiển thị thông báo cho người dùng.', 'Lưu trữ dữ liệu.', 'Khởi chạy Activity.', 'Xử lý sự kiện chạm.'],
        'answer' => ['Khởi chạy Activity.'],
        'type' => 'single'
    ],
    [
        'question' => 'Vòng đời của một Activity bắt đầu bằng phương thức nào?',
        'options' => ['onStart()', 'onResume()', 'onCreate()', 'onPause()'],
        'answer' => ['onCreate()'],
        'type' => 'single'
    ],
    [
        'question' => 'Để xử lý sự kiện click chuột cho một Button, bạn cần sử dụng phương thức nào?',
        'options' => ['onClick()', 'onTouch()', 'onLongClick()', 'onFocusChange()'],
        'answer' => ['onClick()'],
        'type' => 'single'
    ],
    [
        'question' => 'Kiểu dữ liệu nào sau đây được sử dụng để lưu trữ giá trị đúng hoặc sai?',
        'options' => ['int', 'float', 'String', 'boolean'],
        'answer' => ['boolean'],
        'type' => 'single'
    ],
    [
        'question' => 'SharedPreferences trong Android được sử dụng để làm gì?',
        'options' => ['Lưu trữ dữ liệu có cấu trúc.', 'Truy cập cơ sở dữ liệu SQLite.', 'Lưu trữ dữ liệu dạng key-value.', 'Gửi dữ liệu qua mạng.'],
        'answer' => ['Lưu trữ dữ liệu dạng key-value.'],
        'type' => 'single'
    ],
    [
        'question' => 'Toast trong Android được sử dụng để làm gì?',
        'options' => ['Hiển thị một hộp thoại.', 'Hiển thị một thông báo ngắn gọn cho người dùng.', 'Phát nhạc.', 'Chụp ảnh màn hình.'],
        'answer' => ['Hiển thị một thông báo ngắn gọn cho người dùng.'],
        'type' => 'single'
    ],
    [
        'question' => 'Để tạo một ứng dụng Android, bạn cần sử dụng ngôn ngữ lập trình nào?',
        'options' => ['C++', 'Python', 'Java', 'Kotlin'],
        'answer' => ['Java', 'Kotlin'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Adapter trong Android được sử dụng để làm gì?',
        'options' => ['Kết nối dữ liệu với ListView hoặc RecyclerView.', 'Tạo hiệu ứng động.', 'Xử lý sự kiện cảm ứng.', 'Lưu trữ dữ liệu.'],
        'answer' => ['Kết nối dữ liệu với ListView hoặc RecyclerView.'],
        'type' => 'single'
    ],
    [
        'question' => 'Fragment trong Android là gì?',
        'options' => ['Một Activity con.', 'Một thành phần UI có thể tái sử dụng.', 'Một dịch vụ chạy nền.', 'Một kiểu dữ liệu.'],
        'answer' => ['Một thành phần UI có thể tái sử dụng.'],
        'type' => 'single'
    ],
    [
        'question' => 'RecyclerView là gì?',
        'options' => ['Một thành phần UI để hiển thị danh sách.', 'Một layout để sắp xếp các thành phần UI.', 'Một lớp để xử lý sự kiện.', 'Một kiểu dữ liệu.'],
        'answer' => ['Một thành phần UI để hiển thị danh sách.'],
        'type' => 'single'
    ],
    [
        'question' => 'Manifest file trong Android được sử dụng để làm gì?',
        'options' => ['Khai báo các thành phần của ứng dụng.', 'Lưu trữ dữ liệu.', 'Xử lý sự kiện.', 'Tạo giao diện người dùng.'],
        'answer' => ['Khai báo các thành phần của ứng dụng.'],
        'type' => 'single'
    ],
    [
        'question' => 'Gradle là gì?',
        'options' => ['Một công cụ để quản lý dependencies.', 'Một ngôn ngữ lập trình.', 'Một IDE để phát triển ứng dụng Android.', 'Một framework.'],
        'answer' => ['Một công cụ để quản lý dependencies.'],
        'type' => 'single'
    ],
    [
        'question' => 'AsyncTask được sử dụng để làm gì?',
        'options' => ['Xử lý các tác vụ chạy nền.', 'Tạo hiệu ứng động.', 'Vẽ đồ họa.', 'Lưu trữ dữ liệu.'],
        'answer' => ['Xử lý các tác vụ chạy nền.'],
        'type' => 'single'
    ],
    [
        'question' => 'ContentProvider được sử dụng để làm gì?',
        'options' => ['Chia sẻ dữ liệu giữa các ứng dụng.', 'Tạo giao diện người dùng.', 'Xử lý sự kiện.', 'Lưu trữ dữ liệu.'],
        'answer' => ['Chia sẻ dữ liệu giữa các ứng dụng.'],
        'type' => 'single'
    ],
    [
        'question' => 'SQLite là gì?',
        'options' => ['Một hệ quản trị cơ sở dữ liệu.', 'Một ngôn ngữ lập trình.', 'Một framework.', 'Một IDE.'],
        'answer' => ['Một hệ quản trị cơ sở dữ liệu.'],
        'type' => 'single'
    ],
    [
        'question' => 'BroadcastReceiver được sử dụng để làm gì?',
        'options' => ['Nhận các thông báo từ hệ thống.', 'Gửi dữ liệu qua mạng.', 'Tạo giao diện người dùng.', 'Xử lý sự kiện.'],
        'answer' => ['Nhận các thông báo từ hệ thống.'],
        'type' => 'single'
    ],
    [
        'question' => 'Service là gì?',
        'options' => ['Một thành phần ứng dụng chạy nền.', 'Một thành phần UI.', 'Một kiểu dữ liệu.', 'Một lớp để xử lý sự kiện.'],
        'answer' => ['Một thành phần ứng dụng chạy nền.'],
        'type' => 'single'
    ],
    [
        'question' => 'Thread là gì?',
        'options' => ['Một luồng xử lý.', 'Một thành phần UI.', 'Một kiểu dữ liệu.', 'Một lớp để xử lý sự kiện.'],
        'answer' => ['Một luồng xử lý.'],
        'type' => 'single'
    ],
    [
        'question' => 'Activity Lifecycle là gì?',
        'options' => ['Quá trình tạo, khởi động, tạm dừng và hủy một Activity.', 'Vòng đời của một ứng dụng Android.', 'Quá trình tải dữ liệu từ mạng.', 'Quá trình lưu trữ dữ liệu.'],
        'answer' => ['Quá trình tạo, khởi động, tạm dừng và hủy một Activity.'],
        'type' => 'single'
    ],
    [
        'question' => 'Layout inflater được sử dụng để làm gì?',
        'options' => ['Tạo các đối tượng View từ file XML.', 'Sắp xếp các thành phần UI.', 'Xử lý sự kiện.', 'Lưu trữ dữ liệu.'],
        'answer' => ['Tạo các đối tượng View từ file XML.'],
        'type' => 'single'
    ],
    [
        'question' => 'Drawable là gì?',
        'options' => ['Một tài nguyên đồ họa.', 'Một thành phần UI.', 'Một kiểu dữ liệu.', 'Một lớp để xử lý sự kiện.'],
        'answer' => ['Một tài nguyên đồ họa.'],
        'type' => 'single'
    ],
    [
        'question' => 'dp là gì?',
        'options' => ['Đơn vị đo lường độc lập với mật độ điểm ảnh.', 'Đơn vị đo lường phụ thuộc vào mật độ điểm ảnh.', 'Một kiểu dữ liệu.', 'Một lớp để xử lý sự kiện.'],
        'answer' => ['Đơn vị đo lường độc lập với mật độ điểm ảnh.'],
        'type' => 'single'
    ],
    [
        'question' => 'Để định nghĩa một màu sắc trong Android, bạn sử dụng kiểu dữ liệu nào?',
        'options' => ['Integer', 'String', 'Color', 'Hexadecimal'],
        'answer' => ['Color', 'Hexadecimal'],
        'type' => 'multiple'
    ],
    [
        'question' => 'ViewGroup là gì?',
        'options' => ['Một lớp cơ sở cho tất cả các layout.', 'Một thành phần UI để hiển thị hình ảnh.', 'Một kiểu dữ liệu.', 'Một lớp để xử lý sự kiện.'],
        'answer' => ['Một lớp cơ sở cho tất cả các layout.'],
        'type' => 'single'
    ],
    [
        'question' => 'Thuộc tính android:layout_width="match_parent" có ý nghĩa gì?',
        'options' => ['Thành phần UI sẽ có chiều rộng bằng với chiều rộng của thiết bị.', 'Thành phần UI sẽ có chiều rộng bằng với chiều rộng của thành phần cha.', 'Thành phần UI sẽ có chiều rộng cố định là 100dp.', 'Thành phần UI sẽ tự động điều chỉnh chiều rộng.'],
        'answer' => ['Thành phần UI sẽ có chiều rộng bằng với chiều rộng của thành phần cha.'],
        'type' => 'single'
    ],
    [
        'question' => 'Thuộc tính android:gravity được sử dụng để làm gì?',
        'options' => ['Căn chỉnh nội dung của một thành phần UI.', 'Thay đổi vị trí của một thành phần UI.', 'Thay đổi kích thước của một thành phần UI.', 'Thay đổi màu sắc của một thành phần UI.'],
        'answer' => ['Căn chỉnh nội dung của một thành phần UI.'],
        'type' => 'single'
    ],
    [
        'question' => 'AndroidManifest.xml nằm ở đâu trong project Android?',
        'options' => ['Thư mục /res', 'Thư mục /src', 'Thư mục gốc của project', 'Thư mục /assets'],
        'answer' => ['Thư mục gốc của project'],
        'type' => 'single'
    ],
    [
        'question' => 'Để chạy một ứng dụng Android trên thiết bị thật, bạn cần làm gì?',
        'options' => ['Kết nối thiết bị với máy tính và bật chế độ USB debugging.', 'Cài đặt Android Studio trên thiết bị.', 'Chạy lệnh adb install trên máy tính.', 'Cả A và C.'],
        'answer' => ['Kết nối thiết bị với máy tính và bật chế độ USB debugging.'],
        'type' => 'single'
    ],
    [
        'question' => 'dp và sp khác nhau như thế nào?',
        'options' => ['dp là đơn vị đo lường độc lập với mật độ điểm ảnh, sp là đơn vị đo lường phụ thuộc vào mật độ điểm ảnh.', 'dp được sử dụng cho kích thước font chữ, sp được sử dụng cho kích thước các thành phần UI khác.', 'dp là đơn vị đo lường phụ thuộc vào mật độ điểm ảnh, sp là đơn vị đo lường độc lập với mật độ điểm ảnh.', 'dp và sp giống nhau.'],
        'answer' => ['dp là đơn vị đo lường độc lập với mật độ điểm ảnh, sp là đơn vị đo lường phụ thuộc vào mật độ điểm ảnh.'],
        'type' => 'single'
    ],
    [
        'question' => 'AlertDialog được sử dụng để làm gì?',
        'options' => ['Hiển thị một hộp thoại cho người dùng.', 'Hiển thị một thông báo ngắn gọn cho người dùng.', 'Phát nhạc.', 'Chụp ảnh màn hình.'],
        'answer' => ['Hiển thị một hộp thoại cho người dùng.'],
        'type' => 'single'
    ],
    [
        'question' => 'Intent Filter được sử dụng để làm gì?',
        'options' => ['Lọc các Intent.', 'Khai báo các Activity có thể xử lý một Intent.', 'Khởi chạy một Activity.', 'Lưu trữ dữ liệu.'],
        'answer' => ['Khai báo các Activity có thể xử lý một Intent.'],
        'type' => 'single'
    ],
    [
        'question' => 'Serializable là gì?',
        'options' => ['Một interface để lưu trữ đối tượng vào bộ nhớ.', 'Một lớp để lưu trữ dữ liệu.', 'Một kiểu dữ liệu.', 'Một lớp để xử lý sự kiện.'],
        'answer' => ['Một interface để lưu trữ đối tượng vào bộ nhớ.'],
        'type' => 'single'
    ],
    [
        'question' => 'Sự khác nhau giữa ListView và RecyclerView là gì?',
        'options' => ['RecyclerView hiệu quả hơn ListView khi xử lý danh sách lớn.', 'RecyclerView hỗ trợ ViewHolder pattern.', 'RecyclerView linh hoạt hơn ListView trong việc tùy chỉnh layout.', 'Cả A, B và C.'],
        'answer' => ['Cả A, B và C.'],
        'type' => 'single'
    ],
    [
        'question' => 'ViewHolder pattern được sử dụng để làm gì?',
        'options' => ['Tối ưu hóa hiệu năng của ListView và RecyclerView.', 'Lưu trữ dữ liệu.', 'Xử lý sự kiện.', 'Tạo giao diện người dùng.'],
        'answer' => ['Tối ưu hóa hiệu năng của ListView và RecyclerView.'],
        'type' => 'single'
    ],
    [
        'question' => 'Data Binding là gì?',
        'options' => ['Một kỹ thuật để kết nối dữ liệu với giao diện người dùng.', 'Một cách để lưu trữ dữ liệu.', 'Một kiểu dữ liệu.', 'Một lớp để xử lý sự kiện.'],
        'answer' => ['Một kỹ thuật để kết nối dữ liệu với giao diện người dùng.'],
        'type' => 'single'
    ],
    [
        'question' => 'MVVM là gì?',
        'options' => ['Một kiến trúc phần mềm.', 'Một ngôn ngữ lập trình.', 'Một framework.', 'Một IDE.'],
        'answer' => ['Một kiến trúc phần mềm.'],
        'type' => 'single'
    ],
    [
        'question' => 'Retrofit là gì?',
        'options' => ['Một thư viện để thực hiện các request HTTP.', 'Một hệ quản trị cơ sở dữ liệu.', 'Một framework.', 'Một IDE.'],
        'answer' => ['Một thư viện để thực hiện các request HTTP.'],
        'type' => 'single'
    ],
    [
        'question' => 'Gson là gì?',
        'options' => ['Một thư viện để chuyển đổi giữa JSON và Java object.', 'Một hệ quản trị cơ sở dữ liệu.', 'Một framework.', 'Một IDE.'],
        'answer' => ['Một thư viện để chuyển đổi giữa JSON và Java object.'],
        'type' => 'single'
    ],
    [
        'question' => 'Picasso là gì?',
        'options' => ['Một thư viện để tải và hiển thị hình ảnh.', 'Một hệ quản trị cơ sở dữ liệu.', 'Một framework.', 'Một IDE.'],
        'answer' => ['Một thư viện để tải và hiển thị hình ảnh.'],
        'type' => 'single'
    ],
    [
        'question' => 'Firebase là gì?',
        'options' => ['Một nền tảng di động của Google.', 'Một hệ quản trị cơ sở dữ liệu.', 'Một framework.', 'Một IDE.'],
        'answer' => ['Một nền tảng di động của Google.'],
        'type' => 'single'
    ],
    [
        'question' => 'ConstraintLayout là gì?',
        'options' => ['Một layout linh hoạt để sắp xếp các thành phần UI.', 'Một thành phần UI để hiển thị danh sách.', 'Một lớp để xử lý sự kiện.', 'Một kiểu dữ liệu.'],
        'answer' => ['Một layout linh hoạt để sắp xếp các thành phần UI.'],
        'type' => 'single'
    ],
    [
        'question' => 'DataBinding giúp giảm thiểu việc viết code ở đâu?',
        'options' => ['Trong file XML.', 'Trong file Java/Kotlin.', 'Trong file Gradle.', 'Trong file Manifest.'],
        'answer' => ['Trong file Java/Kotlin.'],
        'type' => 'single'
    ],
    [
        'question' => 'ViewModel trong kiến trúc MVVM có nhiệm vụ gì?',
        'options' => ['Lưu trữ và quản lý dữ liệu cho UI.', 'Hiển thị giao diện người dùng.', 'Xử lý sự kiện người dùng.', 'Tương tác với cơ sở dữ liệu.'],
        'answer' => ['Lưu trữ và quản lý dữ liệu cho UI.'],
        'type' => 'single'
    ],
    [
        'question' => 'LiveData là gì?',
        'options' => ['Một lớp để giữ và quan sát dữ liệu.', 'Một thành phần UI.', 'Một kiểu dữ liệu.', 'Một lớp để xử lý sự kiện.'],
        'answer' => ['Một lớp để giữ và quan sát dữ liệu.'],
        'type' => 'single'
    ],
    [
        'question' => 'Room là gì?',
        'options' => ['Một thư viện để làm việc với cơ sở dữ liệu SQLite.', 'Một hệ quản trị cơ sở dữ liệu.', 'Một framework.', 'Một IDE.'],
        'answer' => ['Một thư viện để làm việc với cơ sở dữ liệu SQLite.'],
        'type' => 'single'
    ],
    [
        'question' => 'Jetpack Compose là gì?',
        'options' => ['Một toolkit để xây dựng giao diện người dùng theo hướng khai báo.', 'Một ngôn ngữ lập trình.', 'Một framework.', 'Một IDE.'],
        'answer' => ['Một toolkit để xây dựng giao diện người dùng theo hướng khai báo.'],
        'type' => 'single'
    ],
    [
        'question' => 'Những thành phần nào sau đây có thể được sử dụng để hiển thị danh sách trong Android? (Chọn 2 đáp án)',
        'options' => ['TextView', 'ListView', 'ImageView', 'RecyclerView'],
        'answer' => ['ListView', 'RecyclerView'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Những phát biểu nào sau đây đúng về Intent? (Chọn 2 đáp án)',
        'options' => ['Intent có thể được sử dụng để truyền dữ liệu giữa các Activity.', 'Intent chỉ có thể được sử dụng để khởi chạy Activity.', 'Intent có thể được sử dụng để khởi chạy Service.', 'Intent không thể chứa dữ liệu.'],
        'answer' => ['Intent có thể được sử dụng để truyền dữ liệu giữa các Activity.', 'Intent có thể được sử dụng để khởi chạy Service.'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Những phương thức nào sau đây thuộc vòng đời của một Activity? (Chọn nhiều đáp án)',
        'options' => ['onCreate()', 'onClick()', 'onStart()', 'onResume()', 'onDestroy()'],
        'answer' => ['onCreate()', 'onStart()', 'onResume()', 'onDestroy()'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Những thư viện nào sau đây thường được sử dụng trong lập trình Android? (Chọn 3 đáp án)',
        'options' => ['Retrofit', 'Gson', 'Picasso', 'jQuery'],
        'answer' => ['Retrofit', 'Gson', 'Picasso'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Những lợi ích nào khi sử dụng ConstraintLayout? (Chọn 2 đáp án)',
        'options' => ['Giúp giảm thiểu việc lồng ghép layout.', 'Cải thiện hiệu năng của ứng dụng.', 'Dễ dàng tạo hiệu ứng động.', 'Giúp code dễ đọc hơn.'],
        'answer' => ['Giúp giảm thiểu việc lồng ghép layout.', 'Cải thiện hiệu năng của ứng dụng.'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Những thành phần nào sau đây thuộc kiến trúc MVVM? (Chọn 3 đáp án)',
        'options' => ['Model', 'View', 'Controller', 'ViewModel'],
        'answer' => ['Model', 'View', 'ViewModel'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Những công cụ nào sau đây có thể được sử dụng để debug ứng dụng Android? (Chọn nhiều đáp án)',
        'options' => ['Android Studio Debugger', 'Logcat', 'ADB', 'Git'],
        'answer' => ['Android Studio Debugger', 'Logcat', 'ADB'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Những kỹ thuật nào sau đây giúp tối ưu hóa hiệu năng ứng dụng Android? (Chọn nhiều đáp án)',
        'options' => ['Sử dụng ViewHolder pattern.', 'Sử dụng AsyncTask cho các tác vụ chạy nền.', 'Giảm thiểu việc sử dụng bộ nhớ.', 'Tối ưu hóa hình ảnh.'],
        'answer' => ['Sử dụng ViewHolder pattern.', 'Sử dụng AsyncTask cho các tác vụ chạy nền.', 'Giảm thiểu việc sử dụng bộ nhớ.', 'Tối ưu hóa hình ảnh.'],
        'type' => 'multiple'
    ],
    [
        'question' => 'Những khái niệm nào sau đây liên quan đến việc lưu trữ dữ liệu trong Android? (Chọn 3 đáp án)',
        'options' => ['SharedPreferences', 'SQLite', 'ContentProvider', 'Intent'],
        'answer' => ['SharedPreferences', 'SQLite', 'ContentProvider'],
        'type' => 'multiple'
    ]
];

$totalQuestions = count($quizData);
$score = 0;
$results = [];
$submitted = false;

// Logic xử lý khi form được gửi (kiểm tra đáp án)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted = true;
    
    foreach ($quizData as $index => $question) {
        $inputName = "q_" . $index;
        // Lấy câu trả lời của người dùng. Nếu là checkbox (multiple choice), nó sẽ là mảng.
        $userAnswer = $_POST[$inputName] ?? [];

        if (!is_array($userAnswer)) {
            $userAnswer = [$userAnswer]; // Đảm bảo câu trả lời single choice cũng là mảng để so sánh
        }

        // Chuẩn hóa và sắp xếp cả hai mảng để so sánh chính xác (đặc biệt quan trọng với multiple choice)
        $sortedUserAnswer = array_map('trim', $userAnswer);
        sort($sortedUserAnswer);
        $sortedCorrectAnswer = array_map('trim', $question['answer']);
        sort($sortedCorrectAnswer);

        // So sánh: số lượng phải bằng nhau VÀ nội dung phải khớp
        $isCorrect = (
            count($sortedUserAnswer) === count($sortedCorrectAnswer) &&
            $sortedUserAnswer === $sortedCorrectAnswer
        );

        $results[] = [
            'question_index' => $index,
            'is_correct' => $isCorrect,
            'correct_answer' => implode(' và ', $question['answer'])
        ];

        if ($isCorrect) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Thi Trắc Nghiệm Android (PHP)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bài Thi Trắc Nghiệm Cơ Bản Về Android 🤖 (PHP)</h1>

        <?php if ($submitted): ?>
        <div id="results" class="results">
            <h2>Kết Quả Của Bạn:</h2>
            <p id="score-display">Bạn đã trả lời đúng **<?php echo $score; ?>** trên tổng số **<?php echo $totalQuestions; ?>** câu hỏi.</p>
            
            <div id="feedback-container">
                <?php foreach ($results as $result): ?>
                    <?php 
                        $question = $quizData[$result['question_index']];
                        $class = $result['is_correct'] ? 'correct' : 'incorrect';
                    ?>
                    <div class="question-block <?php echo $class; ?>">
                        <h3><?php echo $result['question_index'] + 1; ?>. <?php echo $question['question']; ?></h3>
                        <p>
                            **Câu <?php echo $result['question_index'] + 1; ?>:** <?php echo $result['is_correct'] ? 'Chính xác!' : 'Sai!'; ?> 
                            <?php if (!$result['is_correct']): ?>
                                Đáp án đúng là: <span class="correct-answer-text"><?php echo $result['correct_answer']; ?></span>
                            <?php endif; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <p><a href="index.php" class="reset-link">Làm lại bài thi</a></p>
        </div>
        
        <?php else: ?>
        <form method="POST" action="index.php">
            <div id="quiz-container">
                <?php foreach ($quizData as $index => $item): ?>
                    <?php
                        // Chọn loại input: radio cho single, checkbox cho multiple
                        $inputType = $item['type'] === 'single' ? 'radio' : 'checkbox';
                        // Đặt tên input: q_0, q_1, ... Nếu là checkbox, cần '[]' để PHP nhận mảng
                        $inputName = "q_" . $index . ($item['type'] === 'multiple' ? '[]' : '');
                    ?>
                    <div class="question-block">
                        <h3><?php echo $index + 1; ?>. <?php echo $item['question']; ?></h3>
                        <div class="option-group">
                            <?php foreach ($item['options'] as $option): ?>
                                <label>
                                    <input type="<?php echo $inputType; ?>" 
                                           name="<?php echo $inputName; ?>" 
                                           value="<?php echo htmlspecialchars(trim($option)); ?>"
                                           required>
                                    <?php echo $option; ?>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="submit" id="submit-btn">Nộp Bài và Xem Kết Quả</button>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>