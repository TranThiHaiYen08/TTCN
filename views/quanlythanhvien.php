<?php include '../controllers/controlerquanlythanhvien.php'; ?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản Lý Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include '../template/header.php'; ?>
   <?php include '../template/baner.php'; ?>
   
    <div class="container-fluid py-4">
        <!-- Add Member -->
        <div class="row mb-3">
            <div class="col-md-12">
               <button type="button" class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                    <i class="fas fa-plus"></i> Thêm Sinh Viên
                </button>
            </div>
        </div>
       

        <!-- Search and Filter -->
        <div class="row mb-3">
            <div class="col-md-4">
                <form method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control" placeholder="Tìm kiếm..." value="<?php echo $search; ?>">
                    <button type="submit" class="btn btn-primary ms-2">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-8">
                <form method="GET" class="d-flex justify-content-end">
                    <select name="filter" class="form-select" style="max-width: 200px;" onchange="this.form.submit()">
                        <option value="">Lọc theo khoa</option>
                        <?php while($dept = $departments_result->fetch_assoc()): ?>
                            <option value="<?php echo $dept['Khoa']; ?>" <?php echo ($filter == $dept['Khoa']) ? 'selected' : ''; ?>>
                                <?php echo $dept['Khoa']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </form>
            </div>
        </div>

        <!-- Members Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="card member-table">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mã Sinh Viên</th>
                                        <th>Họ Tên</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <th>Lớp</th>
                                        <th>Khoa</th>
                                        <th>SĐT</th>
                                        <th>Email</th>
                                        <th>Tên Đăng Nhập</th>
                                        <th>Chi Tiết</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $counter = ($page - 1) * $results_per_page + 1;
                                    if($result->num_rows > 0):
                                        while($row = $result->fetch_assoc()):
                                    ?>
                                    <tr>
                                        <td><?php echo $counter++; ?></td>
                                        <td><?php echo $row['MaSinhVien']; ?></td>
                                        <td><?php echo $row['HoTen']; ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($row['NgaySinh'])); ?></td>
                                        <td><?php echo $row['GioiTinh']; ?></td>
                                        <td><?php echo $row['Lop']; ?></td>
                                        <td><?php echo $row['Khoa']; ?></td>
                                        <td><?php echo $row['SDT']; ?></td>
                                        <td><?php echo $row['Email']; ?></td>
                                        <td><?php echo $row['TenDangNhap']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-action" onclick="showDetailMember(
                                                '<?php echo $row['MaSinhVien']; ?>',
                                                '<?php echo $row['HoTen']; ?>',
                                                '<?php echo $row['Email']; ?>',
                                                '<?php echo date('d/m/Y', strtotime($row['NgaySinh'])); ?>',
                                                '<?php echo $row['GioiTinh']; ?>',
                                                '<?php echo isset($row['DiaChi']) ? $row['DiaChi'] : ''; ?>',
                                                '<?php echo $row['SDT']; ?>',
                                                '<?php echo isset($row['Ban']) ? $row['Ban'] : ''; ?>',
                                                '<?php echo $row['Lop']; ?>',
                                                '<?php echo $row['Khoa']; ?>',
                                                '<?php echo isset($row['NgayGiaNhap']) ? $row['NgayGiaNhap'] : ''; ?>',
                                                '<?php echo isset($row['ChucVu']) ? $row['ChucVu'] : ''; ?>'
                                            )">
                                                <i class="fas fa-info-circle text-white"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-action" onclick="editMember('<?php echo $row['MaSinhVien']; ?>', '<?php echo $row['HoTen']; ?>', '<?php echo $row['NgaySinh']; ?>', '<?php echo $row['GioiTinh']; ?>', '<?php echo $row['Lop']; ?>', '<?php echo $row['Khoa']; ?>', '<?php echo $row['SDT']; ?>', '<?php echo $row['Email']; ?>', '<?php echo $row['TenDangNhap']; ?>')">
                                                <i class="fas fa-edit text-white"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <a href="controllers/xoasv.php?MaSinhVien=<?php echo $row['MaSinhVien']; ?>" class="btn btn-danger btn-action" onclick="return confirm('Bạn có chắc chắn muốn xóa thành viên này?');">
                                                <i class="fas fa-trash-alt text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php 
                                        endwhile;
                                    else:
                                    ?>
                                    <tr>
                                        <td colspan="11" class="text-center">Không có sinh viên nào.</td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $page-1; ?>&search=<?php echo $search; ?>&filter=<?php echo $filter; ?>" aria-label="Previous">
                                <span aria-hidden="true">Previous</span>
                            </a>
                        </li>
                        <?php for($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo $search; ?>&filter=<?php echo $filter; ?>">
                                <?php echo $i; ?>
                            </a>
                        </li>
                        <?php endfor; ?>
                        <li class="page-item <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo $page+1; ?>&search=<?php echo $search; ?>&filter=<?php echo $filter; ?>" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jsview.js"></script>
    <!-- Modal Thêm Sinh Viên -->
    <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addMemberModalLabel">Thêm Sinh Viên</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="addMemberForm" action="../controllers/controlthem.php" method="POST">
            <div class="modal-body">
              <div class="mb-3">
                <label for="memberName" class="form-label">Họ Tên:</label>
                <input type="text" class="form-control" id="memberName" name="memberName" placeholder="Nhập tên thành viên" required>
              </div>
              <div class="mb-3">
                <label for="memberCode" class="form-label">Mã Sinh Viên:</label>
                <input type="text" class="form-control" id="memberCode" name="memberCode" placeholder="Nhập mã thành viên" required>
              </div>
              <div class="mb-3">
                <label for="birthDate" class="form-label">Ngày Sinh:</label>
                <input type="date" class="form-control" id="birthDate" name="birthDate" required>
              </div>
              <div class="mb-3">
                <label for="gender" class="form-label">Giới Tính:</label>
                <select class="form-select" id="gender" name="gender" required>
                  <option value="">Chọn giới tính</option>
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                  <option value="Khác">Khác</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="class" class="form-label">Lớp:</label>
                <input type="text" class="form-control" id="class" name="class" placeholder="Nhập lớp thành viên" required>
              </div>
              <div class="mb-3">
                <label for="khoa" class="form-label">Khoa:</label>
                <input type="text" class="form-control" id="khoa" name="khoa" placeholder="Nhập khoa thành viên">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Số Điện Thoại:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại thành viên">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email thành viên">
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Tên Đăng Nhập:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Sửa Thành Viên -->
    <div class="modal fade" id="editMemberModal" tabindex="-1" aria-labelledby="editMemberModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editMemberModalLabel">Sửa Thông Tin Sinh Viên</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="editMemberForm" action="../controllers/suacv.php" method="POST">
            <input type="hidden" id="oldCode" name="oldCode">
            <div class="modal-body">
              <div class="mb-3">
                <label for="editMemberName" class="form-label">Họ Tên:</label>
                <input type="text" class="form-control" id="editMemberName" name="memberName" placeholder="Nhập tên thành viên" required>
              </div>
              <div class="mb-3">
                <label for="editMemberCode" class="form-label">Mã Sinh Viên:</label>
                <input type="text" class="form-control" id="editMemberCode" name="memberCode" placeholder="Nhập mã thành viên" required>
              </div>
              <div class="mb-3">
                <label for="editBirthDate" class="form-label">Ngày Sinh:</label>
                <input type="date" class="form-control" id="editBirthDate" name="birthDate" required>
              </div>
              <div class="mb-3">
                <label for="editGender" class="form-label">Giới Tính:</label>
                <select class="form-select" id="editGender" name="gender" required>
                  <option value="">Chọn giới tính</option>
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                  <option value="Khác">Khác</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="editClass" class="form-label">Lớp:</label>
                <input type="text" class="form-control" id="editClass" name="class" placeholder="Nhập lớp thành viên" required>
              </div>
              <div class="mb-3">
                <label for="editKhoa" class="form-label">Khoa:</label>
                <input type="text" class="form-control" id="editKhoa" name="khoa" placeholder="Nhập khoa thành viên">
              </div>
              <div class="mb-3">
                <label for="editPhone" class="form-label">Số Điện Thoại:</label>
                <input type="tel" class="form-control" id="editPhone" name="phone" placeholder="Nhập số điện thoại thành viên">
              </div>
              <div class="mb-3">
                <label for="editEmail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="editEmail" name="email" placeholder="Nhập email thành viên">
              </div>
              <div class="mb-3">
                <label for="editUsername" class="form-label">Tên Đăng Nhập:</label>
                <input type="text" class="form-control" id="editUsername" name="username" placeholder="Nhập tên đăng nhập" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
              <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Chi Tiết Sinh Viên -->
    <div class="modal fade" id="detailMemberModal" tabindex="-1" aria-labelledby="detailMemberModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="detailMemberModalLabel">Chi Tiết Sinh Viên</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
          </div>
          <div class="modal-body">
            <ul class="list-unstyled mb-0">
              <li><strong>Mã Sinh Viên:</strong> <span id="detailMaSinhVien"></span></li>
              <li><strong>Họ Tên:</strong> <span id="detailHoTen"></span></li>
              <li><strong>Ngày Sinh:</strong> <span id="detailNgaySinh"></span></li>
              <li><strong>Giới Tính:</strong> <span id="detailGioiTinh"></span></li>
              <li><strong>Lớp:</strong> <span id="detailLop"></span></li>
              <li><strong>Khoa:</strong> <span id="detailKhoa"></span></li>
              <li><strong>Số Điện Thoại:</strong> <span id="detailSDT"></span></li>
              <li><strong>Email:</strong> <span id="detailEmail"></span></li>
              <li><strong>Tên Đăng Nhập:</strong> <span id="detailTenDangNhap"></span></li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>
