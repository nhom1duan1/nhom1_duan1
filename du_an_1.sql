-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
<<<<<<< HEAD
-- Thời gian đã tạo: Th12 06, 2020 lúc 11:44 AM
=======
-- Thời gian đã tạo: Th12 06, 2020 lúc 11:24 AM
>>>>>>> 72c5fb6823d3678d56668a00aea5625f6362b0db
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

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ma_binhluan`, `ma_kh`, `ma_sp`, `thoigian`, `noi_dung`) VALUES
(1, 7, 14, '2020-12-06 11:19:05', 'Pin sạc dự phòng Aukey PB-XN20 – Pin dự phòng dung lượng lớn cùng công nghệ AiPower tân tiến\r\nThương hiệu Aukey là một trong những cái tên nổi tiếng về các sản phẩm phụ kiện chất lượng cao. Các sản ph');

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
  `mo_ta` mediumtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
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
(13, 1, 'Iphone 12 Pro Max', '6500', '6300', 1, '../images/photo_2020-10-13_22-12-24.jpg_1_2.png', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là iPhone 12 Pro Max, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.', 852, 2, 0),
(14, 1, 'Iphone 12 mini', '4999', '4500', 1, '../images/iphone-12-mini-blue-select-2020_2.png', 'Điện thoại iPhone 12 mini chính hãng (VN/A) - Phiên bản nhỏ gọn của \"siêu phẩm\" nhà Táo\r\nTrong số những thiết bị flagship ra mắt trong năm 2020, bạn sẽ không thể bỏ qua điện thoại iPhone 12 mini 256GB chính hãng (VN/A) - vốn thuộc một trong bốn mẫu iPhone được Apple ra mắt vừa qua. Mang cấu hình cải tiến vượt trội kèm khả năng kết nối mạng 5G và gói gọn trong thân hình vừa vặn tay cầm, iPhone 12 mini sẽ là chiếc smartphone cao cấp được săn đón nhất.', 666, 2, 1),
(16, 1, 'Iphone 12 Pro', '5000', '4666', 1, '../images/photo_2020-10-13_22-12-24.jpg_1.png', 'Điện thoại iPhone 12 Pro - Đột phá về thiết kế, hiệu năng nâng cấp\r\nRa mắt vào cuối năm 2020, iPhone 12 series mang đến một luồng gió với trong phân khúc smartphone cao cấp. Với thiết kế đổi mới đột phá so với thế hệ trước cùng nhiều nâng cấp về hiệu năng đáng kể trên iPhone 12 Pro. Đây sẽ là một trong những chiếc điện thoại đáng được bạn lựa chọn nhất so với các chiếc điện thoại khác cùng phân khúc giá.', 666, 2, 0),
(17, 1, 'Samsung Galaxy Note ', '6600', '6450', 2, '../images/black_final.jpg', 'Samsung Note 20 Ultra: Thiết kế sang trọng và nhiều công nghệ cực tốt\r\nSamsung là gã khổng lồ công nghệ cực kỳ nổi tiếng đến từ đất nước Hàn Quốc, mỗi chiếc điện thoại của hãng đều mang thiết kế hiện đại, sang trọng đi kèm với đa dạng công nghệ cực kỳ nổi bật. Note 20 Ultra là một trong những chiếc smartphone nổi tiếng và đang được nhiều người quan tâm, đón nhận. Samsung hứa hẹn sẽ chiều lòng khách hàng với thiết kế lộng lẫy, cùng với vô vàng công nghệ, chip xử lý mới mẻ, thật hiện đại. Ngoài ra, bạn cũng có thể tham khảo thêm Note 20 Ultra 5G.\r\n\r\nVà nhiều khả năng cuối năm nay, Samsung sẽ cho ra mắt bộ ba smartphone thuộc dòng S mới bao gồm Galaxy S21, S21 Plus và Samsung S21 Ultra, sớm hơn so với mọi năm nhằm cạnh tranh với dòng iPhone 12 series của Apple.', 666, 2, 1),
(18, 1, 'Samsung Galaxy Z Fli', '7800', '7600', 2, '../images/z-flip-1_1.jpg', 'Điện thoại Samsung Galaxy Z Flip - Màn hình gập hiện đại, hiệu năng mạnh mẽ\r\nTrong thời đại mà công nghệ phát triển từng ngày thì ngày càng nhiều dòng smartphone đẳng cấp được ra mắt để cạnh tranh trên thị trường. Samsung chính là một trong những thương hiệu đi đầu trong việc thường xuyên cho ra mắt những dòng điện thoại thông minh với thiết kế và tính năng hiện đại. Samsung Galaxy Z Flip chính là sản phẩm tiếp theo được Samsung tung ra thị trường với những điểm đặc biệt khó có sản phẩm nào bì được sau sự thành công của Samsung Galaxy Fold.\r\n\r\nTham khảo thêm: điện thoại Samsung Galaxy Z Flip 2 sắp ra mắt', 988, 2, 1),
(19, 1, 'Samsung Galaxy Note ', '6500', '6000', 2, '../images/yellow_final_2 (1).jpg', 'Samsung Note 20 Ultra 5G : Thiết kế sang trọng và nhiều công nghệ cực tốt Samsung là gã khổng lồ cônSamsung Note 20 Ultra: Thiết kế sang trọng và nhiều công nghệ cực tốt\r\nSamsung là gã khổng lồ công nghệ cực kỳ nổi tiếng đến từ đất nước Hàn Quốc, mỗi chiếc điện thoại của hãng đều mang thiết kế hiện đại, sang trọng đi kèm với đa dạng công nghệ cực kỳ nổi bật. Note 20 Ultra là một trong những chiếc smartphone nổi tiếng và đang được nhiều người quan tâm, đón nhận. Samsung hứa hẹn sẽ chiều lòng khách hàng với thiết kế lộng lẫy, cùng với vô vàng công nghệ, chip xử lý mới mẻ, thật hiện đại. Ngoài ra, bạn cũng có thể tham khảo thêm Note 20 Ultra 5G.\r\n\r\nVà nhiều khả năng cuối năm nay, Samsung sẽ cho ra mắt bộ ba smartphone thuộc dòng S mới bao gồm Galaxy S21, S21 Plus và Samsung S21 Ultra, sớm hơn so với mọi năm nhằm cạnh tranh với dòng iPhone 12 series của Apple.', 852, 2, 1),
(20, 1, 'Oppo Find X2 Pro', '5999', '5600', 3, '../images/oppo-x2-xam_2.jpg', 'Oppo Find X2 Pro – Mẫu điện thoại mang đến xu hướng mới trong tương lai\r\nOppo Find X2 Pro cùng Oppo Find X2 là hai sản phẩm mới của Oppo trong năm nay với những nâng cấp đến từ phần cứng so với người đàn anh. Điện thoại Oppo Find X2 Pro với viền màn hình mỏng, kính cong 2.5D ở cả hai mặt, camera zoom kính tiềm vọng. Đây được xem là smartphone mang đến cho người dùng nhiều trải nghiệm mới mẻ và độc đáo.', 666, 2, 0),
(21, 1, 'Oppo Find X2', '5999', '5000', 3, '../images/637191049692122812_oppo-find-x2-xanh-1.png', 'Oppo Find X2 – Hiệu năng đỉnh cao, màn hình chiếm trọn mặt trước\r\nOppo Find X2  và Oppo Find X2 Pro là chiếc điện thoại thuộc phân khúc cao cấp vừa được Oppo ra mắt, tiếp nối sự thành công vang dội của người tiền nhiệm Oppo Find X. Đây là mẫu sản phẩm điện thoại Oppo được thừa hưởng những công nghệ mới và tốt nhất ở thời điểm hiện tại so với các đối thủ cùng phân khúc', 258, 2, 1),
(22, 1, 'Oppo A15', '5000', '4666', 3, '../images/oppo-a15.jpg', 'Oppo A15 - Sự đột phá trong thiết kế lẫn hiệu năng\r\nOppo là một trong những hãng sản xuất điện thoại và được nhiều dùng tại Việt Nam tin dùng. Thời gian vừa qua hãng ra mắt chiếc điện thoại Oppo A15 với thiết kế và cấu hình mạnh mẽ. Nếu bạn đang tìm kiếm mua mình một chiếc điện thoại thì Oppo A15 là một sự lựa chọn không thể bỏ qua.', 258, 2, 1),
(25, 2, 'Apple MacBook Pro 13', '17000', '16450', 1, '../images/mbp-silver-select-202011.jpg', 'MacBook Pro 13 Touch Bar M1 512GB 2020 mạnh mẽ, ấn tượng\r\nMacBook Pro 13 Touch Bar M1 512GB 2020 chiếc laptop được người dùng đặc biệt là những tín đồ công nghệ yêu thích và sử dụng. Với thiết kế sang trọng, cấu hình cực khủng mang đến cho người dùng những trải nghiệm vô cùng độc đáo khi làm việc, lướt web hoặc chơi game,...', 1256, 2, 1),
(26, 2, 'Apple Macbook Pro 13', '16000', '15000', 1, '../images/mbp13touch-space-select-202005.jpg', 'MacBook Pro 13 Touch Bar M1 2020 mạnh mẽ, ấn tượng\r\nMacBook Pro 13 Touch Bar M1 2020 chiếc laptop được người dùng đặc biệt là những tín đồ công nghệ yêu thích và sử dụng. Với thiết kế sang trọng, cấu hình cực khủng mang đến cho người dùng những trải nghiệm vô cùng độc đáo khi làm việc, lướt web hoặc chơi game,...', 1222, 2, 1),
(27, 2, 'Apple MacBook Air 13', '14000', '13210', 1, '../images/macbook-air-gold-select-201810_2.jpg', 'MacBook Air 13 2020 – Thiết kế nhỏ gọn, cấu hình mạnh mẽ\r\nMacbook của Apple với cấu hình mạnh luôn được người dùng chào đón. Phiên bản MacBook Air năm 2020 cũng không ngoại lệ. MacBook Air 13 2020 sở hữu thiết kế đẹp mắt cùng cấu hình cực khỏe với nhiều tính năng hấp dẫn. Chiếc laptop mỏng nhẹ, cấu hình cao này hứa hẹn sẽ mang lại những trải nghiệm ấn tượng.', 1289, 2, 1),
(28, 2, 'Laptop ASUS Gaming R', '12333', '11333', 1, '../images/laptop-asus-gaming-rog-strix-g531gt_2_.jpg', ' Laptop ASUS ROG Strix G G531GT - Trải nghiệm gaming đẳng cấp đến từ thương hiệu ROG\r\nHẳn các game thủ không còn xa lạ với thương hiệu Republic of Gamers (ROG) của hãng điện tử ASUS, với những chiếc laptop Asus gaming hầm hố cùng hiệu năng đỉnh cao. Một trong những sản phẩm đáng chú ý chính là laptop ASUS ROG Strix G G531GT, với màn hình 15.6 inch 144Hz, CPU Intel Core i7-9750H và đồ họa GTX 1650 sẽ giúp game thủ chinh phục mọi tựa game offline và online.', 1256, 2, 0),
(29, 2, 'Laptop ASUS TUF Gami', '14200', '13800', 4, '../images/fa506ii-al016t_0002_3.jpg', 'Laptop Asus FA506II-AL016T – Laptop gaming hiệu năng cao, cân xuất sắc mọi tựa game nặng\r\nNếu bạn đang cần một chiếc laptop để chơi game đầy đủ sức mạnh cũng như hiệu năng để cân mọi tựa game mà không cần phải sắm một bộ PC có kích thước lớn. Laptop Asus FA506II-AL016T sẽ là sự lựa chọn hoàn hảo dành cho bạn để có thể chơi mọi tựa game với khung hình cao cũng như hiệu năng cực kỳ ổn định và mượt mà.', 988, 2, 1),
(30, 2, 'Laptop ASUS Gaming R', '14000', '13800', 1, '../images/laptop-asus-gaming-rog-zephyrus-g14-ga401ii_1_.jpg', 'Laptop ASUS Gaming ROG Zephyrus GA401II - Cấu hình mạnh mẽ trong thiết kế gọn gàng\r\nKhông chỉ dừng lại ở các thế hệ laptop gaming đa dạng ở tầm trung, Asus còn cho ra mắt một thế hệ laptop cực kỳ mạnh mẽ đại diện cho phân khúc cao cấp. Laptop ASUS Gaming ROG Zephyrus GA401II là một trong những cái tên đáng được bạn cân nhắc trong quá trình sử dụng.', 988, 2, 0),
(31, 2, 'Laptop MSI Gaming GF', '15000', '14220', 5, '../images/laptop-msi-gaming-gf65-thin-10ser-622vn_2_.jpg', 'Laptop MSI Gaming GF65 THIN 10SER-622VN – Kiểu dáng mỏng, gọn, cấu hình vượt trội\r\nNgày nay những chiếc laptop gaming được ưa chuộng sử dụng rất nhiều, không chỉ những game thủ mà còn những người cần một chiếc laptop mạnh mẽ đáp ứng khả năng hoạt động với hiệu suất cao. Việc tiếp cận những chiếc laptop gaming sẽ không còn là khoảng cách xa nữa với sự ra đời của laptop MSI Gaming GF65 THIN 10SER-622VN.', 852, 2, 1),
(32, 2, 'Laptop MSI Prestige ', '16666', '15000', 5, '../images/laptop-msi-prestige-15-a10sc-222vn_1_.jpg', 'Laptop MSI Prestige 15 A10SC-222VN – Laptop gọn nhẹ, hiệu năng cao\r\nTiêu chí chọn mua laptop hiện nay của người người đó là nhỏ gọn – cấu hình cao. Nhưng không phải laptop nào cũng có thể đáp ứng tốt cả hai tiêu chí trên khi laptop gaming cấu hình cao lại có thiết kế khá đồ sộ hay laptop văn phòng nhỏ gọn thì không đáp ứng được cấu hình. Vậy thì MSI Prestige 15 A10SC-222VN sẽ là laptop bạn cần biết khi có thể đáp ứng tốt cả hai tiêu chí trên.', 1256, 2, 1),
(33, 2, 'Laptop MSI Gaming GF', '14500', '13800', 5, '../images/laptop-msi-prestige-15-a10sc-222vn_1_.jpg', 'Laptop MSI Gaming GF65 THIN 10SDR-623VN - Mạnh mẽ không chỉ vẻ ngoài\r\nBạn là một người năng động và muốn tìm kiếm cho mình một chiếc laptop để phù hợp với nhu cầu chơi game giải trí, làm việc. Laptop MSI Gaming GF65 THIN 10SDR-623VN là một sự lựa chọn chính xác nhất trong tầm giá về chất lượng hiệu năng mạnh mẽ lẫn vẻ ngoài cá tính riêng biệt.', 988, 2, 0),
(34, 4, 'Máy tính AIO ASUS V2', '14000', '13000', 4, '../images/may-tinh-all-in-one-asus-v222fak_2_.jpg', 'Core i3-10110U/4GB/512GB PCIE/21.5 FHD/WIN 10/ĐEN', 258, 2, 1),
(35, 4, 'PC ASUS ExpertCenter', '14000', '13000', 4, '../images/may-tinh-dong-bo-asus-d500ma_2__2_1.jpg', 'Core i7-10700/8GB/256GB PCIE/BÀN PHÍM/FREE OS', 333, 2, 1),
(36, 7, 'Chuột máy tính gamin', '1300', '1000', 6, '../images/unnamed (2).jpg', '- Chuột chơi game không dây LightSpeed G604  15 chế độ điều khiển có thể lập trình\r\nTùy biến, tinh chỉnh các phím và dành được chiến thắng. Thể hiện khả năng của bạn trong những trò chơi như Battle Royale, MMO và MOBA với những nút điều khiển được đặt ở vị trí thuận lợi cùng với số lượng cấu hình được tối ưu. Sắp xếp và tinh chỉnh những tổ hợp phím hoàn hảo.', 258, 2, 1),
(37, 7, 'Chuột gaming không d', '1200', '900', 6, '../images/unnamed (3).jpg', 'Giới thiệu sản phẩm chuột chơi game Logitech G703 LIGHTSPEED Wireless\r\n \r\n\r\nĐâu là cái tên đi đầu trong công cuộc chinh phục thành công các game thủ bằng chuột chơi game không dây? Nhất định không phải là ai khác ngoài nhà sản xuất Logitech. Với sản phẩm chuột chơi game Logitech G703 LIGHTSPEED Wireless, thương hiệu Logitech một lần nữa đã dùng sức sáng tạo không giới hạn của mình để chứng minh rằng: với sức mạnh công nghệ, không gì là không thể. Hãy cùng Tekshop tìm hiểu xem, rốt cuộc ở chuột chơi game Logitech G703 LIGHTSPEED Wireless có bí mật gì đặc biệt? Tại sao em chuột chơi game này lại có sức hấp dẫn với các game thủ đến vậy? Logitech đã làm gì để khắc phục các nhược điểm cố hữu của chuột chơi game không dây? Câu trả lời sẽ có ngay sau đây.', 666, 2, 1),
(38, 7, 'Chuột gaming Logitec', '1400', '1200', 6, '../images/unnamed (4).jpg', 'Giới thiệu sản phẩm chuột chơi game Logitech G502 HERO-Trong những năm gần đây, ngành công nghiệp game nói chung phát triển rất mạnh mẽ trên toàn thế giới. Kéo theo đó là sự chạy đua của các thương hiệu lớn trên thế giới như Razer, SteelSeries, Corsair… trong việc sản xuất và phát triển tất cả những gì xoay quanh nền công nghiệp triệu đô này như laptop/PC gaming, linh kiện máy tính và gaming gear. Thành lập vào năm 1981 tại Thụy Sĩ, Logitech nhanh chóng chiếm được chỗ đứng trong lòng các game thủ từ nghiệp dư tới chuyên nghiệp trên toàn thế giới với những sản phẩm được chú trọng cao về chất lượng và mang những thiết kế đặc trưng đến từ NSX, trong đó có thể kể đến Logitech G502,  Gaming Mouse thành công nhất của hãng.                                            ', 852, 2, 1),
(39, 7, 'Logitech G502 Hero', '1100', '999', 6, '../images/unnamed (5).jpg', 'Chuột chơi Game có dây Logitech G502 Hero - Bản nâng cấp hoàn hảo dành cho game thủ\r\nLogitech nhà sản xuất phụ kiện dành cho máy tính nổi tiếng trên thế giới vừa cho ra mắt dòng phụ kiện chuột chơi Game có dây Logitech G502 Hero. Với nhiều tối ưu hóa nâng cấp đặc biệt dành cho chơi game, sản phẩm dần chiếm được sự yêu thích của nhiều người dùng.', 852, 2, 1),
(40, 7, 'Corsair-9315011', '1500', '1400', 7, '../images/unnamed (6).jpg', 'Thông tin cơ bản về sản phẩm Chuột Corsair Dark Core RGB:\r\n\r\nNhà sản xuất: Corsair ( là một công ty phần cứng và thiết bị ngoại vi máy tính của Mỹ có trụ sở tại Fremont, California . Công ty được thành lập vào năm 1994, chuyên thiết kế và sản xuất linh kiện máy tính. Ngoài ra còn có 1 cơ sở sản xuất đặt tại Đài Loan để phân phối chính ở châu Á, châu Âu)\r\nModel: Dark Core RGB\r\nĐộ phân giải quang học: 16000 dpi\r\nCách kết nối: Sử dụng cổng usb\r\nĐộ dài dây/khoảng cách kết nối: không dây(chuẩn Bluetooth 1ms) và có dây\r\nKích thước chuột: 126,8 x 89,2 x 43,2 mm\r\nTrọng lượng: 128 gr', 666, 2, 0),
<<<<<<< HEAD
(41, 7, 'Chuột gaming CorSAIR', '1450', '1530', 7, '../images/unnamed (7).jpg', 'Tổng quan Chuột gaming Corsair Ironclaw\r\nCorsair là một thương hiệu không còn xa lạ gì với những game thủ trong thời điểm hiện tại. Với những sản phẩm chất lượng và giá cả hợp lý. Chuột gaming Corsair Ironclaw cũng là một trong những sản phẩm chất lượng với thiết kế gọn nhẹ chỉ 105g kèm theo đó là các đường vân 2 bên giúp cho khả năng cầm nắm được chắc chắn hơn.', 562, 2, 1),
=======
(41, 7, 'Chuột gaming CorSAIR', '1450', '1530', 7, '../images/unnamed (7).jpg', 'Tổng quan Chuột gaming Corsair Ironclaw Corsair là một thương hiệu không còn xa lạ gì với những game', 562, 2, 1),
>>>>>>> 72c5fb6823d3678d56668a00aea5625f6362b0db
(42, 7, 'Chuột gaming CORSAIR', '1350', '1250', 7, '../images/unnamed (8).jpg', 'Đánh giá sản phẩm Chuột máy tính Corsair Glaive RGB Aluminum (Đen)\r\nGIỚI THIỆU SẢN PHẨM\r\nChuột máy tính Corsair Glaive RGB Aluminum (Đen) là chuột chơi game được thiết kế với hình dạng đường viền mở rộng với bộ cảm biến chơi game quang 16000 DPI có độ chính xác cao và đảm bảo hiệu suất tối đa.', 658, 2, 1),
(43, 7, 'Razer Viper', '1680', '1500', 8, '../images/unnamed (9).jpg', 'Giới thiệu Chuột có dây Razer Viper (RZ01-02550100-R3M1)\r\nKiểm soát kết quả của bất kỳ trận chiến nào với chuột chơi game kết hợp độ chính xác cao, thân máy nhẹ tiên tiến và hoạt động nhanh nhất trong chơi game. Gặp gỡ Razer Viper, với công nghệ chuột hàng đầu trong ngành được thiết kế và thử nghiệm bởi các vận động viên Team Razer, mang đến cho bạn một con chuột được lai tạo để xé tan cảnh chuyên nghiệp.', 365, 2, 1),
(44, 7, 'Razer Viper Ultimate', '1800', '1650', 8, '../images/unnamed (10).jpg', 'Chuột máy tính gaming Razer Viper Mini (RZ01-03250100-R3M1)\r\nTrải nghiệm hiệu suất mạnh mẽ với con chuột nhẹ nhất từng được tạo ra của chúng tôi — một cấu trúc siêu nhẹ, gọn gàng giúp điều khiển dễ dàng. Có công tắc chuột quang tiên tiến, cảm biến 8.500 DPI chính xác và Cáp Razer Speedflex cho độ chính xác và tốc độ cao nhất.', 658, 2, 1),
(45, 7, 'Chuột gaming Razer ', '1660', '1430', 8, '../images/unnamed (11).jpg', 'Chuột máy tính Razer Mamba Elite (RZ01-02560100-R3M1)\r\nLà một phiên bản nâng cấp đặc biệt cho thế hệ chuột Razer Mamba trước đây vốn nhận được rất nhiều sự hưởng ứng từ cộng đồng game thủ, Razer Mamba Elite là “vũ khí” đích thực cho những tay chơi khao khát chiến thắng trong thế giới ảo. Mọi chức năng đặc sắc được gói gọn trong thiết kế công thái học quen thuộc sẽ mang lại cảm giác “bình mới rượu cũ” cho mỗi cú nhấn chuột.', 658, 2, 1),
(46, 7, 'Logitech G Pro X', '1850', '1650', 6, '../images/unnamed (12).jpg', 'Chất liệu tốt, hiện đại\r\nBàn phím Logitech G Pro X được thiết kế với khung được làm từ chất liệu chắc chắn, bền bỉ, mượt mà. Cùng với các keycap được làm từ nhựa cao cấp đảm bảo tuổi thọ lâu dài cho thiết bị, không bị mờ phím sau thời gian dài.\r\n\r\nThiết kế TKL\r\nBàn phím cơ Gaming Logitech G Pro X được thiết kế theo kiểu dáng bàn phím TKL, kiểu dáng nhỏ gọn tiện lợi giúp bạn có thể dễ dàng di chuyển bàn phím đi mọi nơi.', 666, 2, 1),
(47, 7, 'Logitech Gaming G512', '1760', '1670', 6, '../images/unnamed (13).jpg', 'Đánh giá Bàn phím Logitech Gaming G512 \r\nVẬT LIỆU CAO CẤP\r\nHiệu suất cao. Thiết kế tiên tiến\r\nG512 là bàn phím chơi game có hiệu suất cao với tốc độ báo cáo 1ms cùng lựa chọn phím Romer-G Tactile hoặc Linear. Đèn nền RGB tối ưu với công nghệ LIGHTSYNC đưa trải nghiệm chiếu sáng trò chơi lên tầm cao mới. Hợp kim nhôm tạo nên chiếc khung sắc nét với kim loại đẹp mắt.', 458, 2, 1),
<<<<<<< HEAD
(48, 7, 'Bàn phím + Chuột Log', '1111', '999', 6, '../images/unnamed (14).jpg', 'Trong khoảng thời gian gần đây, cùng với sự phát triển mạnh của phong trào Esport (điện tử thể thao) ta không thể không nhắc tới Gaming Gear nổi lên mạnh mẽ và cải tiến không ngừng. Đó là một xu hướng tất yếu bởi số đông game thủ đều thích sự hầm hố, cá tính. Bởi lẽ đó một bộ bàn phím, chuột và tai nghe thiết kế, bố cục dành cho gamer sẽ nâng tầm thưởng thức và trải nghiệm lên rất nhiều, đồng thời cũng khiến hình thức cả bộ máy tăng lên đáng kể.\r\nNhưng nói đến gaming gear là nói đến những bộ bàn phím cơ cực kỳ đắt tiền kèm theo con chuột giá thành cũng chat không kém. Vậy nên đâu phải ai cũng có khả năng sắm cho mình một bộ gaming gear hằng mơ ước, mà đại đa số game thủ đều là học sinh, sinh viên, chi phí tiêu pha hạn hẹp đâu thể bỏ ra mấy triệu để thỏa đam mê? Do đó một combo của Logitech, với chuột ngon+bàn phím tốt với mức giá rất phải chăng, cũng có thể làm hài lòng đại đa số game thủ không chuyên rồi. Hơn thế nữa nếu không được sử dụng cho mục đích chơi game, thì combo Bàn phím+Chuột máy tính Logitech MK120 giá rẻ này cũng có thể làm tốt nhiệm vụ văn phòng, hay cho công việc học tập.', 258, 2, 1),
=======
(48, 7, 'Bàn phím + Chuột Log', '1111', '999', 6, '../images/unnamed (14).jpg', 'Đánh giá Bàn phím+Chuột máy tính Logitech MK120 Sơ lược sản phẩm Trong khoảng thời gian gần đây', 258, 2, 1),
>>>>>>> 72c5fb6823d3678d56668a00aea5625f6362b0db
(49, 7, 'Bàn phím cơ CORSAI', '1900', '1777', 7, '../images/unnamed (15).jpg', 'Giới thiệu Bàn phím Corsair K70 MK.2 Low Profile MX Speed RGB\r\nBàn phím Corsair K70 MK.2 Low Profile MX Speed RGB được thiết kế và sản xuất bởi hãng Corsair - 1 công ty tại Mỹ chuyên thiết kế, sản xuất các bàn phím, chuột, tai nghe và ghế gaming, đang được ưa chuộng bởi các game thủ Việt hiện nay do thiết kế hiện đại, bắt mắt với giá thành hợp lý.', 988, 2, 1),
(50, 7, 'Bàn phím Corsair K', '1780', '1680', 7, '../images/unnamed (16).jpg', 'Corsair K68 - bàn phím cơ CherryMX chống nước đầu tiên trên thế giới.\r\nTiếp nối thành công của K63, tại tiển lãm Computex 2017 vừa qua, thương hiệu linh kiện điện tử Corsair đã cho ra mắt dòng sản phẩm mới của mình là K68 – loại bàn phím cơ dành cho các game thủ. Mặc dù có nhiều ưu điểm nổi bật về chất lượng, đặc biệt là khả năng chống bụi và nước, Corsair K68 vẫn nằm trong danh mục những mẫu bàn phím cơ với mức giá phải chăng.', 258, 2, 1),
(51, 7, 'Corsair K63 Wireless', '1860', '1680', 7, '../images/unnamed (17).jpg', 'Bàn phím cơ Corsair K63 Wireless Blue MX Red\r\nLà loại bàn phím cơ không dây với layout tenkeless (lược bỏ phần numpad) gọn gàng, cùng với khối lượng chỉ 1,09kg, chúng ta có thể hiểu khá rõ ràng ý đồ thiết kế Corsair K63 Wireless là phục vụ tiện lợi tối đa cho nhu cầu di động. Tất nhiên, khác với thiết kế của một bàn phím có dây truyền thống, Corsair K63 Wireless có thêm 2 đèn báo nguồn và sóng không dây, bên cạnh đèn capslock và scroll-lock.', 985, 2, 1),
(52, 7, 'Bàn phím cơ Razer ', '1760', '1670', 8, '../images/unnamed (18).jpg', 'Đánh giá Bàn phím cơ Razer BlackWidow Lite\r\nLÀM MỌI VIỆC SUÔN SẺ HƠN\r\nChúng ta dành khoảng 1/3 cuộc đời để làm việc. Đặc biệt đối với những người làm việc với máy tính thì thực sự đã đến lúc xem xét lại các công cụ bạn sử dụng hàng ngày. Sản phẩm được đề cập trong bài viết này của chúng tôi - bàn phím cơ Razer BlackWidow Lite. Sự kết hợp tuyệt vời giữa khả năng đáp ứng nhanh khi chơi game và thiết kế phổ thông tối ưu để vẫn trở nên tinh tế cho giới văn phòng. Các phím bấm hiệu suất cao làm việc hiệu quả cùng các bộ hãm thanh o-ring', 658, 2, 1),
<<<<<<< HEAD
(53, 7, 'Bàn phím cơ Razer ', '199', '1888', 8, '../images/unnamed (19).jpg', 'Đánh giá chi tiết về Bàn phím cơ Razer Huntsman Elite (RZ03-01870100-R3M1) – Mang đến cho các game thủ trải nghiệm gaming vượt trội với sản phẩm của thương hiệu gaming nổi tiếng với các game thủ Razer.\r\nBàn phím cơ Razer Huntsman Elite (RZ03-01870100-R3M1) đươc thiết kế và sản xuất bởi hãng Razer ( cách điệu là RΛZΞR) – là một công ty nổi tiếng với các game thủ chuyên về thiết kế, phát triển và phân phối các thiết bị dành cho game thủ như PC, laptop, máy tính bảng, chuột, bàn phìm, loa, tai nghe và các thiết bị ngoại vi, phụ kiện khác. Công ty được thành lập tại Hoa Kỳ vào năm 1998', 666, 2, 1),
(54, 7, 'Bàn phím cơ gaming R', '1888', '1780', 8, '../images/unnamed (20).jpg', 'Giới thiệu bàn phím cơ Razer BlackWidow Elite – Góa phụ đen toàn mỹ\r\nSơ lược sản phẩm\r\nCó thể nói hiếm có dòng bàn phím chơi game nào có bề dày lịch sử vượt trội như Razer BlackWidow. Được ra mắt lần đầu tiên vào năm 2010 và nhanh chóng trở thành bàn phím chơi game phổ biến nhất và bán chạy nhất trên toàn thế giới, tạo dấu ấn là sự lựa chọn chính cho các vận động viên thể thao điện tử điển hình là những nhà vô địch liên minh huyền thoại nhiều năm liền SK Telecom Team1.', 988, 2, 1),
=======
(53, 7, 'Bàn phím cơ Razer ', '199', '1888', 8, '../images/unnamed (19).jpg', 'Đánh giá chi tiết về Bàn phím cơ Razer Huntsman Elite (RZ03-01870100-R3M1) – Mang đến cho các game', 666, 2, 1),
(54, 7, 'Bàn phím cơ gaming R', '1888', '1780', 8, '../images/unnamed (20).jpg', 'Giới thiệu Bàn phím cơ Gaming Razer Huntsman - Quartz Edition- RZ03-02521800-R3M1 (Hồng) Bàn phím cơ', 988, 2, 1),
>>>>>>> 72c5fb6823d3678d56668a00aea5625f6362b0db
(55, 7, 'Tai nghe Logitech', '1789', '1456', 6, '../images/unnamed (21).jpg', 'Tai Nghe Logitech G633S Lightsync 7.1 Gaming - Thưởng thức âm thanh đỉnh cao\r\nTai nghe Logitech G633S đã được cải tiến chất lượng âm thanh ở mức cao nhất. Đươc trang bị một củ củ loa thế hệ mới là với đường kính 50mm giúp tăng cường âm trường mang lại hiệu ứng âm thanh tốt hơn. Với đường kính củ loa lớn sẽ thể hiện được dải âm tần chính xác hơn, đặc biệt là âm trầm sẽ được cải thiện đáng kể.', 666, 2, 1),
(56, 7, 'Tai nghe Logitech ', '1478', '1258', 6, '../images/unnamed (22).jpg', 'Tai Nghe Logitech G331 Wired Gaming là một người em nối tiếp của các dòng tai nghe dành riêng cho game thủ khác của hàng Logitech. Vẫn hướng tới sự đơn giản, tiện dụng nhưng ấn tượng, Logitech G331 có ngoại hình vô cùng bắt mắt, cực chất và mạnh mẽ. Ngoài ra, âm thanh chất lượng từ chiếc tai nghe này phát ra cũng là một trong những điểm cộng khiến bạn phải chọn mua đấy.', 666, 2, 1),
(57, 7, 'Tai nghe Logitech G4', '1598', '1269', 6, '../images/unnamed (23).jpg', 'Tai nghe Logitech G433 7.1 Wired Surround Gaming\r\nTổng quan\r\nVới game thủ, Logitech không còn là thương hiệu xa lạ với các sản phẩm gaming gear. Các sản phẩm của Logitech có mức giá trải đều từ thấp đến cao, cùng với đó là chất lượng luôn luôn làm hài lòng người sử dụng. Có thể kể đến những sản phẩm hàng đầu của hãng như Gaming Mouse G502, Keyboard G610 hay tai nghe G633… Bên cạnh những sản phẩm cao cấp kể trên, Logitech cũng cho ra mắt những sản phẩm có giá thành thấp hơn nhưng chất lượng cùng công nghệ không hề kém cạnh. Về tai nghe, chúng ta có thể kể đến Logitech G433 hỗ trợ công nghệ âm thanh vòm 7.1 cùng màng loa âm thanh Pro-G tiên tiến. Tất cả làm nên một sản phẩm hoàn hảo cho game thủ với mức giá chỉ trên 2 triệu đồng.', 666, 2, 1),
(58, 7, 'Corsair VOID RGB', '1478', '1589', 7, '../images/unnamed (24).jpg', 'Tai nghe chơi game không dây Corsair VOID RGB ELITE USB 7.1 White (CA-9011204-AP) là dòng tai nghe có dây. Chỉ với mức giá không quá cao, bạn đã sở hữu được chiếc tai nghe khá chất lượng dành cho game thủ. Cùng khám phá xem những chiếc tai nghe này có những đặc điểm nổi bật nào.', 1256, 2, 1),
(59, 7, 'Corsair Virtuoso', '1789', '1425', 7, '../images/unnamed (25).jpg', 'Tai nghe không dây Corsair Virtuoso RGB White 7.1 Surround (CA-9011186-AP) là dòng tai nghe không dây. Chỉ với mức giá tầm 2 đến 5 triệu đồng, bạn đã sở hữu được chiếc tai nghe khá chất lượng dành cho game thủ. Cùng khám phá xem những chiếc tai nghe này có những đặc điểm nổi bật nào.', 258, 2, 1),
(60, 7, 'Tai nghe Corsair HS3', '1753', '1658', 7, '../images/unnamed (26).jpg', 'Tai nghe Corsair HS35 Stereo Carbon - CA-9011195-AP (Đen) là dòng tai nghe over-ear chuyên dùng cho game thủ. Với nhiều tính năng chống ồn cho micro, giúp bạn dễ dàng giao tiếp với đồng đội và lắng nghe những âm thanh đối thủ thông qua âm thanh được truyền tải. Chính xác đây chính là một trong những trợ thủ giúp bạn trong các trò chơi game, giải trí sau những ngày dài làm việc với mức giá khá ổn trên thị trường tai nghe.', 852, 2, 1),
(61, 7, 'Tai nghe Razer Hamme', '1456', '1234', 8, '../images/unnamed (27).jpg', 'Tai nghe Razer Hammerhead Duo - RZ12-02790200-R3M1 thuộc dòng tai nghe in-ear của hãng Razer. Kiểu dáng tuy nhỏ gọn nhưng tai nghe được trang bị công nghệ hiện đại mang lại chất âm khủng. Mang lại cho người dùng những trải nghiệm âm nhạc sống động và những âm thanh trong phim chơi game được truyển tải chi tiết hơn.', 568, 2, 1),
(62, 7, 'Tai nghe Razer Krake', '1999', '1777', 8, '../images/unnamed (28).jpg', 'Tai nghe Razer Kraken Ultimate (Black) (RZ04-03180100-R3M1) được Razer xếp vào loại tai nghe chuyên dụng dành cho các cuộc thi đấu thể thao điện tử. Với thiết kế cải tiến rất nhiều về kiểu dáng cũng như củ tai hứa hẹn mang lại cảm giác thoải mái - nhẹ nhàng khi game thủ đeo hằng vài giờ liên tục. Ngoài ra tai nghe chơi game Razer Kraken Ultimatecòn được trang bị microphone đơn hướng có khả năng lọc âm cực tốt và có thể thu gọn vào củ tai khi không sử dụng. Cùng với jack kết nối USB bạn có thể sử dụng trên nhiều thiết bị khác nhau.', 658, 2, 1),
(63, 3, 'Máy chơi game Playst', '4999', '4600', 9, '../images/unnamed (29).jpg', 'Giới thiệu máy chơi game Playstation 4 Slim 1TB Mega Pack 2\r\nPlaystation PS4 Slim 1TB Mega Pack 2 CUH-2218B MEGA2 là bộ sản phẩm chơi game PlayStation cầm tay đời mới dành cho game thủ với công nghệ đồ họa và lối chơi được nâng cao, mang đến trải nghiệm chơi game tuyệt vời. Giờ đây, việc chơi game được nâng lên một tầm cao mới và việc thống trị hoàn toàn các tựa game hạng nặng sẽ trở nên dễ dàng hơn bao giờ hết.', 852, 2, 1),
(64, 3, 'Máy chơi game Playst', '5000', '4666', 9, '../images/unnamed (30).jpg', 'Mô tả sản phẩm Đang cập nhật', 1256, 2, 1),
(65, 3, 'Máy chơi game Playst', '5500', '5000', 1, '../images/unnamed (31).jpg', 'Bộ sản phẩm bao gồm:  + Máy chơi game PlayStation 4 Pro bộ nhớ 1TB + 2 tay cầm DS4 + 1 đĩa game Fifa', 658, 2, 0),
(66, 3, 'Máy chơi game Playst', '6500', '5800', 9, '../images/unnamed (32).jpg', 'Giới thiệu máy chơi game Playstation 4 Slim 1TB Mega Pack 2\r\nPlaystation PS4 Slim 1TB Mega Pack 2 CUH-2218B MEGA2 là bộ sản phẩm chơi game PlayStation cầm tay đời mới dành cho game thủ với công nghệ đồ họa và lối chơi được nâng cao, mang đến trải nghiệm chơi game tuyệt vời. Giờ đây, việc chơi game được nâng lên một tầm cao mới và việc thống trị hoàn toàn các tựa game hạng nặng sẽ trở nên dễ dàng hơn bao giờ hết.', 658, 2, 1),
(67, 5, 'Apple Watch Series 6', '2000', '1700', 1, '../images/dodo4g.jpg', 'Apple Watch Series 6 44mm 4G viền thép dây thép - Smartwatch cao cấp phiên bản dây thép cứng cáp\r\nHỗ trợ tính năng đo nồng độ ôxy máu, đo nhịp tim và nhiều chế độ sức khỏe khác nhau, Apple Watch Series 6 44mm 4G viền thép dây thép là chiếc đồng hồ thông minh sang trọng phù hợp cho các iFan lẫn vận động viên thể thao. Sự bổ sung dây đeo bằng thép càng làm tăng thêm vẻ sang trọng cho chiếc smartwatch này.', 666, 2, 0),
(68, 5, 'Apple Watch Series 6', '2900', '2200', 1, '../images/apple-watch-series-6-44mm.jpg', 'Apple Watch Series 6 44mm 4G viền thép dây thép - Smartwatch cao cấp phiên bản dây thép cứng cáp\r\nHỗ trợ tính năng đo nồng độ ôxy máu, đo nhịp tim và nhiều chế độ sức khỏe khác nhau, Apple Watch Series 6 44mm 4G viền thép dây thép là chiếc đồng hồ thông minh sang trọng phù hợp cho các iFan lẫn vận động viên thể thao. Sự bổ sung dây đeo bằng thép càng làm tăng thêm vẻ sang trọng cho chiếc smartwatch này.', 1458, 2, 0),
(69, 5, 'Apple Watch Series 6', '2999', '2800', 1, '../images/apple-watch-series-6-44mm-4g-vien-thep-vang-day-thep_2__2_1.jpg', 'Apple Watch Series 6 44mm 4G viền thép dây thép - Smartwatch cao cấp phiên bản dây thép cứng cáp\r\nHỗ trợ tính năng đo nồng độ ôxy máu, đo nhịp tim và nhiều chế độ sức khỏe khác nhau, Apple Watch Series 6 44mm 4G viền thép dây thép là chiếc đồng hồ thông minh sang trọng phù hợp cho các iFan lẫn vận động viên thể thao. Sự bổ sung dây đeo bằng thép càng làm tăng thêm vẻ sang trọng cho chiếc smartwatch này. ', 988, 2, 0),
(70, 5, 'Apple Watch Series 6', '2555', '2333', 1, '../images/apple-watch-series-6-44mm-4g-vien-thep-day-cao-su.jpg', 'Apple Watch Series 6 44mm 4G viền thép dây thép - Smartwatch cao cấp phiên bản dây thép cứng cáp\r\nHỗ trợ tính năng đo nồng độ ôxy máu, đo nhịp tim và nhiều chế độ sức khỏe khác nhau, Apple Watch Series 6 44mm 4G viền thép dây thép là chiếc đồng hồ thông minh sang trọng phù hợp cho các iFan lẫn vận động viên thể thao. Sự bổ sung dây đeo bằng thép càng làm tăng thêm vẻ sang trọng cho chiếc smartwatch này.', 988, 2, 1),
(71, 5, 'Samsung Galaxy Watch', '2666', '2222', 2, '../images/galaxy-watch_front_silver-3119_1.jpg', 'Đánh giá đồng hồ thông minh Samsung Galaxy Watch 46mm\r\nSamsung vừa cho ra mắt mẫu đồng hồ thông minh mới tại thị trường Việt Nam với tên gọi Galaxy Watch 46mm. Đây là chiếc smartwatch với nhiều tính năng hữu ích dành cho giới trẻ. So với các phiên bản trước đây, Galaxy Watch được nâng cấp thời lượng pin, thay đổi cả thiết kế và trang bị thêm khả năng phân tích giấc ngủ.', 852, 2, 1),
(72, 5, 'Samsung Galaxy Watch', '2111', '1999', 2, '../images/1565204800_1491588_2.jpg', 'Đồng hồ thông minh Galaxy Watch Active 2: Thiết kế thời trang, giải pháp theo dõi sức khỏe tuyệt vời\r\nGalaxy Watch Active 2 là thế hệ thứ 2 của dòng đồng hồ Active đến từ Samsung. Sản phẩm là một bản nâng cấp hoàn hảo so với người tiền nhiệm khi được trang bị và cải tiến nhiều công nghệ hiện đại, phục vụ tối ưu cho nhu cầu sử dụng của người dùng. Ngoài ra bạn cũng có thể tham khảo thêm đồng hồ thông minh Samsung Galaxy Watch 3 mới nhất, sắp được lên kệ tại Cellphones. ', 852, 2, 1),
(73, 5, 'Samsung Galaxy Watch', '2233', '2000', 2, '../images/1565203894_1491579.jpg', 'Là một trong những thiết bị đeo tay phổ biến, Galaxy Watch đã dần trở thành người bạn đồng hành không thể thiếu của những tín đồ đam mê thể thao. Với phiên bản Galaxy Watch Active 2 LTE, quá trình luyện tập của bạn sẽ được nâng cấp tối đa.\r\n\r\nTrợ lý thông minh nâng cao trải nghiệm sử dụng thường ngày, kết nối mạng 4G LTE nhanh chóng\r\nTrợ lý thông minh giúp cho Samsung Watch Active 2 LTE không chỉ đơn thuần là chiếc đồng hồ thông thường. Kết nối với điện thoại Samsung Galaxy của bạn thông qua công nghệ LTE, Active 2 có thể kiểm soát camera để nâng cao trải nghiệm chụp ảnh, gửi thông báo và tin nhắn từ mạng xã hội trực tiếp lên mặt đồng hồ, và khả năng dịch ngôn ngữ nhanh chóng theo nhu cầu.', 1256, 2, 1),
<<<<<<< HEAD
(74, 5, 'Huawei Watch Fit', '2300', '2100', 10, '../images/black_9_6.jpg', 'Đồng hồ Huawei Watch Fit - Thiết kế phá cách với kiểu dáng mới\r\nHuawei Watch Fit được ra mắt vào nửa cuối năm 2020 với thiết kế phá cách hơn so với các chuẩn hình dán màn hình của các dòng đồng hồ thông minh khác. Huawei Watch Fit cũng được trang bị nhiều công nghệ cũng như tiện ích giúp ích cho sức khỏe cũng như là một món phụ kiện rất hợp với mọi lứa tuổi', 1256, 2, 1),
=======
(74, 5, 'Đồng hồ thông minh H', '2300', '2100', 10, '../images/black_9_6.jpg', 'Đồng hồ Huawei Watch Fit - Thiết kế phá cách với kiểu dáng mới\r\nHuawei Watch Fit được ra mắt vào nửa cuối năm 2020 với thiết kế phá cách hơn so với các chuẩn hình dán màn hình của các dòng đồng hồ thông minh khác. Huawei Watch Fit cũng được trang bị nhiều công nghệ cũng như tiện ích giúp ích cho sức khỏe cũng như là một món phụ kiện rất hợp với mọi lứa tuổ', 1256, 2, 1),
>>>>>>> 72c5fb6823d3678d56668a00aea5625f6362b0db
(75, 5, 'Đồng hồ thông minh H', '2800', '2600', 10, '../images/dong-ho-thong-minh-huawei-watch-gt-2-pro-main.jpg', 'Đồng hồ thông minh Huawei Watch GT 2 Pro – Phiên bản dây da sang trọng\r\nHuawei Watch GT 2 Pro là phiên bản đồng hồ thông minh mới ra mắt của Huawei với thiết kế trang trọng cùng nhiều tính năng thông minh. Ngoài ra, đồng hồ cũng có nhiều phiên bản dây deo khác nhau, trong đó nổi bật là đồng hồ thông minh Huawei Watch GT 2 Pro dây da sang trọng.', 852, 2, 1),
(76, 5, 'Huawei Watch GT', '2100', '1800', 10, '../images/jido-dong-ho-thong-minh-huawei-watch-gt-ftnb1_1.jpg', 'Huawei Watch GT – Theo dõi sức khỏe mọi lúc mọi nơi\r\nĐồng hồ thông minh đang là một trong những phụ kiện không thể thiếu đối với cuộc sống. Với thiết kế đẹp mắt, tinh tế và tính năng thông minh đồng hồ thông minh đã được nhiều người tin tưởng sử dụng. Bạn đang cần tìm mua cho mình một chiếc đồng hồ thông minh giá rẻ, chất lượng tốt thì đồng hồ thông minh Huawei Watch GT chính là sự lựa chọn hoàn hảo. Bên cạnh đó, bạn cũng có thể tham khảo thêm, đồng hồ Huawei Watch GT 2 Pro mới nhất, sắp được lên kệ trên thị trường.', 658, 2, 1),
(77, 8, 'Pin dự phòng Anker P', '1000', '960', 11, '../images/upload_36885868cf694fa797fb323b0ff26e73_grande.jpg', 'Pin dự phòng chính hãng Anker Powercore+ 26800 Power Delivery A1375 - bền bỉ, hiện đại, dung lượng khủng\r\nNhu cầu sử dụng các thiết bị di động hiện nay trong các hoạt động làm việc, học tập, giải trí ngày càng tăng cao, đòi hỏi thiết bị của bạn phải có dung lượng pin bền bỉ để có thể đáp ứng được những nhu cầu đó. Pin dự phòng là giải pháp giúp người dùng đảm bảo được nhu cầu về năng lượng cho những thiết bị di động của mình. Với dung lượng pin lớn, khả năng sạc nhanh và tính tương thích cao với nhiều thiết bị điện tử, ​pin dự phòng Anker Powercore+ 26800 Power Delivery A1375 hứa hẹn sẽ là người bạn đồng hành đắc lực của bạn.', 658, 2, 1),
(78, 8, 'Pin sạc dự phòng Ank', '1100', '980', 11, '../images/12312313124_1.jpg', 'Pin sạc dự phòng Anker PowerCore PD A1275: Pin dự phòng nhỏ gọn, dung lượng lớn\r\nNgày nay, công nghệ ngày càng phát triển nhưng lượng năng lượng pin lại không như mong muốn.Biết được điều này, Anker đã cho ra mắt một sản phẩm pin sạc dự phòng Anker PowerCore Speed 20000Mah PD A1275 với nhiều công nghệ đảm bảo sự an toàn và khả năng sạc nhanh siêu tốc.', 852, 2, 1),
(79, 8, 'Anker Powercore ', '600', '500', 11, '../images/1_8_132_5.jpg', 'Pin dự phòng chính hãng Anker PowerCore Lite 10000mAh A1232 - Thiết kế nhỏ gọn với dung lượng lớn\r\nSử dụng pin dự phòng là nhu cầu của nhiều người hiện nay và một bộ sạc di động với dung lượng pin lớn mà kích thước lại nhỏ gọn luôn là tiêu chí mà người dùng tìm kiếm. Nếu bạn đang cần một viên pin dự phòng mỏng nhẹ và dung lượng cao, Anker PowerCore Lite 10000mAh A1232 là một sự lựa chọn tối ưu cho bạn..', 1256, 2, 1),
<<<<<<< HEAD
(80, 8, 'Pin sạc dự phòng Sam', '1000', '888', 2, '../images/samsung-eb-p3300x-stribrna_ien340633.jpg', 'Pin dự phòng SamSung EB-P3300X – Dung lượng lớn, hỗ trợ sạc nhanh 25W\r\nNhằm mang lại một độ bền bỉ cùng khả năng sạc nhanh với dung lượng pin lớn. Samsung đã cho ra mắt một sản phẩm sạc dự phòng là pin dự phòng SamSung EB-P3300X 10.000 mAh sạc nhanh 25W chính hãng với nhiều công nghệ đảm bảo độ an toàn cùng khả năng sạc nhanh 25W siêu tốc.', 988, 2, 1),
=======
(80, 8, 'Pin sạc dự phòng Sam', '1000', '888', 2, '../images/samsung-eb-p3300x-stribrna_ien340633.jpg', 'Pin dự phòng SamSung EB-P3300X – Dung lượng lớn, hỗ trợ sạc nhanh 25W Nhằm mang lại một độ bền bỉ cù', 988, 2, 1),
>>>>>>> 72c5fb6823d3678d56668a00aea5625f6362b0db
(81, 8, 'Pin dự phòng Samsung', '650', '550', 2, '../images/untitled-1_2_4_2.jpg', 'Pin sạc dự phòng Samsung EB-P1100 – Thiết kế vỏ kim loại cùng công nghệ sạc nhanh Quick Charge 2.0\r\nThế giới công nghệ đang chuyển đổi từng ngày, các phụ kiện công nghệ như pin dự phòng cũng dần tăng trưởng theo sự phát triển không ngừng nghỉ của smartphone. Nếu như bạn đang tìm cho mình một sản phẩm sở hữu thiết kế phong cách và thời thượng cùng hiệu năng sạc Quick Charge 2.0 vô cùng mạnh mẽ thì chắc chắn pin dự phòng Samsung EB-P1100 10.000 mAh chính hãng sẽ là một sự lựa chọn hoàn hảo dành cho bạn.', 852, 2, 1),
(82, 8, 'Pin dự phòng AUKEY P', '890', '790', 12, '../images/upload_36885868cf694fa797fb323b0ff26e73_grande.jpg', 'Sạc dự phòng Aukey PB-XD26 26800mAh – Nạp đầy năng lượng nhanh chóng cho điện thoại\r\nDù bạn đang sử dụng bất cứ thiết bị di động nào, có dung lượng pin là bao nhiêu, pin dự phòng Aukey PB-XD26 26800mAh USB-C Quick Charge 3.0 cũng sẽ nhanh chóng nạp đầy năng lượng cho thiết bị để bạn tiếp tục quá trình làm việc và giải trí mà không phải chờ đợi lâu.', 852, 2, 1),
(83, 1, 'Pin Sạc dự phòng Auk', '750', '630', 1, '../images/16c8d3675bf642aece64aa8bd2b3442d.jpg', 'Pin sạc dự phòng Aukey PB-XN20 – Pin dự phòng dung lượng lớn cùng công nghệ AiPower tân tiến Thương hiệu Aukey là một trong những cái tên nổi tiếng về các sản phẩm phụ kiện chất lượng cao. Các sản phẩm của Aukey luôn được cập nhật các công nghệ và tiêu chuẩn tiên tiến nhất và sản xuất theo tiêu chuẩn công nghệ Đức với quy trình kiểm định chất lượng gắt gao. Và pin sạc dự phòng Aukey 20000mAh Aukey PB-XN20 là một những sản phẩm chất lượng của hãng này, hứa hẹn đáp ứng tốt mọi nhu cầu của người dùng.', 658, 2, 0),
(84, 8, 'AUKEY PB-XN10 ', '590', '245', 12, '../images/8cceb367e8ed6608cc957f94f6353d29_1.jpg', 'Pin sạc dự phòng AUKEY PB-XN10 10000 mAh USB-C – Phụ kiện sạc pin chất lượng cao\r\nVới việc nhu cầu sử dụng các thiết bị di động như smartphone, tablet ngày càng tăng trong khi thời lượng pin của chúng chưa được cải thiện đáng kể, những viên pin dự phòng trở thành phụ kiện đóng vai trò quan trọng trong quá trình sinh hoạt hàng ngày. Nếu bạn đang cần tìm mua pin dự phòng AUKEY PB-XN10 10000 mAh USB-C, hãy đến CellphoneS để được mua với mức giá hấp dẫn.', 1256, 2, 1),
(85, 8, 'Sạc Nhanh Samsung 45', '950', '650', 2, '../images/vn-travel-adapter-45w-ep-ta845xbegww-lperspectiveblack-175808099-baseformat-450x.png', 'Sạc nhanh Samsung 45W TA845 kèm cáp C to C nhỏ gọn, sạc nhanh với công suất lên đến 45W\r\nBạn đang sở hữu chiếc Samsung Galaxy Note 10 Plus, và mong muốn có được tốc độ sạc pin cho điện thoại được nhanh hơn, để đáp ứng nhu cầu sử dụng liên tục cả ngày của mình thì sạc nhanh Samsung 45W TA845 kèm cáp C to C sẽ là giải pháp vô cùng tuyệt vời để cải thiện tốc độ sạc pin lên gấp nhiều lần. Nhưng nếu bạn không sử dụng Samsung Galaxy Note 10 Plus thì bạn vẫn có thể sử dụng sạc nhanh Samsung 45W TA845 cho những thiết bị có cổng sạc Type C.', 988, 2, 1),
(86, 8, 'Sạc Samsung TA20HW', '500', '250', 2, '../images/_nh_ch_p_m_n_h_nh_2018-12-19_l_c_11.08.06.png', 'Sạc nhanh Samsung TA20HW kèm cáp Micro chính hãng\r\nĐối với nhưng người dùng điện thoại smartphone thì việc trang bị cho bản thân một cục sạc nhanh là điều rất cần thiết, đặc biệt là những người bận rộn. Sạc nhanh Samsung TA20HW chính hãng với tốc độ sạc nhanh lại an toàn cho người sử dụng sẽ là một lựa chọn tuyệt vời.', 258, 2, 1),
(87, 8, 'Sạc Anker PowerPort ', '888', '666', 11, '../images/sac-anker-poweport-speed-2-39w-qc-30-a2025.jpg', 'Củ sạc Anker PowerPort Mini 12w 2 cổng - A2620 – Tiện ích nhân đôi với 2 cổng đầu ra\r\nAnker là thương hiệu công nghệ nổi tiếng đến từ Mỹ, các sản phẩm của hãng đều được áp dụng những công nghệ mới và hiện đại tạo cho người dùng những trải nghiệm tốt nhất. Trên củ sạc Anker PowerPort Mini 12W 2 cổng - A2620 cũng không ngoại lệ khi được Anker tích hợp những đặc điểm về thiết kế, hiệu suất, tiện ích mà khó có thể gặp trên những sản phẩm của hãng khác.', 658, 2, 1),
(88, 8, 'Sạc Anker 1 Cổng 18W', '700', '499', 11, '../images/1_29a3743e8fd04722a8248351be41403c_master.png', 'Củ sạc Anker 1 cổng 18W PD A2019 – sạc nhanh 18W cùng Power Delivery tương thích cao\r\nCủ sạc là phụ kiện không thể thiếu, đóng vai trò cung cấp năng lượng cho smartphone, tablet. Sạc Anker 1 cổng 18W PD A2019 là củ sạc lý tưởng để bạn có thể sạc nhanh đầy điện thoại của bạn với khả năng tương thích nhiều thiết bị bằng cổng USB-C. Ngoài ra, sạc Anker 18W PD A2019 là sản phẩm có thể sạc nhanh công suất lến đến 18W.\r\n\r\nThiết kế sạc Anker 18W PD mang tính di động cao, hai màu cơ bản đen và trắng\r\nSạc Anker 1 cổng 18W PD được thiết kế với cấu trúc đơn giản và chắc chắn. Thiết bị có hai phiên bản màu trắng và đen trang nhã dễ dàng lựa chọn, khối lượng rất nhẹ bạn có thể mang đi bất kỳ đâu mà không gặp phải khó khăn. Sạc Anker 18W trở thành bạn đồng hành của bạn trên mọi nẻo đường.', 1256, 2, 1),
(89, 8, 'Sạc nhanh Anker Powe', '666', '500', 11, '../images/200914_114233_12345.png', 'Sạc Anker PowerPort III Nano PD 20W A2633 - Công nghệ sạc nhanh với công xuất 20W mạnh mẽ\r\nBạn là người thường xuyên sử dụng các thiết bị điện tử cả ngày dài. Vấn đề mà bạn đang gặp phải là tình trạng hay hết pin nhưng khi sạc thời gian rất lâu. Vì vậy hàng sản xuất Anker đã cho ra đời sản phẩm sạc Anker PowerPort III Nano PD 20W A2633 phù hợp nhu cầu của bạn.', 988, 2, 1);

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
  MODIFY `ma_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
