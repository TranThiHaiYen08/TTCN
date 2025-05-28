<!-- <div class="container mt-4">
  <ul class="nav nav-tabs mb-3">
    <li class="nav-item">
      <a class="nav-link bg-white text-dark" href="#">Tạo công việc</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active bg-primary text-white" href="#">Gán công việc</a>
    </li>
  </ul>
   -->

   <!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gán Công Việc</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .navbar {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .hero {
      background: url('banner.jpg') center/cover no-repeat;
      height: 200px;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2.5rem;
      font-weight: bold;
      text-shadow: 1px 1px 4px #000;
    }
    .nav-pills .nav-link.active {
      background-color: #0d6efd;
    }
    .table td, .table th {
      vertical-align: middle;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-4">
  <a class="navbar-brand fw-bold" href="#">ACC</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Sự kiện</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Điểm danh</a></li>
      <li class="nav-item"><a class="nav-link active" href="#">Huy động</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Thành viên</a></li>
    </ul>
    <button class="btn btn-danger me-2">Thông Báo</button>
    <button class="btn btn-outline-dark">Đăng Xuất</button>
  </div>
</nav>

<!-- Banner -->
<div class="hero">Tạo việc</div>

<!-- Nội dung chính -->
<div class="container mt-4">
  <ul class="nav nav-pills mb-3">
    <li class="nav-item">
      <a class="nav-link" href="taoviec.php">Tạo công việc</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="gancongviec.php">Gán công việc</a>
    </li>
  </ul>

  <!-- Bảng gán công việc -->
  <div class="card">
    <div class="card-header fw-bold">Gán Công Việc</div>
    <div class="card-body p-0">
      <table class="table table-bordered mb-0 text-center">
        <thead class="table-light">
          <tr>
            <th>Mã Thành Viên</th>
            <th>Tên Thành Viên</th>
            <th>Ban</th>
            <th>Ca Đăng Ký</th>
            <th>Công Việc</th>
            <th>Thời Gian Bắt Đầu</th>
            <th>Thời Gian Kết Thúc</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ACC001</td>
            <td>Hà Hải Nam</td>
            <td>Ban truyền thông</td>
            <td>Ca 1</td>
            <td>
              <select class="form-select">
                <option>Công việc sinh viên 1</option>
                <option>Công việc sinh viên 2</option>
              </select>
            </td>
            <td><input type="datetime-local" class="form-control" value="2024-05-20T08:00"></td>
            <td><input type="datetime-local" class="form-control" value="2024-05-20T12:00"></td>
          </tr>
          <!-- Lặp dòng nếu cần -->
          <tr>
            <td>ACC002</td>
            <td>Nguyễn Văn A</td>
            <td>Ban hậu cần</td>
            <td>Ca 2</td>
            <td>
              <select class="form-select">
                <option>Công việc hậu cần 1</option>
                <option>Công việc hậu cần 2</option>
              </select>
            </td>
            <td><input type="datetime-local" class="form-control" value="2024-05-21T13:00"></td>
            <td><input type="datetime-local" class="form-control" value="2024-05-21T17:00"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-footer text-end">
      <button class="btn btn-primary">Chỉnh Sửa</button>
      <button class="btn btn-success">Lưu</button>
    </div>
  </div>

  <!-- Pagination -->
  <nav class="mt-3">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
