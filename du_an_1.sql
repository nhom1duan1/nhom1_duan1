-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2020 lúc 09:20 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `thoigian` datetime NOT NULL,
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
  `thoigian` datetime(6) NOT NULL,
  `ten_nguoinhan` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ghi_chu` varchar(255) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `ma_hang` int(11) NOT NULL,
  `hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`ma_hang`, `hang`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'OPPO'),
(4, 'Asus'),
(5, 'MSI'),
(6, 'Logitech'),
(7, 'Corsair'),
(8, 'Razer'),
(9, 'Sony'),
(10, 'Huawei'),
(11, 'Anker '),
(12, 'AUKEY ');

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
  `so_dt` varchar(10) NOT NULL,
  `phan_quyen` tinyint(1) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `dia_chi`, `anh_daidien`, `so_dt`, `phan_quyen`, `trang_thai`) VALUES
(2, '12345', 'Khải Nguyễn', 'khai@gmail.com', '', '', '0', 0, 1),
(3, '$2y$12$.DP3vF4at1vYqmqbxF1GLudsZ236LgcL/RizNjI9Tb.R0y.3oMq8.', 'Tuấn Anh', 'tuananh@gmail.com', '', '../site/images/iphone-xs-max-64gb-like-new_2.jpg', '0', 0, 1),
(4, '$2y$12$ryPHBwd9Vy5N4AxDpMzWoe.g06ILANkMT6FqissTga3lMkL8ddnB.', 'Nhựt Tiến', 'nhuttien@gmail.com', '', '', '0', 0, 1),
(5, '$2y$12$PbxpG4sXnwD0IgKAkhneSuvMskCN4yrBSMH1rK4V3ScW7y7Dpvlai', 'Thanh Thoảng', 'thanhthoang@gmail.com', '', '', '0', 1, 1),
(6, '$2y$12$CoH1t8yY50AkWG9CcoUUseRy0lp5AzmrjKc6Uxxxl9o1mJp/KLr06', 'Thiệu Tuấn', 'tuan@gmail.com', '', '', '0', 1, 1),
(7, '$2y$12$s1.KpXOK6DoH4iDLI2t.Hu4a20O9IxxwTJiBzqdOOE1T5Gt3GHyz2', 'ad', 'ad@gmail.com', '', '../images/c5.jpg', '123', 0, 1),
(8, '$2y$12$pko02k.EDb9EAwwdMJBcNOcv9x/jKb5i1tmg6b09QoXUU.4eCO.qq', 'thieutuan', 'thieutuan@gmail.com', 'tan chanh hiep ', '../images/laptop-msi-prestige-15-a10sc-222vn_1_.jpg', '338927972', 1, 1);

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
  `ma_hang` int(11) NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `mo_ta` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `truy_cap` int(11) DEFAULT NULL,
  `thu_tu` int(225) NOT NULL,
  `an_hien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ma_loai`, `ten_sp`, `gia_goc`, `gia_giam`, `ma_hang`, `hinh_anh`, `mo_ta`, `truy_cap`, `thu_tu`, `an_hien`) VALUES
(4, 4, 'IMAC 100', '3000', '1000', 1, '../images/c5.jpg', '', 200, 0, 0),
(5, 1, 'Samsung 20', '3000', '2500', 1, '../images/r3.jpg', '', 68, 0, 0),
(7, 4, 'Máy tính 450', '4999', '2999', 1, '../images/f5.jpg', '', 400, 0, 0),
(8, 7, 'Chuột chơi game X11', '200', '100', 1, '../images/c3.jpg', '', 13, 0, 0),
(9, 5, 'Đồng hồ thông minh X', '599', '499', 1, '../images/c1.jpg', '', 234, 1, 0),
(10, 1, 'Samsung galaxy S20', '5990', '4990', 1, '../images/s1.jpg', '', 654, 1, 0),
(13, 1, 'Iphone 12 Pro Max', '6500', '6300', 1, '../images/photo_2020-10-13_22-12-24.jpg_1_2.png', 'Điện thoại iPhone 12 Pro Max - Đột phá về thiết kế, hiệu năng nâng cấp Ra mắt vào cuối năm 2020, iPh', 852, 2, 1),
(14, 1, 'Iphone 12 mini', '4999', '4500', 1, '../images/iphone-12-mini-blue-select-2020_2.png', 'Điện thoại iPhone 12 Mini - Kích thước nhỏ gọn, hiệu năng đỉnh cao iPhone 12 series hiện nay đang là', 666, 2, 1),
(16, 1, 'Iphone 12 Pro', '5000', '4666', 1, '../images/photo_2020-10-13_22-12-24.jpg_1.png', 'Điện thoại iPhone 12 Pro - Đột phá về thiết kế, hiệu năng nâng cấp Ra mắt vào cuối năm 2020, iPhone ', 666, 2, 0),
(17, 1, 'Samsung Galaxy Note ', '6600', '6450', 2, '../images/black_final.jpg', 'Samsung Note 20 Ultra: Thiết kế sang trọng và nhiều công nghệ cực tốt Samsung là gã khổng lồ công ng', 666, 2, 1),
(18, 1, 'Samsung Galaxy Z Fli', '7800', '7600', 2, '../images/z-flip-1_1.jpg', 'Điện thoại Samsung Galaxy Z Flip - Màn hình gập hiện đại, hiệu năng mạnh mẽ Trong thời đại mà công n', 988, 2, 1),
(19, 1, 'Samsung Galaxy Note ', '6500', '6000', 2, '../images/yellow_final_2 (1).jpg', 'Samsung Note 20 Ultra 5G : Thiết kế sang trọng và nhiều công nghệ cực tốt Samsung là gã khổng lồ côn', 852, 2, 1),
(20, 1, 'Oppo Find X2 Pro', '5999', '5600', 3, '../images/oppo-x2-xam_2.jpg', 'Oppo Find X2 Pro – Mẫu điện thoại mang đến xu hướng mới trong tương lai Oppo Find X2 Pro cùng Oppo F', 666, 2, 0),
(21, 1, 'Oppo Find X2', '5999', '5000', 3, '../images/637191049692122812_oppo-find-x2-xanh-1.png', 'Oppo Find X2 – Hiệu năng đỉnh cao, màn hình chiếm trọn mặt trước Oppo Find X2  và Oppo Find X2 Pro l', 258, 2, 1),
(22, 1, 'Oppo A15', '5000', '4666', 3, '../images/oppo-a15.jpg', 'Oppo A15 - Sự đột phá trong thiết kế lẫn hiệu năng Oppo là một trong những hãng sản xuất điện thoại ', 258, 2, 1),
(25, 2, 'Apple MacBook Pro 13', '17000', '16450', 1, '../images/mbp-silver-select-202011.jpg', 'MacBook Pro 13 Touch Bar M1 512GB 2020 mạnh mẽ, ấn tượng MacBook Pro 13 Touch Bar M1 512GB 2020 chiế', 1256, 2, 1),
(26, 2, 'Apple Macbook Pro 13', '16000', '15000', 1, '../images/mbp13touch-space-select-202005.jpg', 'Macbook Pro 13 Touch Bar 2020 chính hãng – Siêu phẩm tiếp theo sở hữu nhiều nâng cấp thú vị Thế hệ M', 1222, 2, 1),
(27, 2, 'Apple MacBook Air 13', '14000', '13210', 1, '../images/macbook-air-gold-select-201810_2.jpg', 'MacBook Air 13 2020 – Thiết kế nhỏ gọn, cấu hình mạnh mẽ Macbook của Apple với cấu hình mạnh luôn đư', 1289, 2, 1),
(28, 2, 'Laptop ASUS Gaming R', '12333', '11333', 1, '../images/laptop-asus-gaming-rog-strix-g531gt_2_.jpg', 'Laptop ASUS ROG Strix G G531GT - Trải nghiệm gaming đẳng cấp đến từ thương hiệu ROG Hẳn các', 1256, 2, 0),
(29, 2, 'Laptop ASUS TUF Gami', '14200', '13800', 4, '../images/fa506ii-al016t_0002_3.jpg', 'Laptop Asus FA506II-AL016T – Laptop gaming hiệu năng cao, cân xuất sắc mọi tựa game nặng Nếu bạn đan', 988, 2, 1),
(30, 2, 'Laptop ASUS Gaming R', '14000', '13800', 1, '../images/laptop-asus-gaming-rog-zephyrus-g14-ga401ii_1_.jpg', 'Laptop ASUS Gaming ROG Zephyrus GA401II - Cấu hình mạnh mẽ trong thiết kế gọn gàng Không chỉ dừng lạ', 988, 2, 0),
(31, 2, 'Laptop MSI Gaming GF', '15000', '14220', 5, '../images/laptop-msi-gaming-gf65-thin-10ser-622vn_2_.jpg', 'Laptop MSI Gaming GF65 THIN 10SER-622VN – Kiểu dáng mỏng, gọn, cấu hình vượt trội Ngày nay những chi', 852, 2, 1),
(32, 2, 'Laptop MSI Prestige ', '16666', '15000', 5, '../images/laptop-msi-prestige-15-a10sc-222vn_1_.jpg', 'Laptop MSI Prestige 15 A10SC-222VN – Laptop gọn nhẹ, hiệu năng cao Tiêu chí chọn mua laptop hiện nay', 1256, 2, 1),
(33, 2, 'Laptop MSI Gaming GF', '14500', '13800', 5, '../images/laptop-msi-prestige-15-a10sc-222vn_1_.jpg', 'Laptop MSI Gaming GF65 THIN 10SDR-623VN - Mạnh mẽ không chỉ vẻ ngoài Bạn là một người năng động và m', 988, 2, 0),
(34, 4, 'Máy tính AIO ASUS V2', '14000', '13000', 4, '../images/may-tinh-all-in-one-asus-v222fak_2_.jpg', 'Core i3-10110U/4GB/512GB PCIE/21.5 FHD/WIN 10/ĐEN', 258, 2, 1),
(35, 4, 'PC ASUS ExpertCenter', '14000', '13000', 4, '../images/may-tinh-dong-bo-asus-d500ma_2__2_1.jpg', 'Core i7-10700/8GB/256GB PCIE/BÀN PHÍM/FREE OS', 333, 2, 1),
(36, 7, 'Chuột máy tính gamin', '1300', '1000', 6, '../images/unnamed (2).jpg', '- Chuột chơi game không dây LightSpeed G604  - 15 nút điều khiẻn có thể lập trình  - Cảm biến HERO 1', 258, 2, 1),
(37, 7, 'Chuột gaming không d', '1200', '900', 6, '../images/unnamed (3).jpg', 'Giới thiệu sản phẩm chuột chơi game Logitech G703 LIGHTSPEED Wireless    Đâu là cái tên đi đầu tr', 666, 2, 1),
(38, 7, 'Chuột gaming Logitec', '1400', '1200', 6, '../images/unnamed (4).jpg', 'Giới thiệu sản phẩm chuột chơi game Logitech G502 HERO                                              ', 852, 2, 1),
(39, 7, 'Chuột gaming không d', '1100', '999', 6, '../images/unnamed (5).jpg', 'CẢM BIẾN HERO THẾ HỆ MỚI - Hiệu suất và Tiết kiệm năng lượng tuyệt vời HERO là cảm biến quang học đổ', 852, 2, 1),
(40, 7, 'Chuột gaming không d', '1500', '1400', 7, '../images/unnamed (6).jpg', 'Thông tin cơ bản về sản phẩm Chuột Corsair Dark Core RGB:  Nhà sản xuất: Corsair ( là một công ty ph', 666, 2, 0),
(41, 7, 'Chuột gaming CorSAIR', '1450', '1530', 7, '../images/unnamed (7).jpg', 'Tổng quan Chuột gaming Corsair Ironclaw Corsair là một thương hiệu không còn xa lạ gì với những game', 562, 2, 1),
(42, 7, 'Chuột gaming CORSAIR', '1350', '1250', 7, '../images/unnamed (8).jpg', 'Khám phá một đẳng cấp mới của sự thoải mái và chính xác  Corsair Glaive RGB được thiết kế để đem đến', 658, 2, 1),
(43, 7, 'Chuột máy tính có dâ', '1680', '1500', 8, '../images/unnamed (9).jpg', 'Giới thiệu Chuột có dây Razer Viper (RZ01-02550100-R3M1) Kiểm soát kết quả của bất kỳ trận chiến nào', 365, 2, 1),
(44, 7, 'Chuột máy tính không', '1800', '1650', 8, '../images/unnamed (10).jpg', 'Giới thiệu Chuột không dây Razer Viper Ultimate (RZ01-03050100-R3A1) Nhanh hơn 25% so với bất kỳ côn', 658, 2, 1),
(45, 7, 'Chuột gaming Razer M', '1660', '1430', 8, '../images/unnamed (11).jpg', 'Chuột máy tính Razer Mamba Elite (RZ01-02560100-R3M1) Là một phiên bản nâng cấp đặc biệt cho thế hệ ', 658, 2, 1),
(46, 7, 'Bàn phím cơ Gaming L', '1850', '1650', 6, '../images/unnamed (12).jpg', 'Chất liệu tốt, hiện đại Bàn phím Logitech G Pro X được thiết kế với khung được làm từ chất liệu chắc', 666, 2, 1),
(47, 7, 'Bàn phím cơ Logite', '1760', '1670', 6, '../images/unnamed (13).jpg', 'Đánh giá Bàn phím Logitech Gaming G512  VẬT LIỆU CAO CẤP Hiệu suất cao. Thiết kế tiên tiến G512 là b', 458, 2, 1),
(48, 7, 'Bàn phím + Chuột Log', '1111', '999', 6, '../images/unnamed (14).jpg', 'Đánh giá Bàn phím+Chuột máy tính Logitech MK120 Sơ lược sản phẩm Trong khoảng thời gian gần đây, cùn', 258, 2, 1),
(49, 7, 'Bàn phím cơ CORSAI', '1900', '1777', 7, '../images/unnamed (15).jpg', 'Xuất hiện ở năm 2018 này, Corsair K70 RGB MK.2 SE là dòng K70 phiên bản đặc biệt cực kỳ đáng tiền ch', 988, 2, 1),
(50, 7, 'Bàn phím cơ CORSAI', '1780', '1680', 7, '../images/unnamed (16).jpg', 'Corsair K68 - bàn phím cơ CherryMX chống nước đầu tiên trên thế giới. Tiếp nối thành công của K63, t', 258, 2, 1),
(51, 7, 'Bàn phím cơ Corsair ', '1860', '1680', 7, '../images/unnamed (17).jpg', 'Bàn phím cơ Corsair K63 Wireless Blue MX Red Là loại bàn phím cơ không dây với layout tenkeless (lượ', 985, 2, 1),
(52, 7, 'Bàn phím cơ Razer ', '1760', '1670', 8, '../images/unnamed (18).jpg', 'Giới thiệu bàn phím cơ Razer BlackWidow Elite – Góa phụ đen toàn mỹ Sơ lược sản phẩm Có thể nói hi', 658, 2, 1),
(53, 7, 'Bàn phím cơ Razer ', '199', '1888', 8, '../images/unnamed (19).jpg', 'Đánh giá chi tiết về Bàn phím cơ Razer Huntsman Elite (RZ03-01870100-R3M1) – Mang đến cho các game', 666, 2, 1),
(54, 7, 'Bàn phím cơ gaming R', '1888', '1780', 8, '../images/unnamed (20).jpg', 'Giới thiệu Bàn phím cơ Gaming Razer Huntsman - Quartz Edition- RZ03-02521800-R3M1 (Hồng) Bàn phím cơ', 988, 2, 1),
(55, 7, 'Tai nghe Over-ear Lo', '1789', '1456', 6, '../images/unnamed (21).jpg', 'Tai Nghe Logitech G633S Lightsync 7.1 Gaming - Thưởng thức âm thanh đỉnh cao Tai nghe Logitech G633S', 666, 2, 1),
(56, 7, 'Tai nghe Over-ear Lo', '1478', '1258', 6, '../images/unnamed (22).jpg', 'Tai Nghe Logitech G331 Wired Gaming là một người em nối tiếp của các dòng tai nghe dành riêng cho ga', 666, 2, 1),
(57, 7, 'Tai nghe Over-ear Lo', '1598', '1269', 6, '../images/unnamed (23).jpg', 'Tai nghe Logitech G433 7.1 Wired Surround Gaming Các game thủ đều mong muốn đắm chìm vào âm thanh tr', 666, 2, 1),
(58, 7, 'Tai nghe chơi game C', '1478', '1589', 7, '../images/unnamed (24).jpg', 'Tai nghe chơi game không dây Corsair VOID RGB ELITE USB 7.1 White (CA-9011204-AP) là dòng tai nghe c', 1256, 2, 1),
(59, 7, 'Tai nghe không dây C', '1789', '1425', 7, '../images/unnamed (25).jpg', 'Tai nghe không dây Corsair Virtuoso RGB White 7.1 Surround (CA-9011186-AP) là dòng tai nghe không dâ', 258, 2, 1),
(60, 7, 'Tai nghe Over-ear Co', '1753', '1658', 7, '../images/unnamed (26).jpg', 'Tai nghe Corsair HS35 Stereo Green - CA-9011197-AP (Xanh lá) là dòng tai nghe over-ear chuyên dùng c', 852, 2, 1),
(61, 7, 'Tai nghe Razer Hamme', '1456', '1234', 8, '../images/unnamed (27).jpg', 'Tai nghe Razer Hammerhead Duo - RZ12-02790200-R3M1 thuộc dòng tai nghe in-ear của hãng Razer. Kiểu d', 568, 2, 1),
(62, 7, 'Tai nghe Razer Krake', '1999', '1777', 8, '../images/unnamed (28).jpg', 'ai nghe Razer Kraken Ultimate (Black) (RZ04-03180100-R3M1) được Razer xếp vào loại tai nghe chuyên d', 658, 2, 1),
(63, 3, 'Máy chơi game Playst', '4999', '4600', 9, '../images/unnamed (29).jpg', 'Đánh giá chi tiết về Máy chơi game Playstation PS4 Pro 1TB (CUH-7218B B01) – Mang đến cho các game t', 852, 2, 1),
(64, 3, 'Máy chơi game Playst', '5000', '4666', 9, '../images/unnamed (30).jpg', 'Mô tả sản phẩm Đang cập nhật', 1256, 2, 1),
(65, 7, 'Máy chơi game Playst', '5500', '5000', 9, '../images/unnamed (31).jpg', 'Bộ sản phẩm bao gồm:  + Máy chơi game PlayStation 4 Pro bộ nhớ 1TB + 2 tay cầm DS4 + 1 đĩa game Fifa', 658, 2, 1),
(66, 3, 'Máy chơi game Playst', '6500', '5800', 9, '../images/unnamed (32).jpg', 'Đánh giá chi tiết về Máy chơi game Playstation PS4 Slim 1TB Mega Pack CUH-2218B Máy chơi game Playst', 658, 2, 1),
(67, 1, 'Apple Watch Series 6', '2000', '1700', 1, '../images/dodo4g.jpg', 'Apple Watch series 6 44 mm - tinh tế, sang trọng và đẳng cấp Apple Watch series 6 44mm là dòng đồng ', 666, 2, 0),
(68, 1, 'Apple Watch Series 6', '2900', '2200', 1, '../images/apple-watch-series-6-44mm.jpg', 'Apple Watch series 6 44 mm - tinh tế, sang trọng và đẳng cấp Apple Watch series 6 44mm là dòng đồng ', 1458, 2, 0),
(69, 1, 'Apple Watch Series 6', '2999', '2800', 1, '../images/apple-watch-series-6-44mm-4g-vien-thep-vang-day-thep_2__2_1.jpg', 'Apple Watch Series 6 44mm 4G viền thép dây thép - Smartwatch cao cấp phiên bản dây thép cứng ', 988, 2, 0),
(70, 5, 'Apple Watch Series 6', '2555', '2333', 1, '../images/apple-watch-series-6-44mm-4g-vien-thep-day-cao-su.jpg', 'Apple Watch Series 6 44mm (4G) viền thép, dây cao su chính hãng nhiều màu sắc Bạn đang sử dụng chiếc', 988, 2, 1),
(71, 5, 'Samsung Galaxy Watch', '2666', '2222', 2, '../images/galaxy-watch_front_silver-3119_1.jpg', 'Đánh giá đồng hồ thông minh Samsung Galaxy Watch 46mm Samsung vừa cho ra mắt mẫu đồng hồ thông minh ', 852, 2, 1),
(72, 5, 'Samsung Galaxy Watch', '2111', '1999', 2, '../images/1565204800_1491588_2.jpg', 'GALAXY WATCH 2 - Đồng hồ thông minh chống nước tiện lợi Bạn có bao giờ nghĩ rằng, trong cuộc sống bạ', 852, 2, 1),
(73, 5, 'Samsung Galaxy Watch', '2233', '2000', 2, '../images/1565203894_1491579.jpg', '', 1256, 2, 1),
(74, 5, 'Đồng hồ thông minh H', '2300', '2100', 10, '../images/black_9_6.jpg', 'Đồng hồ Huawei Watch Fit - Thiết kế phá cách với kiểu dáng mới Huawei Watch Fit được ra mắt vào nửa ', 1256, 2, 1),
(75, 5, 'Đồng hồ thông minh H', '2800', '2600', 10, '../images/dong-ho-thong-minh-huawei-watch-gt-2-pro-main.jpg', 'Huawei Watch GT 2 Pro - đồng hồ thông minh với nhiều tính năng ấn tượng Là một sản phẩm mới được ra ', 852, 2, 1),
(76, 5, 'Đồng Hồ Thông Minh H', '2100', '1800', 10, '../images/jido-dong-ho-thong-minh-huawei-watch-gt-ftnb1_1.jpg', 'Huawei Watch GT – Theo dõi sức khỏe mọi lúc mọi nơi Đồng hồ thông minh đang là một trong những phụ k', 658, 2, 1),
(77, 8, 'Pin dự phòng Anker P', '1000', '960', 11, '../images/upload_36885868cf694fa797fb323b0ff26e73_grande.jpg', 'Pin dự phòng chính hãng Anker Powercore+ 26800 Power Delivery A1375 - bền bỉ, hiện đại, dung lượng k', 658, 2, 1),
(78, 8, 'Pin sạc dự phòng Ank', '1100', '980', 11, '../images/12312313124_1.jpg', 'Pin sạc dự phòng Anker PowerCore PD A1275: Pin dự phòng nhỏ gọn, dung lượng lớn Ngày nay, công nghệ ', 852, 2, 1),
(79, 8, 'Pin dự phòng Anker P', '600', '500', 11, '../images/1_8_132_5.jpg', 'Phụ kiện pin dự phòng Anker Powercore 10400 mAh A1214 chính hãng Anker là thương hiệu nổi tiếng toàn', 1256, 2, 1),
(80, 8, 'Pin sạc dự phòng Sam', '1000', '888', 2, '../images/samsung-eb-p3300x-stribrna_ien340633.jpg', 'Pin dự phòng SamSung EB-P3300X – Dung lượng lớn, hỗ trợ sạc nhanh 25W Nhằm mang lại một độ bền bỉ cù', 988, 2, 1),
(81, 8, 'Pin dự phòng Samsung', '650', '550', 2, '../images/untitled-1_2_4_2.jpg', 'Pin sạc dự phòng Samsung EB-P1100 – Thiết kế vỏ kim loại cùng công nghệ sạc nhanh Quick Charge 2.0 T', 852, 2, 1),
(82, 8, 'Pin dự phòng AUKEY P', '890', '790', 12, '../images/upload_36885868cf694fa797fb323b0ff26e73_grande.jpg', 'Sạc dự phòng Aukey PB-XD26 26800mAh – Nạp đầy năng lượng nhanh chóng cho điện thoại Dù bạn đang sử d', 852, 2, 1),
(83, 8, 'Pin Sạc dự phòng Auk', '750', '630', 12, '../images/16c8d3675bf642aece64aa8bd2b3442d.jpg', 'Pin sạc dự phòng Aukey PB-XD12 - Tiếp sức dài lâu cho điện thoại của bạn Là một trong nh', 658, 2, 1),
(84, 8, 'Pin dự phòng AUKEY P', '590', '245', 12, '../images/8cceb367e8ed6608cc957f94f6353d29_1.jpg', 'Pin sạc dự phòng AUKEY PB-XN10 10000 mAh USB-C – Phụ kiện sạc pin chất lượng cao Với việc nhu cầu sử', 1256, 2, 1),
(85, 8, 'Sạc Nhanh Samsung 45', '950', '650', 2, '../images/vn-travel-adapter-45w-ep-ta845xbegww-lperspectiveblack-175808099-baseformat-450x.png', 'Sạc nhanh Samsung 45W TA845 kèm cáp C to C nhỏ gọn, sạc nhanh với công suất lên đến 45W Bạn đang sở ', 988, 2, 1),
(86, 8, 'Sạc nhanh Samsung TA', '500', '250', 2, '../images/_nh_ch_p_m_n_h_nh_2018-12-19_l_c_11.08.06.png', 'Sạc nhanh Samsung TA20HW kèm cáp Micro chính hãng Đối với nhưng người dùng điện thoại smartphone thì', 258, 2, 1),
(87, 8, 'Sạc Anker PowerPort ', '888', '666', 11, '../images/sac-anker-poweport-speed-2-39w-qc-30-a2025.jpg', 'Sạc Anker 2 cổng A2025 cho khả năng sạc cực nhanh cùng thiết kế nhỏ gọn Đã bao giờ bạn khó chịu khi ', 658, 2, 1),
(88, 8, 'Sạc Anker 1 Cổng 18W', '700', '499', 11, '../images/1_29a3743e8fd04722a8248351be41403c_master.png', 'Củ sạc Anker 1 cổng 18W PD A2019 – sạc nhanh 18W cùng Power Delivery tương thích cao Củ sạc là phụ k', 1256, 2, 1),
(89, 8, 'Sạc nhanh Anker Powe', '666', '500', 11, '../images/200914_114233_12345.png', 'Sạc Anker PowerPort III Nano PD 20W A2633 - Công nghệ sạc nhanh với công xuất 20W mạnh mẽ Bạn là ngư', 988, 2, 1);

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
  ADD KEY `fk_masp` (`ma_sp`),
  ADD KEY `fk_madonhang` (`ma_donhang`);

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
  ADD KEY `fk1_ma_loai` (`ma_loai`),
  ADD KEY `fk_mahang` (`ma_hang`);

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
  MODIFY `ma_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sp` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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
  ADD CONSTRAINT `fk_madonhang` FOREIGN KEY (`ma_donhang`) REFERENCES `donhang` (`ma_donhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_masp` FOREIGN KEY (`ma_sp`) REFERENCES `sanpham` (`ma_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk2_ma_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk1_ma_loai` FOREIGN KEY (`ma_loai`) REFERENCES `catalogs` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mahang` FOREIGN KEY (`ma_hang`) REFERENCES `hang` (`ma_hang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
