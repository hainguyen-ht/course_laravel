-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2021 lúc 05:04 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_course`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` int(11) NOT NULL DEFAULT 5000,
  `level` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `password`, `coin`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Hải Nguyễn', 'hainguyen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5000, 1, '2021-03-07 02:39:46', '2021-03-07 02:39:46'),
(2, 'Hoa Hoa', 'hoahoa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 5000, 0, '2021-03-07 02:40:12', '2021-03-07 02:40:12'),
(5, 'dd', 'fdfdf@gmail.com', '9399a9ae445a4bf74351160d670b08ae', 5000, 0, '2021-03-19 04:01:12', '2021-03-19 04:01:12'),
(6, 'Test 1', 'test1@gmail.com', '9399a9ae445a4bf74351160d670b08ae', 3650, 0, '2021-03-19 04:01:40', '2021-03-20 08:18:55'),
(7, 'Hải Tiến', 'haitien@gmail.com', '123456', 5000, 0, '2021-03-19 08:00:39', '2021-03-19 08:00:39'),
(8, 'Quang Nguyễn', 'quang123@gmail.com', '123456', 5000, 0, '2021-03-19 08:05:15', '2021-03-19 08:05:15'),
(9, 'Ninh Nguyễn', 'ninh123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3300, 0, '2021-03-19 08:06:06', '2021-03-20 02:05:57'),
(10, 'Admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2100, 1, '2021-03-19 08:13:17', '2021-03-20 02:03:10'),
(11, 'Test 2', 'test2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1400, 0, '2021-03-20 02:09:45', '2021-03-20 02:30:33'),
(12, 'Test 3', 'test3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3300, 0, '2021-03-20 02:36:58', '2021-03-20 02:57:56'),
(13, 'Test 4', 'test4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 3300, 0, '2021-03-20 03:12:02', '2021-03-20 03:16:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_status`
--

CREATE TABLE `account_status` (
  `account_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chưa kích hoạt',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(19, 'FrontEnd', 'HTML/CSS', '2021-03-17 02:22:29', '2021-03-17 02:22:29'),
(20, 'BackEnd', 'Language Tutorial', '2021-03-17 02:26:28', '2021-03-17 02:26:28'),
(21, 'Mobile App', 'Lập trình thiết bị di động', '2021-03-20 08:25:08', '2021-03-20 08:25:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL DEFAULT 100,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id`, `category_id`, `name`, `price`, `img`, `description`, `content`, `created_at`, `updated_at`) VALUES
(13, 19, 'HTML/CSS Basic', 8000, 'uploads/BGKJURTb0SktBzF9SqeJ2qxOqNoY9QHU95NJsp8t.jpg', 'HTML là một ngôn ngữ đánh dấu được thiết kế ra để tạo nên các trang web trên World Wide Web.', 'HTML (Hypertext Markup Language) là mã được dùng để xây dựng nên cấu trúc và nội dung của trang web. Ví dụ, nội dung có thể được cấu thành bởi một loạt các đoạn văn.', '2021-03-17 02:23:59', '2021-03-17 02:23:59'),
(14, 19, 'Responsive Basic', 500, 'uploads/lwzb4rl5WI50XbgGyYDxRqxEHYguRHgdO1qcCqfE.png', 'HTML (Hypertext Markup Language) là mã được dùng để xây dựng nên cấu trúc và nội dung của trang web.', 'HTML (Hypertext Markup Language) là mã được dùng để xây dựng nên cấu trúc và nội dung của trang web. Ví dụ, nội dung có thể được cấu thành bởi một loạt các đoạn văn, một danh sách liệt kê, hoặc sử dụng những hình ảnh và bảng biểu. Như tiêu đề, bài viết này sẽ cho bạn những hiểu biết căn bản về HTML và chức năng của nó.', '2021-03-17 02:25:44', '2021-03-19 09:02:38'),
(15, 20, 'PHP basic', 800, 'uploads/7ElnJH41nlmrmXeAmXaZlJKsAdGYoDEoxfuWHPwq.jpg', 'PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.', 'Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function \" echo \" to output the text \"Hello World!\" on a web page: ...', '2021-03-17 02:27:28', '2021-03-19 07:57:17'),
(16, 20, 'Lập trình BE căn bản', 400, 'uploads/wdjBOlwwZtOwzlI8J0iyoTFEXY28eekC5eUClc8m.png', 'mô tả', 'nội dung', '2021-03-19 08:10:52', '2021-03-19 08:10:52'),
(17, 20, 'Laravel tutorial', 450, 'uploads/s8ggKK2yfDHXy62dtJ1hX7PcUXDQcR8lVJ2QjJH7.png', 'Framework mạnh mẽ nhất hiện nay', 'Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling ...', '2021-03-20 06:09:35', '2021-03-20 06:09:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_reg`
--

CREATE TABLE `course_reg` (
  `account_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course_reg`
--

INSERT INTO `course_reg` (`account_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 13, '2021-03-19 07:36:45', '2021-03-19 07:36:45'),
(2, 13, '2021-03-19 14:35:58', '2021-03-19 14:35:58'),
(2, 14, '2021-03-19 14:35:58', '2021-03-19 14:35:58'),
(2, 15, '2021-03-19 14:35:58', '2021-03-19 14:35:58'),
(5, 13, '2021-03-19 14:35:58', '2021-03-19 14:35:58'),
(5, 15, '2021-03-19 14:35:58', '2021-03-19 14:35:58'),
(6, 14, '2021-03-20 08:18:42', '2021-03-20 08:18:42'),
(6, 16, '2021-03-20 08:18:55', '2021-03-20 08:18:55'),
(6, 17, '2021-03-20 08:18:47', '2021-03-20 08:18:47'),
(9, 14, '2021-03-20 02:05:36', '2021-03-20 02:05:36'),
(9, 15, '2021-03-20 02:05:57', '2021-03-20 02:05:57'),
(9, 16, '2021-03-20 02:04:25', '2021-03-20 02:04:25'),
(10, 14, '2021-03-20 01:56:40', '2021-03-20 01:56:40'),
(10, 16, '2021-03-20 02:03:10', '2021-03-20 02:03:10'),
(11, 14, '2021-03-20 02:17:15', '2021-03-20 02:17:15'),
(11, 15, '2021-03-20 02:17:33', '2021-03-20 02:17:33'),
(12, 14, '2021-03-20 02:57:14', '2021-03-20 02:57:14'),
(12, 15, '2021-03-20 02:57:38', '2021-03-20 02:57:38'),
(12, 16, '2021-03-20 02:57:56', '2021-03-20 02:57:56'),
(13, 14, '2021-03-20 03:16:44', '2021-03-20 03:16:44'),
(13, 15, '2021-03-20 03:12:18', '2021-03-20 03:12:18'),
(13, 16, '2021-03-20 03:16:34', '2021-03-20 03:16:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `account_status`
--
ALTER TABLE `account_status`
  ADD KEY `fk_account_status` (`account_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Chỉ mục cho bảng `course_reg`
--
ALTER TABLE `course_reg`
  ADD PRIMARY KEY (`account_id`,`course_id`),
  ADD KEY `fk_course` (`course_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account_status`
--
ALTER TABLE `account_status`
  ADD CONSTRAINT `fk_account_status` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `course_reg`
--
ALTER TABLE `course_reg`
  ADD CONSTRAINT `fk_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
