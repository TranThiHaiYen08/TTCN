<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Đánh giá</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .hero {
      background: url('banner.jpg') center/cover no-repeat;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #ffa500;
      font-size: 2.5rem;
      font-weight: bold;
      text-shadow: 1px 1px 4px #000;
    }
    .footer {
      background-color: #0d1b2a;
      color: white;
      padding: 40px 0;
      margin-top: 40px;
    }
    .nav-tabs .nav-link.active {
      background-color: #0d6efd;
      color: white;
    }
    .form-select, .form-control {
      margin-bottom: 10px;
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
        <li class="nav-item"><a class="nav-link" href="#">Huy động</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Thành viên</a></li>
      </ul>
      <button class="btn btn-danger me-2">Thông Báo</button>
      <button class="btn btn-outline-dark">Đăng Xuất</button>
    </div>
  </nav>

  <!-- Banner -->
  <div class="hero">Đánh giá</div>

  <!-- Tabs -->
  <div class="container mt-4">
  <ul class="nav nav-tabs mb-3">
    <li class="nav-item">
      <a class="nav-link bg-white text-dark" href="danhgia_diemdanh.php">Đánh giá theo sự kiện</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active bg-primary text-white" href="danhgiahk_diemdanh.php">Đánh giá theo học kỳ</a>
    </li>
  </ul>

    <!-- Bộ lọc -->
    <div class="row mb-3">
      <div class="col-md-4">
        <select class="form-select">
          <option selected>Hội Hỗ Trợ Việc Làm</option>
          <option>Sự kiện khác</option>
        </select>
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Tìm kiếm theo tên hoặc mã SV">
      </div>
      <div class="col-md-4">
        <button class="btn btn-primary w-100">Tìm kiếm</button>
      </div>
    </div>

    <!-- Bảng đánh giá -->
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-light">
          <tr>
            <th>Mã thành viên</th>
            <th>Họ tên</th>
            <th>Công việc</th>
            <th>Thời gian bắt đầu</th>
            <th>Thời gian kết thúc</th>
            <th>Thời gian điểm danh</th>
            <th>Mức đánh giá</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Nguyễn Văn A</td>
            <td>MC</td>
            <td>2024-05-01 08:00</td>
            <td>2024-05-01 09:00</td>
            <td>2024-05-01 08:55</td>
            <td>
              <select class="form-select">
                <option>1</option><option>2</option><option>3</option><option selected>4</option><option>5</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Trần Thị B</td>
            <td>Lễ tân</td>
            <td>2024-05-01 08:00</td>
            <td>2024-05-01 09:00</td>
            <td>2024-05-01 08:58</td>
            <td>
              <select class="form-select">
                <option>1</option><option>2</option><option>3</option><option selected>4</option><option>5</option>
              </select>
            </td>
          </tr>
          <!-- Thêm các dòng khác nếu cần -->
        </tbody>
      </table>
    </div>

    <!-- Nút lưu và phân trang -->
    <div class="d-flex justify-content-between align-items-center">
      <button class="btn btn-success">💾 Lưu lại</button>
      <nav>
        <ul class="pagination m-0">
          <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer text-center mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">PHÒNG CÔNG TÁC SINH VIÊN - HVNH</div>
        <div class="col-md-4">Email: hotrosukien@hvnh.edu.vn</div>
        <div class="col-md-4">LINK QUAN TRỌNG</div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
