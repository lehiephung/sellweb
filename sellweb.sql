-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 12, 2024 lúc 03:00 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sellweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hoadon`
--

CREATE TABLE `chitiet_hoadon` (
  `id_hoadon` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`id_hoadon`, `id_sp`, `soluong`) VALUES
(7, 18, 1),
(7, 12, 1),
(7, 1, 1),
(7, 27, 1),
(8, 18, 1),
(8, 22, 1),
(9, 26, 1),
(10, 22, 2),
(10, 15, 1),
(11, 18, 1),
(11, 22, 1),
(11, 24, 2),
(44, 15, 1),
(45, 23, 1),
(46, 24, 1),
(47, 16, 1),
(48, 14, 1),
(49, 17, 1),
(50, 16, 1),
(51, 16, 1),
(52, 25, 1),
(54, 25, 1),
(54, 3, 1),
(55, 16, 1),
(56, 22, 1),
(57, 24, 1),
(57, 22, 1),
(58, 22, 1),
(59, 24, 1),
(60, 24, 1),
(61, 22, 1),
(61, 11, 1),
(61, 18, 1),
(62, 22, 3),
(62, 11, 1),
(62, 14, 1),
(62, 16, 1),
(63, 26, 1),
(63, 23, 1),
(63, 24, 1),
(64, 18, 1),
(65, 11, 1),
(65, 17, 1),
(65, 18, 1),
(66, 18, 1),
(66, 13, 1),
(66, 8, 1),
(66, 5, 1),
(67, 5, 1),
(67, 20, 1),
(67, 9, 1),
(68, 22, 1),
(69, 24, 1),
(69, 10, 1),
(69, 18, 1),
(69, 12, 1),
(69, 15, 1),
(69, 6, 1),
(70, 22, 1),
(70, 11, 1),
(70, 6, 1),
(71, 23, 1),
(71, 25, 1),
(71, 18, 1),
(72, 25, 5),
(72, 14, 3),
(72, 1, 4),
(73, 25, 1),
(73, 11, 1),
(73, 4, 8),
(74, 22, 1),
(74, 21, 5),
(75, 22, 6),
(75, 16, 4),
(76, 17, 6),
(76, 16, 2),
(75, 17, 1),
(75, 21, 4),
(75, 11, 2),
(75, 24, 1),
(75, 25, 1),
(76, 22, 1),
(77, 18, 1),
(78, 18, 5),
(78, 25, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `chuyenmuc_id` int(10) UNSIGNED NOT NULL,
  `chuyenmuc` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`chuyenmuc_id`, `chuyenmuc`, `link`) VALUES
(2, 'Quần Nam', 'thoitrangnam1.php'),
(3, 'Áo Nam', 'thoitrangnu1.php'),
(4, 'Sản Phẩm mới', ''),
(5, 'Sản Phẩm Bán Chạy', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(11) NOT NULL,
  `ngaymua` timestamp NOT NULL DEFAULT current_timestamp(),
  `hoten_nm` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `tongtien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `ngaymua`, `hoten_nm`, `diachi`, `email`, `phone`, `tongtien`) VALUES
(63, '2016-08-23 17:26:10', 'Nguyễn Ngọc Chiến', 'Tổ 4 tân thịnh thanh phố thái nguyên', 'Ngocchien@gmail.com', '0979433225', '800.000 VND'),
(64, '2016-08-23 17:27:28', 'Nguyễn Ngọc Hải', 'Trường CNTT thành phố thái nguyên', 'anhem@gmail.com', '0979408922', '360.000 VND'),
(65, '2016-08-23 17:30:51', 'Nguyễn Ngọc Chiến', 'Tổ 4 tân thịnh thanh phố thái nguyên', 'Ngocchien@gmail.com', '0979433225', '755.000 VND'),
(66, '2016-08-23 17:31:43', 'Nguyễn thị Đào', 'Tổ 6 tân thịnh thanh phố thái nguyên', 'Thuydao@gmail.com', '0977644905', '1,010.000 VND'),
(67, '2016-08-24 03:30:22', 'Nguyễn văn Hùng', 'Thành phố thái nguyên', 'Nguyenhung@gmail.com', '0987452154', '575.000 VND'),
(68, '2016-08-28 11:48:10', 'Lưu thị thao', 'Tổ 4 tân thịnh thanh phố thái nguyên', 'Ngocchien@gmail.com', '0977644905', '150.000 VND'),
(69, '2016-08-30 06:33:11', 'Trần Thị Thu', 'Quỳnh châu - Quỳnh lưu - Nghệ an', 'Tranhung@gmail.com', '0977612543', '1,520.000 VND'),
(70, '2016-08-30 09:10:05', 'Ngocchien@gmail.com', 'Quynh châu quynh lưu nghệ an', 'Tranhung@gmail.com', '0977612543', '495.000 VND'),
(71, '2016-08-30 09:12:19', 'Nguyễn Ngọc Chiến', 'Tổ 4 tân thịnh thanh phố thái nguyên', 'Ngocchien@gmail.com', '0979433225', '960.000 VND'),
(72, '2016-08-31 12:42:59', 'Nguyễn Ngọc Chiến', 'Tổ 4 tân thịnh thanh phố thái nguyên', 'Ngocchien@gmail.com', '0979433225', '2,350.000 VND'),
(73, '2016-09-01 11:03:48', 'Nguyễn Ngọc Chiến', 'Tổ 4 tân thịnh thanh phố thái nguyên', 'Ngocchien@gmail.com', '0979433225', '1,745.000 VND'),
(74, '2016-09-03 17:39:26', 'Nguyễn Văn An', 'Trường công nghệ thông tin - Thái nguyên', 'Nguyenvantuan@gmail.com', '01657842254', '950.000 VND'),
(75, '2016-09-04 18:07:14', 'Ngocchien@gmail.com', 'fdhfhf', 'Nguyenmoi@gmail.com', '01657842255', '500.000 VND'),
(76, '2016-09-04 18:09:57', 'Ngocchien@gmail.com', 'hgjgjgj', 'ForestEagle@gmail.com', '01657842255', '150.000 VND'),
(77, '2016-09-04 18:11:41', 'Nguyễn Ngọc Chiến', 'Tổ 4 tân thịnh thanh phố thái nguyên', 'Ngocchien@gmail.com', '0979433225', '360.000 VND'),
(78, '2016-09-05 16:59:05', 'Nguyễn Ngọc Chiến @@', 'Tổ 4 tân thịnh thanh phố thái nguyên', 'Ngocchien@gmail.com', '0979433225', '2,050.000 VND');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lh` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id_lh`, `time`, `hoten`, `email`, `tieude`, `noidung`) VALUES
(1, '2016-08-18 15:05:33', 'ngocchien', 'Chien@gmail.com', 'Sản phẩm tốt lắm', 'Tôi rất yêu sản phẩm ở cửa hàng bạn mong bạn sớm có những sản phẩm tốt và giá thành hợp lý xin cảm ơn shop Fanshop'),
(2, '2016-08-24 03:31:55', 'Nguyễn Ngọc Hải', 'MaribelValde@gmail.com', 'Sản phẩm ít', 'Shop còn ít quần áo mong shop phát triển thêm '),
(3, '2016-09-04 17:58:33', 'Nguyễn văn mới', 'Nguyenmoi@gmail.com', 'Mới vào', 'Mới vào');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` varchar(100) NOT NULL,
  `giacu` varchar(225) NOT NULL,
  `loaisp` varchar(100) NOT NULL,
  `hinhanh` text NOT NULL,
  `chuyenmuc_id` int(10) NOT NULL,
  `chatlieu` varchar(255) NOT NULL,
  `xuatxu` varchar(255) NOT NULL,
  `mausac` varchar(255) NOT NULL,
  `kichthuoc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `giacu`, `loaisp`, `hinhanh`, `chuyenmuc_id`, `chatlieu`, `xuatxu`, `mausac`, `kichthuoc`) VALUES
(1, 'Áo Polo Nam Tay Ngắn Dệt Họa Tiết Form Fitted ', '520.000', '620.000', 'Áo Polo', 'pd1.jpg', 3, 'Cotton 100%', 'Việt nam', 'Xanh', 'M L XL XXL'),
(2, 'Áo Khoác Jean Nam Tay Dài Xếp Ly Trơn Form Regular', '587.000', '687.000', 'Áo khoác', 'pd2.jpg', 3, 'Denim', 'Việt nam', 'Xanh Đậm', 'M L XL XXL'),
(3, 'Quần Âu Nam Ống Ôm Xếp Ly Phối Lưng Thun Trơn Form Slim', '340.000', '480.000', 'Quần âu', 'pd3.jpg', 2, 'Polyester', 'Việt nam', 'Trắng', 'M L XL XXL'),
(4, 'Quần Short Nam Nylon Túi Sau Nhãn Trang Trí Form Relax', '441.000', '520.000', 'Quần short', 'pd4.jpg', 2, 'Polyester', 'Việt nam', 'Đen', 'M L XL XXL'),
(5, 'Áo Polo Nam Tay Bo Phối Màu Form Regular', '250.000', '150.000', 'Áo polo', 'pd6.jpg', 3, 'Cotton', 'Việt nam', 'Đen', 'M L XL XXL'),
(6, 'Áo Polo Nam Cổ Khóa Kéo Phối Màu Vai Form Fitted', '569.000 ', '600.000', 'Áo Polo', 'pd7.jpg', 3, 'Cotton 100%', 'Việt nam', 'Đen', 'M L XL XXL'),
(7, 'Áo Polo Nam Interlock Pique Phối Bo Và Tay Form Regular', '520.000', '550.000', 'Áo Polo', 'pd8.jpg', 3, 'Cotton 65%', 'Việt nam', 'Trắng', 'M L XL XXL'),
(8, 'Quần Kaki Nam Texture Xếp Ly Trơn Form Slim', '540.000', '560.000', 'Quần Kaki', 'pd10.jpg', 2, 'Cotton 100%', 'Việt nam', 'INCENSE\r\n', 'M L XL XXL'),
(9, 'Quần Jean Nam Ống Rộng Lưng Thun Trơn Form Loose', '687.000', '699.000', 'Quần Jean Nam Ống Rộng', 'pd11.jpg', 2, 'Cotton 65%', 'Việt nam', 'L/INDIGO', 'M L XL XXL'),
(10, 'Quần Short Nam Nylon Rút Dây Trơn Có Túi Sau Form Relax', '441.000', '449.000', 'Quần Short Nam Nylon', 'pd12.jpg', 2, 'Cotton 65%', 'Việt nam', 'Đen', 'M L XL XXL'),
(11, 'Quần Kaki Nam Ống Rộng Premium Limited Form Wide Leg', '1.276.000', '1.350.000', 'Quần Kaki Nam', 'pd13.jpg', 2, 'Cotton', 'Việt nam', 'NATURAL LIGHT', 'M L XL XXL'),
(12, 'Áo Polo Nam Tay Bo Họa Tiết Trang Trí Form Fitted', '441.000', '450.000', 'Áo Polo Nam', 'pd14.jpg', 2, 'Cotton 100%', 'Việt nam', 'BRIGHT WHITE', 'M L XL XXL'),
(13, 'Áo Polo Nam Tay Bo Raglan Phối Màu Form Fitted', '413.000', '420.000', 'Áo Polo Nam', 'pd15.jpg', 3, 'Cotton', 'Việt nam', 'BRIGHT WHITE', 'M L XL XXL'),
(14, 'Áo Sơ Mi Nam Tay Dài Flannel Túi Đắp Kẻ Caro Form Regular', '589.000', '599.000', 'Áo Sơ Mi Nam Tay Dài', 'pd16.jpg', 3, 'Flannel', 'Việt nam', 'NAVY', 'M L XL XXL'),
(15, 'Áo Sơ Mi Nam Tay Ngắn Không Cổ Nhãn Trang Trí Form Loose', '520.000', '540.000', 'Áo Sơ Mi Nam Tay Ngắn', 'pd17.jpg', 3, 'Cotton', 'Việt nam', 'BLACK', 'M L XL XXL'),
(16, 'Áo Sơ Mi Nam Rayon Cổ Cuban Họa Tiết In Form Regular', '520.000', '540.000', 'Áo Sơ Mi Nam', 'pd18.jpg', 3, 'Rayon', 'Việt Nam', 'HARK SKIN', 'XS S M L XL XXL\r\n'),
(17, 'Áo Sơ Mi Nam Tay Dài Lai Tưa Nhãn Trang Trí Form Loose', '589.000', '599.000', 'Áo Sơ Mi Nam Tay Dài', 'pd19.jpg', 3, 'Twill', 'Việt nam', 'BLACK', 'M L XL XXL'),
(18, 'Quần Dài Nam Ống Suông Lưng Thun Trơn Form Straight Crop', '540.000', '555.000', 'Quần Dài Nam', 'pd20.jpg', 2, 'Polyester', 'Việt nam', 'OTTER', 'M L XL XXL'),
(19, 'Quần Vải Nam Form Slim Crop', '249.000', '480.000', 'Quần Vải Nam', 'pd21.jpg', 2, 'Tổng hợp', 'Việt nam', 'BLACK', 'M L XL XXL'),
(20, 'Quần Jean Nam Ống Ôm Phối Dây Kéo Lai Form Skinny Crop', '589.000', '599.000', 'Quần Jean Nam', 'pd22.jpg', 2, 'Jeans', 'Việt nam', 'M/INDIGO', 'M L XL XXL'),
(21, 'Quần Short Nam Phối Dây Rút Họa Tiết In Form Relax', '422.000', '442.000', 'Quần Short Nam', 'pd23.jpg', 2, 'Cotton', 'Việt nam', 'BLACK', 'M L XL XXL'),
(22, 'Quần Short Nam Nylon Rút Dây Trơn Có Túi Sau Form Relax', '441.000', '470.000', 'Quần Short Nam', 'pd24.jpg', 2, 'Nylon', 'Việt nam', 'BLACK', 'M L XL XXL'),
(23, 'Quần Short Jean Nam Trơn Form Straight', '471.000', '479.000', 'Quần Short Jean Nam', 'pd25.jpg', 2, 'Jeans', 'Việt nam', 'BURNT OLIVER', 'M L XL XXL'),
(24, 'Quần Short Thể Thao In Chuyển Nhiệt Form Regular', '216.000', '', 'Quần Short Thể Thao', 'pd26.jpg', 2, 'Polyester', 'Việt nam', 'BLACK', 'M L XL XXL'),
(25, 'Quần Nỉ Unisex Chun Gấu, Gân Trước Trơn Form Jogger ', '569.000 ₫\r\n', '590.000 ₫\r\n', 'Quần Nỉ Unisex Chun Gấu, Gân Trước Trơn Form Jogger ', 'pd27.jpg', 2, 'Nỉ', 'Việt nam', 'BLACK', 'M L XL XXL'),
(26, 'Quần Nỉ Jogger Unisex Ống Rộng Form Relax', '249.000', '420.000', 'Quần Nỉ Jogger Unisex', 'pd28.jpg', 2, 'Nỉ', 'Việt nam', 'GREY MELANGE', 'M L XL XXL'),
(27, 'Quần tây dài. Slim', '520.000\r\n', '550.000\r\n', 'Quần tây dài', 'pd29.jpg', 2, 'Khaki', 'Việt nam', 'BLACK', 'M L XL XXL'),
(28, 'Áo Khoác Chần Bông Nam Cổ Trụ Phối Rib Form Regular', '1.374.000', '1.500.000', 'Áo Khoác Chần Bông Nam', 'pd30.jpg', 3, 'Polyester', 'Việt nam', 'SUNFLOWER', 'M L XL XXL'),
(29, 'Áo Khoác Nam Dây Kéo Cổ Trụ Phối Màu Form Regular ', '883.000', '900.000', 'Áo Khoác Nam Dây Kéo Cổ Trụ Phối Màu Form Regular ', 'pd31.jpg', 3, 'Polyester', 'Việt nam', 'GOLD FLAME', 'M L XL XXL'),
(30, 'Áo Khoác Chần Bông Nam Sát Nách Khóa Kéo Form Regular', '785.000', '900.000', 'Áo Khoác Chần Bông Nam', 'pd32.jpg', 3, 'Polyester', 'Việt nam', 'BLACK', 'M L XL XXL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_khachhang` int(10) NOT NULL,
  `tenkhachhang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sdt` int(10) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_khachhang`, `tenkhachhang`, `email`, `password`, `diachi`, `sdt`, `role`) VALUES
(1, 'duy', 'd', '123', '123abc', 123456789, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `ho` varchar(100) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` text NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `ho`, `ten`, `mail`, `phone`, `matkhau`, `ngaysinh`, `diachi`, `gioitinh`, `level`) VALUES
(15, 'Nguyễn Ngọc', 'Chiến', 'Ngocchien@gmail.com', '0979433225', '123456', '1982-02-14', 'Tổ 4 tân thịnh thanh phố thái nguyên', '1', 1),
(16, 'Nguyễn thị', 'Đào', 'Thuydao@gmail.com', '0977644905', '123456', '1976-04-18', 'Tổ 4 tân thịnh thanh phố thái nguyên', '0', 1),
(17, 'Nguyễn văn', 'Hùng', 'Nguyenhung@gmail.com', '0987452154', '123456', '1984-07-13', 'Thành phố thái nguyên', '1', 1),
(18, 'Nguyễn ngọc ', 'chiến', 'admin', '0979433225', '123456', '1993-09-15', 'Quỳnh châu Quỳnh lưu Nghệ an', '1', 2),
(19, 'Nguyễn Ngọc ', 'Thắng', 'Chien', '0979433225', '123456', '1972-09-15', 'Quỳnh châu - Quỳnh lưu- Nghệ an ', '1', 2),
(20, 'Nguyễn văn', 'Tuấn', 'Nguyentuan@gmail.com', '01657842255', '123456', '1973-03-16', 'Trường công nghệ thông tin - Thái nguyên', '1', 1),
(21, 'nguyên văn', 'khang', 'Nguyentuan1@gmail.com', '01657842255', '123456', '1975-04-13', 'Trường công nghệ thông tin - Thái nguyên', '1', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`chuyenmuc_id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lh`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `chuyenmuc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_khachhang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
