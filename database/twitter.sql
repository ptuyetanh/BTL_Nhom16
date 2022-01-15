-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2022 lúc 03:27 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `twitter`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `admin`, `email`, `password`) VALUES
(3, '', 'admin@gmail.com', '$2y$10$K5wkj5SEVnNM1wcwfCxojOH.6ofsvWYz6dcxCUr6y3smU4CWzr6X6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `ma_nguoidung` int(11) UNSIGNED NOT NULL,
  `tweetID` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`commentID`, `ma_nguoidung`, `tweetID`, `comment`, `commentAt`) VALUES
(76, 0, 103, 'hihh', '2022-01-15 02:58:26'),
(77, 0, 103, 'hahaa', '2022-01-15 03:02:26'),
(78, 0, 103, 'hehee', '2022-01-15 03:02:42'),
(79, 0, 101, 'hhiakskks', '2022-01-15 03:08:47'),
(80, 0, 96, 'hahaa', '2022-01-15 03:09:03'),
(81, 0, 96, 'hahaha', '2022-01-15 03:10:21'),
(82, 0, 95, 'hihi', '2022-01-15 03:10:33'),
(83, 0, 103, 'hahha', '2022-01-15 03:42:37'),
(84, 0, 103, 'hahahiiiuuyyy', '2022-01-15 09:57:48'),
(85, 0, 103, 'hằng hihii', '2022-01-15 09:58:00'),
(86, 0, 102, 'tuyết anhhhhhh', '2022-01-15 09:58:33'),
(88, 0, 107, 'xin chào', '2022-01-15 12:48:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_nguoidung`
--

CREATE TABLE `db_nguoidung` (
  `ma_nguoidung` int(11) UNSIGNED NOT NULL,
  `tendangnhap` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennguoidung` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `pofileImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pofileCover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dateofbirth` date DEFAULT NULL,
  `story` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `followers` int(11) DEFAULT NULL,
  `following` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_nguoidung`
--

INSERT INTO `db_nguoidung` (`ma_nguoidung`, `tendangnhap`, `email`, `matkhau`, `tennguoidung`, `status`, `email_verification_link`, `email_verified_at`, `pofileImage`, `pofileCover`, `Dateofbirth`, `story`, `followers`, `following`) VALUES
(83, 'phamtuyetanh04', 'phamtuyetanh2@gmail.com', '$2y$10$oYGW2BrmIEeV00cxgPGhEe.WJfMZUgvd7oqUllibj5ouoHgI4q7pm', 'Phạm Tuyết Anh', 1, '2aa56b4bc642bf37d74a0c074847a3ee3340', '2022-01-07 07:45:32', 'thứ 7 zui zer.jpg', 'rb.jpg', '2021-11-04', 'Học trường đại học thủy lợi ', NULL, NULL),
(85, 'phamtuyetanh04sư', 'btlnhom16twitter@gmail.com', '$2y$10$cVTW1ggkJ8cSbrdBgfj5SeCtT05PrC25v.xWioTWNyAps7YHKDj6K', 'hihi', 1, '3c28b48aad368e42ffc534db486bd398448', '2022-01-08 13:34:11', 'park-seo-joon-la-ai-tieu-su-su-nghiep-doi-tu-cua-nam-dien-vien-8a1fbc31.jpg', 'cat-tia-cay-nho-2.jpg', '0000-00-00', '', NULL, NULL),
(86, 'nguyenthuhang638922', 'nguyenthuhang638922@gmail.com', '$2y$10$S4Sluq2STuRedojQvb/kTO9.KJ/KwHEFECQJ0BEhWNm1Estx3mhvm', 'Nguyễn Thu Hằng', 1, '3e832be0274b2b9cc0f940ac2013ba6f4302', '2022-01-14 23:14:52', 'images4.jpg', 'sau-rieng-ri-6.jpg', '0000-00-00', '', NULL, NULL),
(87, 'lanhuong', 'phamlanhuong946@gmail.com', '$2y$10$e02YG4SxKYs3bJjhVt2Sxe0QKDXJiGlRA5Io32uA2BIq8Mu.8xOie', 'Lan Hương', 1, '42cd49a5b73c0060379b73d36944c3783651', '2022-01-14 23:19:10', '6.jpg', 'b.jpg', '0000-00-00', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `follow`
--

CREATE TABLE `follow` (
  `follower` int(11) NOT NULL,
  `following` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `ma_nguoidung` int(11) UNSIGNED NOT NULL,
  `tweetID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `ID_notification` int(11) NOT NULL,
  `tweetID` int(11) NOT NULL,
  `notificationFrom` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `stype` enum('like','comment','retweet','follow','message') COLLATE utf8mb4_unicode_ci NOT NULL,
  `notificationOn` datetime NOT NULL,
  `notificationCount` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `retweet`
--

CREATE TABLE `retweet` (
  `id_retweet` int(11) NOT NULL,
  `ma_nguoidung` int(11) UNSIGNED DEFAULT NULL,
  `retweetForm` int(11) DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tweetOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tweet`
--

CREATE TABLE `tweet` (
  `tweetID` int(11) NOT NULL,
  `content_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_nguoidung` int(11) UNSIGNED NOT NULL,
  `postedOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tweet`
--

INSERT INTO `tweet` (`tweetID`, `content_status`, `ma_nguoidung`, `postedOn`) VALUES
(26, 'hihi', 83, '2022-01-09 23:30:53'),
(95, 'hahaaa', 83, '2022-01-14 20:01:54'),
(96, 'cơm thiu quá', 83, '2022-01-14 20:21:47'),
(101, 'haha', 83, '2022-01-15 00:06:54'),
(102, 'hhsdbfbbbvkdsfbfcc', 83, '2022-01-15 00:26:33'),
(103, 'hahaha', 83, '2022-01-15 02:18:32'),
(106, 'hello', 87, '2022-01-15 12:31:55'),
(107, 'hi', 87, '2022-01-15 12:48:19');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `tweetID` (`tweetID`),
  ADD KEY `ma_nguoidung` (`ma_nguoidung`);

--
-- Chỉ mục cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  ADD PRIMARY KEY (`ma_nguoidung`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_foreign_follower` (`followers`);

--
-- Chỉ mục cho bảng `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`follower`,`following`);

--
-- Chỉ mục cho bảng `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `fk_foreign_like1` (`ma_nguoidung`),
  ADD KEY `fk_foreign_like2` (`tweetID`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`ID_notification`),
  ADD KEY `fk_foreign_notification` (`tweetID`);

--
-- Chỉ mục cho bảng `retweet`
--
ALTER TABLE `retweet`
  ADD PRIMARY KEY (`id_retweet`),
  ADD KEY `fk_foreign_retweet` (`ma_nguoidung`);

--
-- Chỉ mục cho bảng `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`tweetID`),
  ADD KEY `fk_foreign_tweet` (`ma_nguoidung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  MODIFY `ma_nguoidung` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `ID_notification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tweet`
--
ALTER TABLE `tweet`
  MODIFY `tweetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`tweetID`) REFERENCES `tweet` (`tweetID`);

--
-- Các ràng buộc cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  ADD CONSTRAINT `fk_foreign_follower` FOREIGN KEY (`followers`) REFERENCES `follow` (`follower`);

--
-- Các ràng buộc cho bảng `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `fk_foreign_like1` FOREIGN KEY (`ma_nguoidung`) REFERENCES `db_nguoidung` (`ma_nguoidung`),
  ADD CONSTRAINT `fk_foreign_like2` FOREIGN KEY (`tweetID`) REFERENCES `tweet` (`tweetID`);

--
-- Các ràng buộc cho bảng `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_foreign_notification` FOREIGN KEY (`tweetID`) REFERENCES `tweet` (`tweetID`);

--
-- Các ràng buộc cho bảng `retweet`
--
ALTER TABLE `retweet`
  ADD CONSTRAINT `fk_foreign_retweet` FOREIGN KEY (`ma_nguoidung`) REFERENCES `db_nguoidung` (`ma_nguoidung`);

--
-- Các ràng buộc cho bảng `tweet`
--
ALTER TABLE `tweet`
  ADD CONSTRAINT `fk_foreign_tweet` FOREIGN KEY (`ma_nguoidung`) REFERENCES `db_nguoidung` (`ma_nguoidung`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
