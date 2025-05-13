-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2025 lúc 06:58 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_su_kien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canboquanly`
--

CREATE TABLE `canboquanly` (
  `MaCBQL` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `GioiTinh` varchar(10) DEFAULT NULL CHECK (`GioiTinh` in ('Nam','Nữ','Khác')),
  `NgaySinh` date DEFAULT NULL,
  `SDT` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `TenDangNhap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canboquanly`
--

INSERT INTO `canboquanly` (`MaCBQL`, `HoTen`, `GioiTinh`, `NgaySinh`, `SDT`, `Email`, `TenDangNhap`) VALUES
(1, 'Nguyễn Văn A', 'Nam', '1980-01-15', '0912345678', 'nguyenvana@qlsk.vn', 'cbql1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `MaChucVu` int(11) NOT NULL,
  `TenChucVu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`MaChucVu`, `TenChucVu`) VALUES
(1, 'Lớp trưởng'),
(2, 'Bí thư Đoàn'),
(3, 'Phó ban tổ chức');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `MaCongViec` int(11) NOT NULL,
  `TenCongViec` varchar(200) DEFAULT NULL,
  `ThoiGianBatDau` datetime DEFAULT NULL,
  `ThoiGianKetThuc` datetime DEFAULT NULL,
  `KhuVucThucHien` varchar(200) DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `MaGoiCV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`MaCongViec`, `TenCongViec`, `ThoiGianBatDau`, `ThoiGianKetThuc`, `KhuVucThucHien`, `GhiChu`, `MaGoiCV`) VALUES
(1, 'Đón khách', '2025-04-15 07:30:00', '2025-04-15 09:00:00', 'Cổng trường', 'Đón và hướng dẫn khách mời', 1),
(2, 'Chuẩn bị nước uống', '2025-04-15 06:30:00', '2025-04-15 08:00:00', 'Khu hậu cần', 'Xếp nước vào bàn, kiểm tra số lượng', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkysukien`
--

CREATE TABLE `dangkysukien` (
  `MaSinhVien` varchar(20) NOT NULL,
  `MaSuKien` int(11) NOT NULL,
  `NgayDangKy` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangkysukien`
--

INSERT INTO `dangkysukien` (`MaSinhVien`, `MaSuKien`, `NgayDangKy`) VALUES
('SV001', 1, '2025-04-01'),
('SV002', 1, '2025-04-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachthamgia`
--

CREATE TABLE `danhsachthamgia` (
  `MaSinhVien` varchar(20) NOT NULL,
  `MaCongViec` int(11) NOT NULL,
  `DiemDanh` tinyint(1) DEFAULT 0,
  `MucDanhGia` varchar(50) DEFAULT NULL,
  `NoiDungPhanHoi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachthamgia`
--

INSERT INTO `danhsachthamgia` (`MaSinhVien`, `MaCongViec`, `DiemDanh`, `MucDanhGia`, `NoiDungPhanHoi`) VALUES
('SV001', 1, 1, 'Tốt', 'Rất vui được tham gia'),
('SV002', 2, 1, 'Khá', 'Cần chuẩn bị kỹ hơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvitochuc`
--

CREATE TABLE `donvitochuc` (
  `MaDonVi` int(11) NOT NULL,
  `TenDonVi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donvitochuc`
--

INSERT INTO `donvitochuc` (`MaDonVi`, `TenDonVi`) VALUES
(1, 'Đoàn Thanh Niên'),
(2, 'Phòng Công tác SV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giuchucvu`
--

CREATE TABLE `giuchucvu` (
  `MaChucVu` int(11) NOT NULL,
  `MaSinhVien` varchar(20) NOT NULL,
  `NgayBoNhiem` date DEFAULT NULL,
  `NgayManNhiem` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giuchucvu`
--

INSERT INTO `giuchucvu` (`MaChucVu`, `MaSinhVien`, `NgayBoNhiem`, `NgayManNhiem`) VALUES
(1, 'SV001', '2023-01-10', '2023-12-31'),
(2, 'SV002', '2023-02-15', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goicongviec`
--

CREATE TABLE `goicongviec` (
  `MaGoiCV` int(11) NOT NULL,
  `TenGoiCV` varchar(200) DEFAULT NULL,
  `GhiChu` text DEFAULT NULL,
  `MaSuKien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `goicongviec`
--

INSERT INTO `goicongviec` (`MaGoiCV`, `TenGoiCV`, `GhiChu`, `MaSuKien`) VALUES
(1, 'Ban Lễ Tân', 'Phụ trách đón khách và hướng dẫn', 1),
(2, 'Ban Hậu Cần', 'Chuẩn bị nước uống và dụng cụ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSinhVien` varchar(20) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` varchar(10) DEFAULT NULL CHECK (`GioiTinh` in ('Nam','Nữ','Khác')),
  `Lop` varchar(20) DEFAULT NULL,
  `Khoa` varchar(100) DEFAULT NULL,
  `SDT` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `TenDangNhap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSinhVien`, `HoTen`, `NgaySinh`, `GioiTinh`, `Lop`, `Khoa`, `SDT`, `Email`, `TenDangNhap`) VALUES
('SV001', 'Trần Thị Hải Yến', '2002-03-20', 'Nữ', 'DTH20A', 'CNTT', '0901122334', 'tranthib@example.com', 'sv001'),
('SV002', 'Cao Lê Minh Châu', '2001-08-05', 'Nam', 'DTH20B', 'CNTT', '0902233445', 'levanc@example.com', 'sv002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `MaSuKien` int(11) NOT NULL,
  `TenSuKien` varchar(200) NOT NULL,
  `HocKy` varchar(10) DEFAULT NULL,
  `NamHoc` varchar(10) DEFAULT NULL,
  `ThoiGianBatDau` datetime DEFAULT NULL,
  `ThoiGianKetThuc` datetime DEFAULT NULL,
  `ThoiDiemToChuc` datetime DEFAULT NULL,
  `DiaDiem` varchar(200) DEFAULT NULL,
  `ThongBao` text DEFAULT NULL,
  `TrangThai` varchar(50) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `MaCBQL` int(11) DEFAULT NULL,
  `MaDonVi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`MaSuKien`, `TenSuKien`, `HocKy`, `NamHoc`, `ThoiGianBatDau`, `ThoiGianKetThuc`, `ThoiDiemToChuc`, `DiaDiem`, `ThongBao`, `TrangThai`, `MoTa`, `MaCBQL`, `MaDonVi`) VALUES
(1, 'Hội trại truyền thống', 'HK2', '2024-2025', '2025-04-15 08:00:00', '2025-04-15 17:00:00', '2025-04-15 08:00:00', 'Sân vận động A', 'Tập trung 7h45 tại cổng trường.', 'Đang diễn ra', 'Sự kiện ngoài trời cho toàn trường.', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TenDangNhap` varchar(50) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `Quyen` varchar(20) NOT NULL CHECK (`Quyen` in ('admin','cbql','sinhvien'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenDangNhap`, `MatKhau`, `Quyen`) VALUES
('cbql1', 'matkhau456', 'cbql'),
('huehuebx', 'huehuebx', 'admin'),
('sv001', 'matkhau789', 'sinhvien'),
('sv002', 'matkhau000', 'sinhvien');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `canboquanly`
--
ALTER TABLE `canboquanly`
  ADD PRIMARY KEY (`MaCBQL`),
  ADD UNIQUE KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MaChucVu`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`MaCongViec`),
  ADD KEY `MaGoiCV` (`MaGoiCV`);

--
-- Chỉ mục cho bảng `dangkysukien`
--
ALTER TABLE `dangkysukien`
  ADD PRIMARY KEY (`MaSinhVien`,`MaSuKien`),
  ADD KEY `MaSuKien` (`MaSuKien`);

--
-- Chỉ mục cho bảng `danhsachthamgia`
--
ALTER TABLE `danhsachthamgia`
  ADD PRIMARY KEY (`MaSinhVien`,`MaCongViec`),
  ADD KEY `MaCongViec` (`MaCongViec`);

--
-- Chỉ mục cho bảng `donvitochuc`
--
ALTER TABLE `donvitochuc`
  ADD PRIMARY KEY (`MaDonVi`);

--
-- Chỉ mục cho bảng `giuchucvu`
--
ALTER TABLE `giuchucvu`
  ADD PRIMARY KEY (`MaChucVu`,`MaSinhVien`),
  ADD KEY `MaSinhVien` (`MaSinhVien`);

--
-- Chỉ mục cho bảng `goicongviec`
--
ALTER TABLE `goicongviec`
  ADD PRIMARY KEY (`MaGoiCV`),
  ADD KEY `MaSuKien` (`MaSuKien`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSinhVien`),
  ADD UNIQUE KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`MaSuKien`),
  ADD KEY `MaCBQL` (`MaCBQL`),
  ADD KEY `MaDonVi` (`MaDonVi`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TenDangNhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `canboquanly`
--
ALTER TABLE `canboquanly`
  MODIFY `MaCBQL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `MaChucVu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `MaCongViec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `donvitochuc`
--
ALTER TABLE `donvitochuc`
  MODIFY `MaDonVi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `goicongviec`
--
ALTER TABLE `goicongviec`
  MODIFY `MaGoiCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `MaSuKien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `canboquanly`
--
ALTER TABLE `canboquanly`
  ADD CONSTRAINT `canboquanly_ibfk_1` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`);

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `congviec_ibfk_1` FOREIGN KEY (`MaGoiCV`) REFERENCES `goicongviec` (`MaGoiCV`);

--
-- Các ràng buộc cho bảng `dangkysukien`
--
ALTER TABLE `dangkysukien`
  ADD CONSTRAINT `dangkysukien_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`),
  ADD CONSTRAINT `dangkysukien_ibfk_2` FOREIGN KEY (`MaSuKien`) REFERENCES `sukien` (`MaSuKien`);

--
-- Các ràng buộc cho bảng `danhsachthamgia`
--
ALTER TABLE `danhsachthamgia`
  ADD CONSTRAINT `danhsachthamgia_ibfk_1` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`),
  ADD CONSTRAINT `danhsachthamgia_ibfk_2` FOREIGN KEY (`MaCongViec`) REFERENCES `congviec` (`MaCongViec`);

--
-- Các ràng buộc cho bảng `giuchucvu`
--
ALTER TABLE `giuchucvu`
  ADD CONSTRAINT `giuchucvu_ibfk_1` FOREIGN KEY (`MaChucVu`) REFERENCES `chucvu` (`MaChucVu`),
  ADD CONSTRAINT `giuchucvu_ibfk_2` FOREIGN KEY (`MaSinhVien`) REFERENCES `sinhvien` (`MaSinhVien`);

--
-- Các ràng buộc cho bảng `goicongviec`
--
ALTER TABLE `goicongviec`
  ADD CONSTRAINT `goicongviec_ibfk_1` FOREIGN KEY (`MaSuKien`) REFERENCES `sukien` (`MaSuKien`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`TenDangNhap`) REFERENCES `taikhoan` (`TenDangNhap`);

--
-- Các ràng buộc cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`MaCBQL`) REFERENCES `canboquanly` (`MaCBQL`),
  ADD CONSTRAINT `sukien_ibfk_2` FOREIGN KEY (`MaDonVi`) REFERENCES `donvitochuc` (`MaDonVi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
