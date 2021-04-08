-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 05:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_balas_komenter`
--

CREATE TABLE `tbl_balas_komenter` (
  `id_balas` int(11) NOT NULL,
  `id_komen` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komen` text NOT NULL,
  `captcha` varchar(255) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('tampil','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(200) DEFAULT NULL,
  `desk` text DEFAULT NULL,
  `berita` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `tgl_input` timestamp NULL DEFAULT current_timestamp(),
  `tgl_update` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `url_slug` varchar(255) NOT NULL,
  `tags` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `desk`, `berita`, `foto`, `tgl_input`, `tgl_update`, `url_slug`, `tags`) VALUES
(1, 'dsada', 'asddasd', 'asdasd', NULL, '2021-04-07 23:48:39', NULL, 'sadda', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komen` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komen` text NOT NULL,
  `captcha` varchar(255) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('tampil','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_balas_komenter`
--
ALTER TABLE `tbl_balas_komenter`
  ADD PRIMARY KEY (`id_balas`),
  ADD KEY `id_komen` (`id_komen`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_berita` (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_balas_komenter`
--
ALTER TABLE `tbl_balas_komenter`
  MODIFY `id_balas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_balas_komenter`
--
ALTER TABLE `tbl_balas_komenter`
  ADD CONSTRAINT `tbl_balas_komenter_ibfk_1` FOREIGN KEY (`id_komen`) REFERENCES `tbl_komentar` (`id_komen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD CONSTRAINT `tbl_komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `tbl_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
