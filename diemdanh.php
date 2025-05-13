<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Huy động</title>
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
    .footer {
      background-color: #0d1b2a;
      color: #fff;
      padding: 40px 0;
      margin-top: 40px;
    }
    .footer h6 {
      color: #ccc;
      font-weight: bold;
    }
    .nav-pills .nav-link.active {
      background-color: #0d6efd;
    }
    .btn-outline-info, .btn-success {
      margin-right: 5px;
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
  <div class="hero">Điểm danh</div>

  <!-- Form lọc -->
  <div class="container mb-4">
    <div class="row mb-3">
      <div class="col-md-3">
        <select class="form-select">
          <option>Chọn Sự Kiện</option>
          <option>Hỗ trợ việc làm</option>
        </select>
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Tìm kiếm theo tên hoặc số điện thoại">
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option>Chọn công việc</option>
          <option>Trực sự kiện</option>
          <option>Đón tiếp khách</option>
        </select>
      </div>
      <div class="col-md-2">
        <button class="btn btn-primary w-100">Áp dụng lọc</button>
      </div>
    </div>
  </div>

  <!-- Bảng danh sách -->
  <div class="container">
    <table class="table table-bordered table-hover">
      <thead class="table-light text-center">
        <tr>
          <th>STT</th>
          <th>Tên Thành Viên</th>
          <th>Số Điện Thoại</th>
          <th>Tên Công Việc</th>
          <th>Thời Gian Bắt Đầu</th>
          <th>Thời Gian Kết Thúc</th>
          <th>Khu Vực</th>
          <th>Thời Gian Điểm Danh</th>
          <th>Điểm Danh</th>
          <th>Chỉnh Sửa</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <td>1</td>
          <td>Nguyễn Văn A</td>
          <td>0932456777</td>
          <td>Quản lý sự kiện</td>
          <td>9:00</td>
          <td>10:00</td>
          <td>Khu A</td>
          <td>9:10 SA</td>
          <td><button class="btn btn-success btn-sm">Điểm danh</button></td>
          <td><button class="btn btn-warning btn-sm text-white">Chỉnh sửa</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Trịnh Thị B</td>
          <td>0987654321</td>
          <td>Hỗ trợ</td>
          <td>8:30</td>
          <td>10:30</td>
          <td>Khu B</td>
          <td>Chưa điểm danh</td>
          <td><button class="btn btn-success btn-sm">Điểm danh</button></td>
          <td><button class="btn btn-warning btn-sm text-white">Chỉnh sửa</button></td>
        </tr>
      </tbody>
    </table>
    <div class="d-flex justify-content-between">
      <button class="btn btn-primary">In báo cáo</button>
      <nav>
        <ul class="pagination">
          <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4">PHÒNG CÔNG TÁC SINH VIÊN - HVNH</div>
        <div class="col-md-4">Email: hotrosukien@hvnh.edu.vn</div>
        <div class="col-md-4">LINK QUAN TRỌNG</div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (nếu dùng collapse, menu dropdown) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
