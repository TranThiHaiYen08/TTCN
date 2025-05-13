<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header ACC</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="views/style.css" rel="stylesheet">
</head>
<body>
   <?php include 'template/header.php'; ?>
   <?php include 'template/baner.php'; ?>


   

            <!-- Bạn có thể lặp lại tương tự cho các chức năng khác (Sự kiện, Đánh giá, Điểm danh...) như bên dưới -->

            <!-- Ví dụ thêm 1 chức năng khác -->
            <div class="container my-5">
                <h2 class="section-title mb-5">CHỨC NĂNG</h2>
                
                <div class="row g-4">
                    <!-- First row -->
                    <div class="col-6 col-md-3">
                        <div class="feature-card bg-white border">
                            <a href="views/quanlythanhvien.php" class="d-block text-decoration-none text-dark">
                            <svg class="feature-icon icon-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 7h-3V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v3H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2z"/>
                                <circle cx="12" cy="11" r="3"/>
                                <path d="M9 17h6"/>
                            </svg>
                            <div class="feature-title">Quản lý thành viên</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="feature-card bg-white border">
                            <a href="duong-dan-cua-ban.html" class="d-block text-decoration-none text-dark">
                            <svg class="feature-icon icon-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="12" rx="2" ry="2"/>
                                <line x1="7" y1="20" x2="17" y2="20"/>
                                <line x1="12" y1="16" x2="12" y2="20"/>
                                <circle cx="10" cy="10" r="2"/>
                                <path d="M14 8v4l2-2"/>
                            </svg>
                            <div class="feature-title">Sự kiện</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="feature-card bg-white border">
                            <a href="duong-dan-cua-ban.html" class="d-block text-decoration-none text-dark">
                            <svg class="feature-icon icon-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 3v18h18"/>
                                <path d="M18 17V9"/>
                                <path d="M13 17V5"/>
                                <path d="M8 17v-3"/>
                            </svg>
                            <div class="feature-title">Đánh giá</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="feature-card bg-white border">
                            <a href="duong-dan-cua-ban.html" class="d-block text-decoration-none text-dark">
                            <svg class="feature-icon icon-pink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                                <polyline points="10 9 9 9 8 9"/>
                            </svg>
                            <div class="feature-title">Điểm danh</div>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Second row -->
                    <div class="col-6 col-md-3">
                        <div class="feature-card bg-white border">
                            <a href="duong-dan-cua-ban.html" class="d-block text-decoration-none text-dark">
                            <svg class="feature-icon icon-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 9l4-4h12l4 4"/>
                                <path d="M2 9v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9"/>
                                <path d="M11 14h2"/>
                            </svg>
                            <div class="feature-title">Huy động</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="feature-card bg-white border">
                            <a href="duong-dan-cua-ban.html" class="d-block text-decoration-none text-dark">
                            <svg class="feature-icon icon-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                            </svg>
                            <div class="feature-title">Tạo công việc</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="feature-card bg-white border">
                            <a href="duong-dan-cua-ban.html" class="d-block text-decoration-none text-dark">
                            <svg class="feature-icon icon-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                                <line x1="8" y1="21" x2="16" y2="21"/>
                                <line x1="12" y1="17" x2="12" y2="21"/>
                                <path d="M12 7v.01"/>
                                <path d="M16 7v.01"/>
                                <path d="M8 7v.01"/>
                            </svg>
                            <div class="feature-title">Thành tích</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="feature-card bg-white border">
                            <a href="duong-dan-cua-ban.html" class="d-block text-decoration-none text-dark">
                            <svg class="feature-icon icon-blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                            </svg>
                            <div class="feature-title">Truyền thông</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Các ô khác bạn có thể copy và chỉnh sửa nội dung/icon tương ứng -->
        </div>
    </div>
     <!-- Footer -->
     <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4 mb-4">
                    <h5>PHÒNG CÔNG TÁC SINH VIÊN - HVNH</h5>
                    <p>Phòng Công tác sinh viên HVNH là đơn vị hỗ trợ toàn diện cho sinh viên trong học tập và hoạt động ngoại khóa.  
  Là đầu mối quản lý các câu lạc bộ sinh viên và tổ chức sự kiện tại học viện.                </div>
                
                <!-- Column 2 -->
                <div class="col-md-4 mb-4">
                    <h5>THÔNG TIN LIÊN HỆ</h5>
                    <p>Địa chỉ: Phòng 101, 102 Tòa nhà A2</p>
                    <p>Trụ sở chính Học viện Ngân hàng</p>
                    <p>Phone: 0243 852 1853</p>
                    <p>Email: hotrosinhvien@hvnh.edu.vn</p>
                </div>
                
                <!-- Column 3 -->
                <div class="col-md-4 mb-4">
                    <h5>LINK QUAN TRỌNG</h5>
                    <ul class="footer-links">
                        <li><a href="#">Sự kiện</a></li>
                        <li><a href="#">Huy động</a></li>
                        <li><a href="#">Công việc</a></li>
                        <li><a href="#">Điểm danh</a></li>
                        <li><a href="#">Đánh giá</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scroll to top button -->
    <div class="scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="js.js" crossorigin="anonymous"></script>
</body>
</html>
