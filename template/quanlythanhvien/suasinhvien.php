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
                        <label for="editMemberCode" class="form-label">Mã Thành Viên:</label>
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