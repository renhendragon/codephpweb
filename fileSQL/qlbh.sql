-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2022 lúc 01:14 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `ID` int(11) NOT NULL,
  `MaHang` int(100) NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennguoinhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`ID`, `MaHang`, `diachi`, `tennguoinhan`, `sdt`, `tinhtrang`) VALUES
(2, 1, '91/24', 'Thanh Duyên', '0123456789', 1),
(3, 1, '40/12/1 lê anh xuân', 'Nguyễn thị Loan', '123456789', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `header`
--

CREATE TABLE `header` (
  `ID` int(11) NOT NULL,
  `hinh1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `header`
--

INSERT INTO `header` (`ID`, `hinh1`, `hinh2`, `hinh3`, `label1`, `label2`, `label3`, `text1`, `text2`, `text3`) VALUES
(2, 'ms_banner_img1.webp', 'ms_banner_img3.webp', 'ms_banner_img4.webp', 'Chúng tôi chuyên cung cấp những quyển sách', 'Chúng tôi chuyên cung cấp những quyển sách', 'Chúng tôi chuyên cung cấp những quyển sách', 'Với nhiều thể loại và ưu đãi hấp dẫn', 'Với nhiều thể loại và ưu đãi hấp dẫn', 'Với nhiều thể loại và ưu đãi hấp dẫn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `MaLoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`MaLoai`, `TenLoai`) VALUES
('1', 'Romance'),
('2', 'Bách hợp'),
('3', 'Phiêu Lưu & Fantasy'),
('4', 'Isekai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaHang` int(100) NOT NULL,
  `TenHang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `GiaCu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Giamoi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhphu1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhphu2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhphu3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhphu4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaHang`, `TenHang`, `Hinh`, `GiaCu`, `Giamoi`, `MaLoai`, `hinhphu1`, `hinhphu2`, `hinhphu3`, `hinhphu4`) VALUES
(1, 'Thiên sứ nhà bên quyển 3', '3_c71184a9cc0d42dd9dab2140014e882d_master.webp', ' 120.000', '90.000', '1', '3_c71184a9cc0d42dd9dab2140014e882d_master.webp', '3-post-kem-bao-ve_9058a25b56214a7f8dfeb3e5177f110b_master.webp', 'thien_su_nha_ben_-_tap_3_-_ban_pho_thong.jpg', ''),
(2, 'Thiên sứ nhà bên quyển 2', 'thien_su_nha_ben_tap_2_bia.jpg', '120.000', '90.000', '1', 'thien_su_nha_ben_tap_2_bia.jpg', '600thien-su-nha-ben_tap-2_ban-pho-thong.jpg', 'd1a98b6fdb18b6cdec56560e4c22b5c0.jfif', ''),
(3, 'Thiên sứ nhà bên quyển 1', '1_787dfe738b4e46068858c1ec8a3439fa_large.webp', '120.000', '90.000', '1', '1_787dfe738b4e46068858c1ec8a3439fa_large.webp', '251144843_3264670780462238_3697029761517657589_n.jpg', 'c1d9a484a04ec1e2638dc5c5f0f58104.jpg', ''),
(4, 'Thực sắc ( combo 2 Quyển)', 'b476155168d6a388fac7_1.jpg', '200.000', '150.000', '2', 'b476155168d6a388fac7_1.jpg', '5ffd4089763b9be7164dec3af39d4728.jfif', '0f1a571c5e3dfc77381576ae3df8a3ca.jpg', ''),
(5, 'Genshin commic', '0a8a1fb36711193e09687e7f6298a051.png', '250.000', '220.000', '3', '0a8a1fb36711193e09687e7f6298a051.png', '71UdQE-AIhS._AC_SL1500_.jpg', 'tải xuống.jfif', ''),
(6, 'Diệt slime suốt 300 năm tôi levelmax lúc nào chẳng hay', '84c3d8e1066e46747eb3c495e25667cc.jpg', '100.000', '85.000', '4', '84c3d8e1066e46747eb3c495e25667cc.jpg', 'jmLBV9LrAF1XWXhb8sJH_simg_de2fe0_500x500_maxb.jpg', 'upload_d29367a0f91e4ce1a220530c8eca882a_master.webp', ''),
(7, 'Nổi phiền muộn của ma cà rồng  Kobayashi Kotei - Riichu - Hikikomari Kyuuketsuki no Monmon', 'FE1YS6RWYAceDT8 (1).jpg', '400,000', '375,000', '2', 'FE1YS6RWYAceDT8 (1).jpg', '1186647.jpg', '1113713.jpg', ''),
(8, 'Thám tử đã chết quyển 4 ', '8b24adfc04a3423ca8c4858688c15b84.jpg', '190,000', '170,000', '1', '8b24adfc04a3423ca8c4858688c15b84.jpg', 'Tham-tu-da-chet-3-bia-ao.jpg', '849f24edb1b4533e0d3c68e94705d605.jfif', ''),
(9, 'Mondaiji-tachi ga Isekai Kara Kuru Sou Desu yo?', 'Last_Embryo_Cover_3.jpg', '190,000', '130,000', '1', 'Last_Embryo_Cover_3.jpg', 'Mondaiji-tachi_ga_isekai_kara_kuru_soudesu_yo_Cover_12.jpg', 'tải xuống (1).jfif', 'tải xuống (2).jfif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '123456', 'Nguyễn Huỳnh Thảo Nguyên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaHang`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `header`
--
ALTER TABLE `header`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
