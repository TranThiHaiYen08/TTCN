<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Trang chín - ACC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .feature-icon {
      font-size: 2rem;
      color: #0d6efd;
    }
    .card:hover {
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .footer {
      background-color: #0d0d3c;
      color: white;
      padding: 30px 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3 text-primary" href="#">ACC</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Sự kiện</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Điểm danh</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Huy động</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Thành viên</a></li>
      </ul>
      <div>
        <button class="btn btn-outline-danger me-2">Thông Báo</button>
        <button class="btn btn-outline-secondary">Đăng Xuất</button>
      </div>
    </div>
  </div>
</nav>

<!-- Banner -->
<div class="container text-center mt-4">
  <img src="banner.jpg" class="img-fluid" alt="Banner">
</div>

<!-- Functionalities -->
<div class="container mt-5 text-center">
  <h2 class="fw-bold">CHỨC NĂNG</h2>
  <div class="row mt-4">
    <?php
    $features = [
      ["Quản lý thành viên", "bi-people"],
      ["Sự kiện", "bi-calendar-event"],
      ["Đánh giá", "bi-graph-up"],
      ["Điểm danh", "bi-clipboard-check"],
      ["Huy động", "bi-person-lines-fill"],
      ["Tạo công việc", "bi-briefcase"],
      ["Thành tích", "bi-award"],
      ["Truyền thông", "bi-megaphone"]
    ];
    foreach ($features as $feature) {
      echo '<div class="col-md-3 mb-4">
              <div class="card p-3 shadow-sm">
                <div class="feature-icon"><i class="bi '.$feature[1].'"></i></div>
                <div class="mt-2">'.$feature[0].'</div>
              </div>
            </div>';
    }
    ?>
  </div>
  <button class="btn btn-outline-primary">Xem Thêm</button>
</div>

<!-- Footer -->
<footer class="footer mt-5">
  <div class="container d-flex justify-content-between">
    <div>
      <h5>PHÒNG CÔNG TÁC SINH VIÊN - HVNH</h5>
      <p>Phòng Công tác sinh viên HVNH là đơn vị hỗ trợ toàn diện cho sinh viên trong học tập và hoạt động ngoại khóa.  
  Là đầu mối quản lý các câu lạc bộ sinh viên và tổ chức sự kiện tại học viện.</p>
    </div>
    <div>
      <h5>THÔNG TIN LIÊN HỆ</h5>
      <p>Phòng 101, 102 Tòa nhà A2<br>SĐT: 0243.852.1853<br>Email: hotronguoihoc@hvnh.edu.vn</p>
    </div>
    <div>
      <h5>LINK QUAN TRỌNG</h5>
      <ul class="list-unstyled">
        <li>Sự kiện</li>
        <li>Huy động</li>
        <li>Công việc</li>
        <li>Điểm danh</li>
      </ul>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
</body>
</html>
