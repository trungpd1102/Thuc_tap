-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2019 at 07:14 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlycanho`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `ID` int(8) NOT NULL,
  `Name` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `Address` varchar(40) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `Phone` int(12) NOT NULL,
  `Account` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuecanho`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thuecanho`
--
ALTER TABLE `thuecanho`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thuecanho`
--
ALTER TABLE `thuecanho`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
