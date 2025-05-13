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