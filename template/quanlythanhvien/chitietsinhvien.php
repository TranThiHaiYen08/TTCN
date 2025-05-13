<!-- Giao diện nút mở popup -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#memberDetailModal">
  Xem Chi Tiết Sinh Viên
</button>

<!-- Modal -->
<div class="modal fade" id="memberDetailModal" tabindex="-1" aria-labelledby="memberDetailLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <?php
        // Giả sử bạn truyền ID hoặc mã thành viên qua GET
        $MaSinhVien = $_GET['MaSinhVien'];
        // Kết nối database
        $query = "SELECT * FROM sinhvien WHERE MaThanhVien = '$MaSinhVien'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
      ?>
      <div class="modal-header">
        <h5 class="modal-title" id="memberDetailLabel">Chi Tiết Sinh Viên</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-3">
          <img src="img/anhdaidien.jpg" class="rounded-circle" width="120" height="120" alt="Ảnh đại diện">
        </div>
        <p><strong>Mã Sinh Viên:</strong> <?= $row['MaSinhVien'] ?></p>
        <p><strong>Họ Tên:</strong> <?= $row['HoTen'] ?></p>
        <p><strong>Email:</strong> <?= $row['Email'] ?></p>
        <p><strong>Ngày Sinh:</strong> <?= $row['NgaySinh'] ?></p>
        <p><strong>Giới Tính:</strong> <?= $row['GioiTinh'] ?></p>
        <p><strong>Địa Chỉ:</strong> <?= $row['Khoa'] ?></p>
        <p><strong>Số Điện Thoại:</strong> <?= $row['SDT'] ?></p>
        <p><strong>Lớp:</strong> <?= $row['Lop'] ?></p>
        <p><strong>Khoa:</strong> <?= $row['Khoa'] ?></p>
        <!-- <p><strong>Ngày Gia Nhập CLB:</strong> <?= $row['NgayGiaNhap'] ?></p>
        <p><strong>Chức Vụ:</strong> <?= $row['ChucVu'] ?></p> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>

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