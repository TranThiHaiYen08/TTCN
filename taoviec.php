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

  <!-- Nội dung chính -->
 <div class="container mt-4">
    <ul class="nav nav-pills mb-3">
      <li class="nav-item">
        <a class="nav-link active" href="taoviec.php">Tạo công việc</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gancongviec.php">Gán công việc</a>
      </li>
    </ul>

    <!-- Bảng -->
    <div class="card mt-3">
      <div class="card-header fw-bold">Tạo Công Việc</div>
      <div class="card-body p-0">
        <table class="table table-bordered mb-0">
          <thead>
            <tr>
              <th>Mã Gói Công Việc</th>
              <th>Tên Gói Công Việc</th>
              <th>Khu Vực</th>
               <th>Số lượng</th>
              <th>Nội dung chi tiết</th>
            </tr>
          </thead>
          <tbody>
            <!-- Lặp ví dụ 10 dòng -->
            <!-- Dòng 1 -->
            <tr>
              <td>000</td>
              <td>Trang trí hội trường</td>
              <td>Khu vực hội trường chính</td>
              <td>20</td>
             <td>Sinh viên làm các công việc liên quan</td>
            </tr>
            <!-- Lặp thêm tùy ý -->
<tr>
  <td>001</td>
  <td>Chuẩn bị hậu trường</td>
  <td>Khu vực hội trường chính</td>
   <td>15</td>
     <td>Sinh viên làm các công việc liên quan</td></tr>
<tr>
  <td>002</td>
  <td>Đón tiếp khách mời</td>
  <td>Khu vực hội trường chính</td>
   <td>20</td>
 <td>Sinh viên làm các công việc liên quan</td></tr>
           <tr>
  <td>003</td>
  <td>Bàn checkin</td>
  <td>Khu vực sân D1</td>
   <td>10</td>
    <td>Sinh viên làm các công việc liên quan</td></tr>

          </tbody>
        </table>
      </div>
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
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
