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
  <div class="hero">Huy động</div>

  <!-- Tab -->
   <div class="container mt-4">
  <ul class="nav nav-tabs mb-3">
    <li class="nav-item">
      <a class="nav-link bg-white text-dark" href="huydong.php">Sự kiện sắp diễn ra</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active bg-primary text-white" href="#">Sự kiện đã tham gia</a>
    </li>
  </ul>
  

    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-bordered align-middle text-center">
        <thead class="table-light">
          <tr>
            <th>Tên Sự Kiện</th>
            <th>Ngày</th>
            <th>Thời Gian</th>
            <th>Địa Điểm</th>
            <th>Thao Tác</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hội chợ việc làm</td>
            <td>01/06/2024</td>
            <td>08:00 - 12:00</td>
            <td>Hội trường lớn</td>
            <td>
             
              <button class="btn btn-success btn-sm">Công việc</button>
              <button class="btn btn-outline-info btn-sm">Danh sách tham gia</button>
            </td>
          </tr>
          <!-- Thêm các hàng khác ở đây -->
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>

  <!-- Footer -->
  <footer class="footer text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h6>PHÒNG CÔNG TÁC SINH VIÊN - HVNH</h6>
          <p>Phục vụ sinh viên và công tác Học Viện<br>Vui lòng liên hệ qua email & số điện thoại ACC.</p>
        </div>
        <div class="col-md-4">
          <h6>THÔNG TIN LIÊN HỆ</h6>
          <p>Địa chỉ: Phòng 101, Tòa nhà A2<br>Điện thoại: 0243 852 1931<br>Email: hotrosinhvien@hvnh.edu.vn</p>
        </div>
        <div class="col-md-4">
          <h6>LINK QUAN TRỌNG</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-light">Sự kiện</a></li>
            <li><a href="#" class="text-light">Điểm danh</a></li>
            <li><a href="#" class="text-light">Công việc</a></li>
            <li><a href="#" class="text-light">Thành viên</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
