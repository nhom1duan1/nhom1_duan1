-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
<<<<<<< HEAD
-- Thời gian đã tạo: Th10 25, 2020 lúc 10:21 AM
=======
-- Thời gian đã tạo: Th10 24, 2020 lúc 03:18 PM
>>>>>>> cf6fed07e55be81e294660a9b7530bd7de7e7c40
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

<<<<<<< HEAD
CREATE TABLE `binhluan` (
  `ma_binhluan` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `thoigian` datetime(6) NOT NULL,
  `ngay` date NOT NULL,
  `noi_dung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalogs`
--

CREATE TABLE `catalogs` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `thu_tu` int(10) NOT NULL,
  `an_hien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catalogs`
--

INSERT INTO `catalogs` (`ma_loai`, `ten_loai`, `thu_tu`, `an_hien`) VALUES
(1, 'Điện thoại', 0, 1),
(2, 'Laptop', 2, 1),
(3, 'Máy chơi game', 2, 1),
(4, 'Máy tính để bàn', 2, 1),
(5, 'Đồng hồ thông minh', 2, 1),
(7, 'Phụ kiện máy tính & laptop', 2, 1),
(8, 'Phụ kiện điện thoại', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_sp` int(11) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ma_donhang` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `thanh_tien` decimal(11,0) NOT NULL,
  `ngay_dat` date NOT NULL,
  `gio_dat` datetime(6) NOT NULL,
  `ten_nguoinhan` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ghi_chu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

=======
>>>>>>> cf6fed07e55be81e294660a9b7530bd7de7e7c40
CREATE TABLE `hang` (
  `ma_hang` int(11) NOT NULL,
  `hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
<<<<<<< HEAD

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int(11) NOT NULL,
  `mat_khau` varchar(60) NOT NULL,
  `ho_ten` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `anh_daidien` varchar(100) NOT NULL,
  `so_dt` int(11) NOT NULL,
  `phan_quyen` tinyint(1) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `dia_chi`, `anh_daidien`, `so_dt`, `phan_quyen`, `trang_thai`) VALUES
(2, '$2y$12$4v4Cawqfp75mwYu.Zmn4..eCSbwg/veT3iQynpskDU95mIpstZqk.', 'Khải Nguyễn', 'khai@gmail.com', '', '', 0, 1, 1),
(3, '$2y$12$.DP3vF4at1vYqmqbxF1GLudsZ236LgcL/RizNjI9Tb.R0y.3oMq8.', 'Tuấn Anh', 'tuananh@gmail.com', '', '../site/images/iphone-xs-max-64gb-like-new_2.jpg', 0, 1, 1),
(4, '$2y$12$ryPHBwd9Vy5N4AxDpMzWoe.g06ILANkMT6FqissTga3lMkL8ddnB.', 'Nhựt Tiến', 'nhuttien@gmail.com', '', '', 0, 1, 1),
(5, '$2y$12$PbxpG4sXnwD0IgKAkhneSuvMskCN4yrBSMH1rK4V3ScW7y7Dpvlai', 'Thanh Thoảng', 'thanhthoang@gmail.com', '', '', 0, 1, 1),
(6, '$2y$12$CoH1t8yY50AkWG9CcoUUseRy0lp5AzmrjKc6Uxxxl9o1mJp/KLr06', 'Thiệu Tuấn', 'tuan@gmail.com', '', '', 0, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sp` int(225) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `ten_sp` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `gia_goc` decimal(20,0) NOT NULL,
  `gia_giam` decimal(20,0) NOT NULL,
  `hang` int(20) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `mo_ta` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `truy_cap` int(11) DEFAULT NULL,
  `thu_tu` int(225) NOT NULL,
  `an_hien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ma_loai`, `ten_sp`, `gia_goc`, `gia_giam`, `hang`, `hinh_anh`, `mo_ta`, `truy_cap`, `thu_tu`, `an_hien`) VALUES
(4, 4, 'IMAC 100', '3000', '1000', 0, '../images/c5.jpg', '', 200, 0, 0),
(5, 1, 'Samsung 20', '3000', '2500', 0, '../images/r3.jpg', '', 68, 0, 0),
(7, 4, 'Máy tính 450', '4999', '2999', 0, '../images/f5.jpg', '', 400, 0, 0),
(8, 7, 'Chuột chơi game X11', '200', '100', 0, '../images/c3.jpg', '', 13, 0, 0),
(9, 5, 'Đồng hồ thông minh X', '599', '499', 0, '../images/c1.jpg', '', 234, 1, 0),
(10, 1, 'Samsung galaxy S20', '5990', '4990', 0, '../images/s1.jpg', '', 654, 1, 0);
=======
>>>>>>> cf6fed07e55be81e294660a9b7530bd7de7e7c40

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hang`
--
<<<<<<< HEAD
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_binhluan`),
  ADD KEY `fk1_ma_kh` (`ma_kh`),
  ADD KEY `fk2_ma_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_donhang`),
  ADD KEY `fk2_ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`ma_hang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `fk1_ma_loai` (`ma_loai`);
=======
ALTER TABLE `hang`
  ADD PRIMARY KEY (`ma_hang`);
>>>>>>> cf6fed07e55be81e294660a9b7530bd7de7e7c40

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `ma_hang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sp` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk1_ma_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_ma_sp` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk2_ma_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
=======
-- AUTO_INCREMENT cho bảng `hang`
>>>>>>> cf6fed07e55be81e294660a9b7530bd7de7e7c40
--
ALTER TABLE `hang`
  MODIFY `ma_hang` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
