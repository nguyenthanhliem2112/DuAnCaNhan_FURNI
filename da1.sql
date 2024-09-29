-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 29, 2024 lúc 10:30 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `ten` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `img`, `ten`) VALUES
(1, '1', 'Ghế'),
(2, 'ban10', 'Bàn'),
(3, 'ban3', 'Bộ Bàn Ghế'),
(4, 'trangtri3', 'Trang Trí'),
(5, 'phukien', 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `phuongthucthanhtoan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_user`, `code`, `ten`, `diachi`, `dienthoai`, `tongtien`, `ghichu`, `phuongthucthanhtoan`) VALUES
(52, 99, 'FRU0805202449', 'Liêm', 'Phan Rang - Tháp Chàm', '0386702227', 5400000, 'ship nhẹ thui', 'Thanh toán khi nhận hàng'),
(53, 100, 'FRU0805202453', 'Tuyên', 'Phan Rang - Tháp Chàm', '0386702227', 2150000, 'thích bom hàng', 'Thanh toán khi nhận hàng'),
(54, 102, 'FRU0807202454', 'Liêm', 'Phan Rang - Tháp Chàm', '0386702227', 960000, 'Nhẹ nhàng nha', 'Thanh toán khi nhận hàng'),
(55, 103, 'FRU0809202455', 'Thanh Liêm', 'Phan Rang - Tháp Chàm', '0689060317', 1320000, 'ship nhẹ thui', 'Thanh toán khi nhận hàng'),
(81, 105, 'FRU0813202456', 'Liêm', 'Phan Rang - Tháp Chàm', '0589060317', 1940000, 'ship nhẹ thui', 'Thanh toán khi nhận hàng'),
(82, 106, 'FRU0927202482', 'Hoàng Anh', 'Phan Rang - Tháp Chàm', '0589060317', 7760000, 'NHẸ TH', 'Thanh toán khi nhận hàng'),
(83, 107, 'FRU0928202483', 'Tuấn Lồn', 'Phan Rang - Tháp Chàm', '0589060317', 120000, 'nhẹ thui cha', 'Thanh toán khi nhận hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id_donhangchitiet` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `ngaydathang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id_donhangchitiet`, `ten`, `gia`, `soluong`, `id_sanpham`, `id_donhang`, `ngaydathang`) VALUES
(20, 'Ghế trang điểm nệm vải nhung', 5400000, 1, 37, 52, '0000-00-00'),
(21, 'Ghế trang điểm nệm vải nhung', 2150000, 1, 16, 53, '0000-00-00'),
(22, 'Ghế trang điểm nệm vải nhung', 960000, 1, 1, 54, '0000-00-00'),
(23, 'Ghế trang điểm nệm vải nhung', 1200000, 1, 26, 55, '0000-00-00'),
(24, 'Nệm ngồi bệt vải nhung', 120000, 1, 44, 55, '0000-00-00'),
(25, 'Ghế trang điểm nệm vải nhung', 960000, 1, 1, 81, '0000-00-00'),
(26, 'Ghế trang điểm nệm vải nhung', 980000, 1, 2, 81, '0000-00-00'),
(27, 'Ghế trang điểm nệm vải nhung', 960000, 1, 1, 82, '0000-00-00'),
(28, 'Bộ bàn nhà hàng outdoor', 6800000, 1, 32, 82, '0000-00-00'),
(29, 'Trang Trí đẹp nhà đón tết', 120000, 1, 40, 83, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `ma` varchar(250) NOT NULL,
  `soluong` int(100) NOT NULL,
  `daban` int(100) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `gia` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten`, `img`, `ma`, `soluong`, `daban`, `id_danhmuc`, `gia`) VALUES
(1, 'Ghế trang điểm nệm vải nhung', '1', 'FO4 FIFA', 324, 213, 1, 960000),
(2, 'Ghế trang điểm nệm vải nhung', '2', 'FA 2A-P', 14, 13, 1, 980000),
(3, 'Ghế trang điểm nệm vải nhung', '3', 'YAMA 4K-Y', 20, 27, 1, 680000),
(4, 'Ghế trang điểm nệm vải nhung', '4', 'LARA 4A-F', 324, 213, 1, 960000),
(5, 'Ghế trang điểm nệm vải nhung', '5', 'LARA 4A-F', 25, 19, 1, 840000),
(6, 'Ghế trang điểm nệm vải nhung', '6', 'LARA 4A-F', 324, 213, 1, 680000),
(7, 'Ghế trang điểm nệm vải nhung', '7', 'LARA 4A-F', 324, 213, 1, 780000),
(8, 'Ghế trang điểm nệm vải nhung', '8', 'LARA 4A-F', 324, 213, 1, 850000),
(9, 'Ghế trang điểm nệm vải nhung', '9', 'LARA 4A-F', 25, 32, 1, 780000),
(10, 'Ghế trang điểm nệm vải nhung', '10', 'LARA 4A-F', 13, 8, 1, 880000),
(11, 'Ghế trang điểm nệm vải nhung', 'ban1', 'LARA 4A-F', 15, 24, 2, 650000),
(12, 'bộ bàn ghế ăn', 'ban2', 'LARA 4A-F', 4, 2, 2, 16000000),
(13, 'Ghế trang điểm nệm vải nhung', 'ban3', 'LARA 4A-F', 324, 213, 2, 6800000),
(14, 'Bộ bàn nhà hàng outdoor', 'ban4', 'LARA 4A-F', 6, 5, 2, 7200000),
(15, 'Bộ bàn ăn gỗ nhựa 6 ghế nệm', 'ban5', 'LARA 4A-F', 12, 11, 2, 5400000),
(16, 'Bộ bàn nhà hàng outdoor', 'ban3', 'LARA 4A-F', 324, 213, 2, 2150000),
(17, 'Bộ bàn nhà hàng outdoor', 'ban7', 'LARA 4A-F', 7, 8, 2, 1500000),
(18, 'Bộ bàn nhà hàng outdoor', 'ban10', 'LARA 4A-F', 324, 213, 2, 890000),
(19, 'Bộ bàn nhà hàng outdoor', 'ban11', 'LARA 4A-F', 5, 7, 2, 120000),
(20, 'Bộ bàn nhà hàng outdoor', 'ban12', 'LARA 4A-F', 9, 12, 2, 150000),
(21, 'Bộ bàn nhà hàng outdoor', 'ban13', 'LARA 4A-F', 21, 14, 2, 120000),
(22, 'Ghế nệm vải nhung', '1', 'LARA 4A-F', 324, 213, 1, 1200000),
(23, 'Ghế trang điểm nệm vải nhung', '2', 'LARA 4A-F', 324, 213, 1, 1200000),
(24, 'Ghế trang điểm nệm vải nhung', '3', 'LARA 4A-F', 324, 213, 1, 1200000),
(25, 'Ghế trang điểm nệm vải nhung', '4', 'LARA 4A-F', 12, 14, 1, 860000),
(26, 'Ghế trang điểm nệm vải nhung', '5', 'LARA 4A-F', 0, 213, 1, 1200000),
(27, 'Ghế trang điểm nệm vải nhung', '6', 'LARA 4A-F', 324, 213, 1, 120000),
(28, 'Ghế trang điểm nệm vải nhung', '9', 'LARA 4A-F', 324, 213, 1, 170000),
(29, 'Ghế trang điểm nệm vải nhung', '8', 'LARA 4A-F', 324, 213, 1, 190000),
(30, 'Bộ bàn nhà hàng outdoor', 'ban11', 'LARA 4A-F', 324, 213, 3, 12000000),
(31, 'Ghế trang điểm nệm vải nhung', '1', 'LARA 4A-F', 324, 213, 1, 12000000),
(32, 'Bộ bàn nhà hàng outdoor', 'ban2', 'LARA 4A-F', 324, 213, 3, 6800000),
(33, 'Bộ bàn nhà hàng outdoor', 'ban3', 'LARA 4A-F', 324, 213, 3, 7200000),
(34, 'Bộ bàn nhà hàng outdoor', 'ban4', 'LARA 4A-F', 324, 213, 3, 7000000),
(35, 'Bộ bàn nhà hàng outdoor', 'ban5', 'LARA 4A-F', 324, 213, 3, 3500000),
(36, 'Bộ bàn nhà hàng outdoor', 'ban2', 'LARA 4A-F', 324, 213, 3, 6500000),
(37, 'Bộ bàn nhà hàng outdoor', 'ban7', 'LARA 4A-F', 324, 213, 3, 5400000),
(38, 'Bộ bàn nhà hàng outdoor', 'ban7', 'LARA 4A-F', 324, 213, 3, 8400000),
(39, 'Trang Trí đẹp nhà đón tết', 'trangtri1', 'LARA 4A-F', 56, 23, 4, 140000),
(40, 'Trang Trí đẹp nhà đón tết', 'trangtri2', 'LARA 4A-F', 68, 18, 4, 120000),
(41, 'Trang Trí đẹp nhà đón tết', 'trangtri3', 'LARA 4A-F', 45, 42, 4, 160000),
(42, 'Trang Trí đẹp nhà đón tết', 'trangtri4', 'LARA 4A-F', 24, 13, 4, 200000),
(43, 'Chân ghế gỗ lim', 'phukien1', 'LARA 4A-F', 32, 23, 5, 180000),
(44, 'Nệm ngồi bệt vải nhung', 'phukien', 'LARA 4A-F', 12, 35, 5, 120000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='role';

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `address`, `email`, `uname`, `pword`, `role`) VALUES
(1, '', 0, '', '', 'admin', 'admin', 1),
(99, 'Liêm', 386702227, '', 'liemntps34830@fpt.edu.vn', '', '406806', 0),
(100, 'Tuyên', 386702227, '', 'tuyenfpt@fpt.edu.vn', '', '349855', 0),
(101, 'Nguyễn Thanh Liêm', 386702227, '', 'nguyenthanhliem2112@gmail.com', 'liemanhtrai', '123344', 0),
(102, 'Liêm', 386702227, '', 'liemntps34830@fpt.edu.vn', '', '931308', 0),
(103, 'Thanh Liêm', 386702227, 'Phan Rang - Tháp Chàm', 'liemntps34830@fpt.edu.vn', '', '12334411', 0),
(104, 'Thanh Liêm', 386702227, 'Phan Rang - Tháp Chàm', 'liemntps34830@fpt.edu.vn', 'thanhliemne', '12334411', 0),
(105, 'Liêm', 589060317, '', 'liemntps34830@fpt.edu.vn', '', '219895', 0),
(106, 'Hoàng Anh', 589060317, '', 'liemntps34830@fpt.edu.vn', '', '202135', 0),
(107, 'Tuấn Lồn', 589060317, '', 'liemntps34830@fpt.edu.vn', '', '930168', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id_donhangchitiet`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id_donhangchitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `donhangchitiet_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhangchitiet_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
