-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 10:51 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

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
-- Cấu trúc bảng cho bảng `binhluan`
--

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
  `hang` int(11) NOT NULL,
  `an_hien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ma_sp` int(225) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `ma_donhang` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `gia` decimal(15,0) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` decimal(11,0) NOT NULL,
  `ngay_dat` date NOT NULL,
  `gio_dat` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ma_kh` int(11) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `anh_daidien` varchar(100) NOT NULL,
  `so_dt` int(11) NOT NULL,
  `phan_quyen` tinyint(1) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sp` int(225) NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ten_sp` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `gia_goc` decimal(20,0) NOT NULL,
  `gia_giam` decimal(20,0) NOT NULL,
  `hang` int(20) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `mo_ta` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `danh_gia` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `truy_cap` int(11) DEFAULT NULL,
  `thu_tu` int(225) NOT NULL,
  `an_hien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
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
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `fk2_ma_donhang` (`ma_donhang`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ma_donhang`),
  ADD KEY `fk1_ma_sp` (`ma_sp`),
  ADD KEY `fk2_ma_kh` (`ma_kh`);

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

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ma_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sp` int(225) NOT NULL AUTO_INCREMENT;

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
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk1_masp_chitiet` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_ma_donhang` FOREIGN KEY (`ma_donhang`) REFERENCES `donhang` (`ma_donhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk1_ma_sp` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk2_ma_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk1_ma_loai` FOREIGN KEY (`ma_loai`) REFERENCES `catalogs` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
