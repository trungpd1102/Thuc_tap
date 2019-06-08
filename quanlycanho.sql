-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2019 lúc 03:51 PM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlycanho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuecanho`
--

CREATE TABLE `thuecanho` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Loainha` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Loaiphong` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Phongngu` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Phongtam` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Mota` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Gia` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `Anh` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thuecanho`
--
ALTER TABLE `thuecanho`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thuecanho`
--
ALTER TABLE `thuecanho`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
