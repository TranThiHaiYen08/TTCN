<?php
require_once '../database/db.php';

// Thiết lập bộ ký tự UTF-8
mysqli_set_charset($conn, "utf8");

// Phân trang
$results_per_page = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_from = ($page - 1) * $results_per_page;

// Tìm kiếm
$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$search_condition = '';
if (!empty($search)) {
    $search_condition = " WHERE HoTen LIKE '%$search%' OR MaSinhVien LIKE '%$search%' OR SDT LIKE '%$search%'";
}

// Lọc theo Khoa
$filter = isset($_GET['filter']) ? mysqli_real_escape_string($conn, $_GET['filter']) : '';
$filter_condition = '';
if (!empty($filter)) {
    $filter_condition = empty($search_condition) ? " WHERE Khoa = '$filter'" : " AND Khoa = '$filter'";
}

// Tổng số bản ghi
$count_query = "SELECT COUNT(*) as total FROM sinhvien" . $search_condition . $filter_condition;
$count_result = $conn->query($count_query);
$total_rows = $count_result->fetch_assoc();
$total_pages = ceil($total_rows['total'] / $results_per_page);

// Truy vấn dữ liệu sinh viên
$query = "SELECT * FROM sinhvien" . $search_condition . $filter_condition . 
         " ORDER BY MaSinhVien LIMIT $start_from, $results_per_page";
$result = $conn->query($query);

// Lấy danh sách các khoa để lọc
$departments_query = "SELECT DISTINCT Khoa FROM sinhvien WHERE Khoa IS NOT NULL";
$departments_result = $conn->query($departments_query);
?>
