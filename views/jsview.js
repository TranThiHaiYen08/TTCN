document.addEventListener('DOMContentLoaded', function() {
    // Form validation cho thêm thành viên
    const addForm = document.getElementById('addMemberForm');
    if (addForm) {
        addForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get form data
            const formData = new FormData(addForm);
            
            // AJAX request to submit form data
            fetch('../controllers/controlthem.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    alert('Thành viên đã được thêm thành công!');
                    // Close modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('addMemberModal'));
                    modal.hide();
                    // Reload the page to show new member
                    window.location.reload();
                } else {
                    alert('Có lỗi xảy ra: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Đã xảy ra lỗi khi gửi biểu mẫu. Vui lòng thử lại sau.');
            });
        });
    }

    // Form validation cho sửa thành viên
    const editForm = document.getElementById('editMemberForm');
    if (editForm) {
        editForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get form data
            const formData = new FormData(editForm);
            
            // AJAX request to submit form data
            fetch('../controllers/suacv.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    alert('Thông tin đã được cập nhật thành công!');
                    // Close modal
                    const modal = bootstrap.Modal.getInstance(document.getElementById('editMemberModal'));
                    modal.hide();
                    // Reload the page to show updated member
                    window.location.reload();
                } else {
                    alert('Có lỗi xảy ra: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Đã xảy ra lỗi khi cập nhật thông tin. Vui lòng thử lại sau.');
            });
        });
    }
});

// Hàm mở modal sửa thông tin thành viên
function editMember(memberCode, memberName, birthDate, gender, class_, khoa, phone, email, username) {
    // Điền thông tin vào form
    document.getElementById('oldCode').value = memberCode;
    document.getElementById('editMemberCode').value = memberCode;
    document.getElementById('editMemberName').value = memberName;
    document.getElementById('editBirthDate').value = birthDate;
    document.getElementById('editGender').value = gender;
    document.getElementById('editClass').value = class_;
    document.getElementById('editKhoa').value = khoa;
    document.getElementById('editPhone').value = phone;
    document.getElementById('editEmail').value = email;
    document.getElementById('editUsername').value = username;

    // Mở modal
    const editModal = new bootstrap.Modal(document.getElementById('editMemberModal'));
    editModal.show();
}

function showDetailMember(ma, ten, ngaysinh, gioitinh, lop, khoa, sdt, email, tendangnhap) {
    document.getElementById('detailMaSinhVien').innerText = ma;
    document.getElementById('detailHoTen').innerText = ten;
    document.getElementById('detailNgaySinh').innerText = ngaysinh;
    document.getElementById('detailGioiTinh').innerText = gioitinh;
    document.getElementById('detailLop').innerText = lop;
    document.getElementById('detailKhoa').innerText = khoa;
    document.getElementById('detailSDT').innerText = sdt;
    document.getElementById('detailEmail').innerText = email;
    document.getElementById('detailTenDangNhap').innerText = tendangnhap;
    const modal = new bootstrap.Modal(document.getElementById('detailMemberModal'));
    modal.show();
}
