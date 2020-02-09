-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2019 lúc 10:36 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaCTHD` int(10) NOT NULL,
  `MaHD` int(10) NOT NULL,
  `MaSP` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `DonGia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaCTHD`, `MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(1, 1, 10, 2250000, 2250000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(10) NOT NULL,
  `MaKH` int(10) NOT NULL,
  `NgayDat` datetime NOT NULL,
  `NoiGiao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TinhTrang` enum('Đã giao','Chưa giao','Đang giao','Đã hủy') COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `NgayDat`, `NoiGiao`, `TinhTrang`, `TongTien`) VALUES
(1, 10, '2019-05-29 11:00:31', '18 Trần Quý', 'Đang giao', 2147483647);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(10) NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `IsAdmin` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `SoDienThoai`, `DiaChi`, `Email`, `Pass`, `IsAdmin`) VALUES
(1, 'ABCXYZDz', '01657990373', '250 An Duong Vuong P.3 Q.5 TP.HCM', 'buom@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 0),
(2, 'Thach Sau Doi', '0123456789', 'Trai Cai Nghien Thanh Nien Ngao Da', 'thach@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'Nguyen ', '1234567892', 'Chu website ban hang dien tua', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(10, 's', 's', 's', 's@gmail.com', '064e64e9b16e036ea21848268892cb80', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoai` int(10) NOT NULL,
  `TenLoai` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoai`, `TenLoai`) VALUES
(1, 'AKIRA'),
(2, 'BABY'),
(3, 'EGO'),
(4, 'RAW AMBER'),
(5, '72 JAM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` int(10) NOT NULL,
  `TenNSX` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`) VALUES
(5, 'Full Face'),
(6, '3/4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(10) NOT NULL,
  `TenSP` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MaNSX` int(10) NOT NULL,
  `MaLoai` int(10) NOT NULL,
  `Hinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhQC` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MoTa` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `GiaBan` int(10) NOT NULL,
  `LuotXem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaNSX`, `MaLoai`, `Hinh`, `HinhQC`, `MoTa`, `GiaBan`, `LuotXem`) VALUES
(1, 'AKIRA ĐEN NHÁM', 5, 1, 'AKIRABLACK.jpg', 'AKIRABLACKQC.jpg', 'Với thiết kế cổ điển Được làm bằng chất liệu hiện đại là nhựa ABS siêu nhẹ, chống mài mòn tốt, lớp lót cực êm.\r\nAkira đã mang đến cho bạn 1 sự lựa chọn hoàn hảo.\r\nMàu: đen nhám, đen bóng, xanh nhám, trắng bóng.', 1350000, 46),
(2, 'AKIRA TRẮNG BÓNG', 5, 1, 'AKIRAWHITE.jpg', NULL, 'Với thiết kế cổ điển Được làm bằng chất liệu hiện đại là nhựa ABS siêu nhẹ, chống mài mòn tốt, lớp lót cực êm.\r\nAkira đã mang đến cho bạn 1 sự lựa chọn hoàn hảo.\r\nMàu: đen nhám, đen bóng, xanh nhám, trắng bóng.', 1350000, 14),
(3, 'AKIRA XANH DƯƠNG', 5, 1, 'AKIRABLUE.jpg', NULL, 'Với thiết kế cổ điển Được làm bằng chất liệu hiện đại là nhựa ABS siêu nhẹ, chống mài mòn tốt, lớp lót cực êm.\r\nAkira đã mang đến cho bạn 1 sự lựa chọn hoàn hảo.\r\nMàu: đen nhám, đen bóng, xanh nhám, trắng bóng.', 1350000, 4),
(4, 'BABY STAR ĐEN', 5, 2, 'BABYBLACK.jpg', 'BABYBLACKQC.jpg', 'TT&CO là thương hiệu nón bảo hiểm & Vintage Motocycle lâu đời ở Nhật.\r\nVới toàn bộ tâm huyết được dồn vào từng sản phẩm, các kỹ sư của TT&CO luôn cho ra đời những dòng sản phẩm cao cấp, chất lượng đạt tiêu chuẩn khắt khe của Nhật.\r\nTT&CO helmet được làm từ sợi thủy tinh, cực bền và nhẹ, nhỏ gọn, phù hợp với tạng người Đông Á.', 3450000, 96),
(5, 'BABY STAR CAM', 5, 2, 'BABYRED.jpg', NULL, 'TT&CO là thương hiệu nón bảo hiểm & Vintage Motocycle lâu đời ở Nhật.\r\nVới toàn bộ tâm huyết được dồn vào từng sản phẩm, các kỹ sư của TT&CO luôn cho ra đời những dòng sản phẩm cao cấp, chất lượng đạt tiêu chuẩn khắt khe của Nhật.\r\nTT&CO helmet được làm từ sợi thủy tinh, cực bền và nhẹ, nhỏ gọn, phù hợp với tạng người Đông Á.', 3450000, 4),
(6, 'BABY STAR TRẮNG', 5, 2, 'BABYWHITE.jpg', NULL, 'TT&CO là thương hiệu nón bảo hiểm & Vintage Motocycle lâu đời ở Nhật.\r\nVới toàn bộ tâm huyết được dồn vào từng sản phẩm, các kỹ sư của TT&CO luôn cho ra đời những dòng sản phẩm cao cấp, chất lượng đạt tiêu chuẩn khắt khe của Nhật.\r\nTT&CO helmet được làm từ sợi thủy tinh, cực bền và nhẹ, nhỏ gọn, phù hợp với tạng người Đông Á.', 3450000, 40),
(7, 'EGO EAGLE', 5, 3, 'EGO.jpg', 'EGOQC.jpg', 'Mũ được thiết kế gia công tỉ mỉ từng chi tiết nhỏ. Sử dụng chất liệu hợp chất Carbon – Aramic – Glass đảm bảo nhẹ và bền.\r\n Kiểu dáng thể thao, góc cạnh mạnh mẽ, họa tiết đơn giản nhưng dứt khoát cực chất.\r\n Vỏ bằng nhựa chất liệu cao cấp đảm bảo nhẹ và an toàn cao. Kính góc nhìn rộng và có đặc tính giảm tốc.', 1700000, 53),
(8, 'EGO KESTREL VÀNG', 5, 3, 'EGOYELLOW.jpg', NULL, 'Mũ được thiết kế gia công tỉ mỉ từng chi tiết nhỏ. Sử dụng chất liệu hợp chất Carbon – Aramic – Glass đảm bảo nhẹ và bền.\r\n Kiểu dáng thể thao, góc cạnh mạnh mẽ, họa tiết đơn giản nhưng dứt khoát cực chất.\r\n Vỏ bằng nhựa chất liệu cao cấp đảm bảo nhẹ và an toàn cao. Kính góc nhìn rộng và có đặc tính giảm tốc.', 1700000, 11),
(9, 'EGO KESTREL CAM', 5, 3, 'EGOORANGE.jpg', NULL, 'Mũ được thiết kế gia công tỉ mỉ từng chi tiết nhỏ. Sử dụng chất liệu hợp chất Carbon – Aramic – Glass đảm bảo nhẹ và bền.\r\n Kiểu dáng thể thao, góc cạnh mạnh mẽ, họa tiết đơn giản nhưng dứt khoát cực chất.\r\n Vỏ bằng nhựa chất liệu cao cấp đảm bảo nhẹ và an toàn cao. Kính góc nhìn rộng và có đặc tính giảm tốc.', 1700000, 18),
(10, 'RAW AMBER ĐEN', 5, 4, 'RAWBLACK.jpg', '', 'Là dòng nón được mong đợi nhất năm 2018, nên khi vừa ra mắt mọi người thì Amber đã dành được sự đón chào nồng nhiệt từ mọi người.', 2250000, 74),
(11, 'RAW AMBER TRẮNG', 5, 4, 'RAWWHITE.jpg', NULL, 'Là dòng nón được mong đợi nhất năm 2018, nên khi vừa ra mắt mọi người thì Amber đã dành được sự đón chào nồng nhiệt từ mọi người.', 2250000, 7),
(12, 'RAW AMBER LỤC', 5, 4, 'RAWBLUE.jpg', NULL, 'Là dòng nón được mong đợi nhất năm 2018, nên khi vừa ra mắt mọi người thì Amber đã dành được sự đón chào nồng nhiệt từ mọi người.', 2250000, 8),
(13, '72 JAM FLAMES ĐỎ', 6, 5, '72JAMRED.jpg', NULL, '72 JAM là sản phẩm của Nhật, gia công tại Việt Nam với sự chuyển giao công nghệ, hợp tác thương hiệu từ 72 JAM Nhật Bản.\r\nVỏ mũ được làm từ nhựa ABS nguyên sinh, độ bền và an toàn cao\r\nLớp mút xốp chất lượng cao, có độ mềm và êm giúp ôm chặt vòng đầu. Vải lót màu đen quen thuộc, dày và thoáng khí. Mũ 72 JAM có phần ốp tai được làm bằng chất liệu da nhân tạo nên không bị bong tróc sau 1 thời gian dài sử dụng. Lót mũ và ốp tai tháo lắp nhanh chóng, dễ dàng, khả năng thấm hút mồ hôi tốt.', 1490000, 7);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `MaHD` (`MaHD`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaKH_2` (`MaKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaNSX` (`MaNSX`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaCTHD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `MaNSX` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaLoai`) REFERENCES `loaisanpham` (`MaLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
