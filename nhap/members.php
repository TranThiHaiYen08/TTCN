<?php
$members = [
  ["ACC0001", "Hà Hải Nam", "30/06/2003", "Nam", "Phú Thọ", "0901234567", "Truyền thông"],
  ["ACC0002", "Nguyễn Văn An", "01/01/2004", "Nam", "Hà Nội", "0903290567", "Tổ chức"],
  ["ACC0003", "Nguyễn Ngọc Phương", "10/09/2003", "Nữ", "Hà Nội", "0364782345", "Tổ chức"],
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý thành viên</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3 text-primary" href="#">ACC</a>
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
    </ul>
    <div>
      <button class="btn btn-outline-danger me-2">Thông Báo</button>
      <button class="btn btn-outline-secondary">Đăng Xuất</button>
    </div>
  </div>
</nav>

<!-- Header -->
<div class="container text-center mb-4">
  <h2 class="fw-bold text-warning">Quản lý thành viên</h2>
</div>

<!-- Search + Filter -->
<div class="container mb-3">
  <div class="d-flex justify-content-between">
    <button class="btn btn-primary">+ Thêm Thành Viên</button>
    <input class="form-control w-50" placeholder="Tìm kiếm...">
    <select class="form-select w-25">
      <option>Lọc theo ban</option>
      <option>Truyền thông</option>
      <option>Tổ chức</option>
    </select>
  </div>
</div>

<!-- Member Table -->
<div class="container">
  <table class="table table-bordered">
    <thead class="table-light">
      <tr>
        <th>Mã Thành Viên</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Giới Tính</th>
        <th>Địa Chỉ</th><th>SĐT</th><th>Ban</th><th>Chi Tiết</th><th>Sửa</th><th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($members as $m): ?>
      <tr>
        <td><?= $m[0] ?></td><td><?= $m[1] ?></td><td><?= $m[2] ?></td><td><?= $m[3] ?></td>
        <td><?= $m[4] ?></td><td><?= $m[5] ?></td><td><?= $m[6] ?></td>
        <td><button class="btn btn-info btn-sm">Chi Tiết</button></td>
        <td><button class="btn btn-warning btn-sm">Sửa</button></td>
        <td><button class="btn btn-danger btn-sm">Xóa</button></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Pagination -->
<div class="container text-center">
  <nav>
    <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
  </nav>
</div>

</body>
</html>
