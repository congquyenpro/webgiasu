-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 30, 2022 lúc 04:16 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_gia_su`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `user_id`, `type`, `title`, `image`, `description`, `content`, `created_at`) VALUES
(16, 1, 1, 'Trung tâm gia sư uy tín', 'Tài khoản admin1656598299.png', 'Giới thiệu trung tâm gia sư uy tín', '<p>Danh s&aacute;ch trung t&acirc;m gia sư uy t&iacute;n :</p>\r\n<p>1. gia sư abc</p>\r\n<p>2. gia sư cde</p>', '2022-06-30 14:11:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `client`
--

INSERT INTO `client` (`id`, `name`, `gender`, `email`, `phone`, `address`, `type`) VALUES
(3, 'Phạm Đức Hòa', 1, 'Hoacute12345@gmail.com', '0921321231', 'Thôn yên sở xã vĩnh long', 0),
(4, 'Phạm Thi Trang', 0, 'trang123@gmail.com', '0913243542', 'Thôn Cây đa xã cây liễu', 0),
(5, 'Hà Thị Quý', 0, 'huyenlinh301202nkc@gmail.com', '01233435344', 'Yên Sở Hà Nội', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `instructor`
--

CREATE TABLE `instructor` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `avatar` varchar(50) NOT NULL DEFAULT 'avatar.jpg',
  `school_level` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `instructor`
--

INSERT INTO `instructor` (`id`, `name`, `email`, `phone_number`, `gender`, `avatar`, `school_level`, `subject`, `address`, `description`, `password`) VALUES
(10, 'Nguyễn Vũ Linh Chi', 'Linhchi123@gmail.com', '0396396396', 2, 'Nguyễn Vũ Linh Chi1653318875.jpg', NULL, NULL, 'Mai Dịch, Cầu Giấy, Hà Nội', 'Em là Sinh Viên Năm 3 Đại học quốc gia', '$2y$10$yWqCmJfLcj0EMwGpHKU7C.SJZbJebYe79gWwoRsLavMDC4ZWHPhbS'),
(16, 'Nguyễn Linh Nhi', 'congphamtienthanh@gmail.com', '0396396396', 2, 'Nguyễn Linh Nhi1653414724.jpg', 'Đại học Vinh', 'Ngoại Ngữ', 'Thôn Yên Nghĩa Hà Đong Hà Nội', 'Tôi là một sinh viên chăm chỉ học giỏi', '$2y$10$CtqsbuIuuZWibaVSPyC2Q.GIw5GQTulTspkHdKbvn0h37fGbC.uAe'),
(17, 'công', 'congphanh@gmail.com', '0396396396', 1, 'công1653485279.jpg', NULL, NULL, 'yên xá', 'Tôi học code', '$2y$10$vAltpxbG.KrOtv3ShmGHxuyM78zB2TW20buiQOCIPoO00vTIqlUUG'),
(18, 'Quyền gia sư', 'quyengs@gmail.com', NULL, NULL, 'avatar.jpg', NULL, NULL, NULL, NULL, '$2y$10$OHnjd1RGPmlf01/B5so2vOzAMPjSfmdrzPrSEbn4un3rOIf2lDi26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_class`
--

CREATE TABLE `post_class` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `subject_id` tinyint(4) NOT NULL,
  `lever` tinyint(4) NOT NULL,
  `location` varchar(250) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `day_in_week` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `post_class`
--

INSERT INTO `post_class` (`id`, `user_id`, `subject_id`, `lever`, `location`, `gender`, `day_in_week`, `description`, `price`, `created_at`, `status`) VALUES
(1, 1, 6, 9, 'Thôn yên xá, Hà Đông, Hà Nội', 0, 3, 'Học sinh đang học lớp 12, chuẩn bị thi Đại Học. Học sinh còn hổng nhiều kiến thức lớp 12, đạt khoảng 5 điểm\r\nHọc sinh có mục tiêu đạt từ 7 điểm Toán khi thi Đại Học', 100000, '2022-05-24 16:40:09', 2),
(2, 1, 6, 6, 'Thôn cây đa, Xã yên phong, hà tây, hà nội', 1, 4, 'Học Sinh chưa có gốc tiếng anh \r\nCần người xây từ gốc\r\nGiá cả ko thương lượng', 300000, '2022-05-24 16:53:55', 1),
(3, 1, 2, 12, 'Mai Dịnh, Cầu Giấy Hà Nội', 2, 2, 'Học sinh nam đang học lớp 12\r\nCần học sinh có trình độ dạy \r\nHọc Sinh mất gốc ', 250000, '2022-05-24 17:35:39', 1),
(4, 1, 6, 10, 'Yên Nghĩa, Hà Tây, Hà Nội', 2, 4, 'Học Sinh lớp 10 cần ôn thi\r\nyc: có kiến thức', 100000, '2022-05-24 17:49:59', 1),
(5, 2, 9, 14, 'Yên Xá', 0, 5, 'Mình muốn học code', 100000, '2022-05-25 13:26:56', 1),
(6, 1, 1, 12, 'Vũ xá', 0, 2, 'Học đại học', 100000, '2022-05-26 18:51:29', 1),
(7, 1, 3, 10, 'Thông hà đông', 1, 3, 'Lớp học vỡ lòng', 20000, '2022-06-23 18:08:30', 1),
(8, 1, 1, 9, 'Thanh xuân hà nội', 0, 1, 'Môn này khó', 350000, '2022-06-24 00:00:43', 1),
(9, 1, 1, 1, '', 0, 1, '', 0, '2022-06-29 02:51:28', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Toán'),
(2, 'Văn'),
(3, 'Vật Lý'),
(4, 'Hóa Học'),
(6, 'Ngoại Ngữ'),
(7, 'Lịch Sử'),
(8, 'Địa Lý'),
(9, 'Các môn năng khiêu'),
(10, 'Các môn khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `avatar` varchar(50) NOT NULL DEFAULT 'avatar.jpg',
  `address` varchar(250) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone_number`, `gender`, `avatar`, `address`, `password`) VALUES
(1, 'Tài khoản admin', 'admin@gmail.com', '0362070851', 1, 'Tài khoản admin1656030016.jpg', 'Hai Bà Trưng', '$2y$10$GSEWsOgmEgLHNbgC0vshq.pov/I1KMJkkGTN17pZATIbPNrbxEfba'),
(2, 'cong pham', 'lehoang123@gmail.com', '0396396396', 1, 'avatar.jpg', 'Yên Xá', '$2y$10$GSEWsOgmEgLHNbgC0vshq.pov/I1KMJkkGTN17pZATIbPNrbxEfba');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `post_class`
--
ALTER TABLE `post_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `post_class`
--
ALTER TABLE `post_class`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `post_class`
--
ALTER TABLE `post_class`
  ADD CONSTRAINT `post_class_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `post_class_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
