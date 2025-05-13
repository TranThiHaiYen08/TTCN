<?php
require_once '../database/db.php'; // Kết nối CSDL

// Kiểm tra kết nối database
if (!$conn) {
    echo json_encode([
        'success' => false,
        'message' => 'Lỗi kết nối database: ' . mysqli_connect_error()
    ]);
    exit();
}

header('Content-Type: application/json');

// Kiểm tra phương thức request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Phương thức không được hỗ trợ!'
    ]);
    exit();
}

// Kiểm tra dữ liệu đầu vào
$required_fields = ['memberCode', 'memberName', 'birthDate', 'gender', 'class', 'username'];
foreach ($required_fields as $field) {
    if (!isset($_POST[$field]) || empty($_POST[$field])) {
        echo json_encode([
            'success' => false,
            'message' => 'Vui lòng điền đầy đủ thông tin bắt buộc!'
        ]);
        exit();
    }
}

try {
    // Nhận dữ liệu từ form
    $memberCode = trim($_POST['memberCode']);
    $memberName = trim($_POST['memberName']);
    $birthDate  = trim($_POST['birthDate']);
    $gender     = trim($_POST['gender']);
    $class      = trim($_POST['class']);
    $khoa       = trim($_POST['khoa'] ?? '');
    $phone      = trim($_POST['phone'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $username   = trim($_POST['username']);

    // Kiểm tra trùng Mã Thành Viên hoặc Tên Đăng Nhập
    $check = $conn->prepare("SELECT * FROM sinhvien WHERE MaSinhVien = ? OR TenDangNhap = ?");
    if (!$check) {
        throw new Exception('Lỗi prepare statement: ' . $conn->error);
    }

    $check->bind_param("ss", $memberCode, $username);
    if (!$check->execute()) {
        throw new Exception('Lỗi execute statement: ' . $check->error);
    }

    $result = $check->get_result();
    if ($result->num_rows > 0) {
        echo json_encode([
            'success' => false,
            'message' => 'Trùng mã thành viên hoặc tên đăng nhập!'
        ]);
        exit();
    }
    $check->close();

    // Thêm thành viên
    $stmt = $conn->prepare("INSERT INTO sinhvien (
        MaSinhVien, HoTen, NgaySinh, GioiTinh, Lop, Khoa, SDT, Email, TenDangNhap
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        throw new Exception('Lỗi prepare statement: ' . $conn->error);
    }

    $stmt->bind_param("sssssssss", $memberCode, $memberName, $birthDate, $gender, $class, $khoa, $phone, $email, $username);

    if (!$stmt->execute()) {
        throw new Exception('Lỗi execute statement: ' . $stmt->error);
    }

    echo json_encode([
        'success' => true,
        'message' => 'Thêm thành viên thành công!'
    ]);

    $stmt->close();

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Lỗi: ' . $e->getMessage()
    ]);
}

$conn->close();
?>
