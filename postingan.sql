-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2017 at 07:37 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobus`
--

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE IF NOT EXISTS `postingan` (
`id_postingan` int(11) NOT NULL,
  `id_pengiklan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `keterangan` text,
  `tipe` varchar(255) NOT NULL,
  `pamflet` varchar(255) DEFAULT NULL,
  `durasi` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `lat` float(10,6) DEFAULT NULL,
  `lang` float(10,6) DEFAULT NULL,
  `approved` char(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `id_pengiklan`, `judul`, `deskripsi`, `kategori`, `gaji`, `keterangan`, `tipe`, `pamflet`, `durasi`, `status`, `tanggal`, `lat`, `lang`, `approved`) VALUES
(28, 5, 'q', 'q', 'a:2:{i:0;s:12:"administrasi";i:1;s:13:"karyawan toko";}', '22', 'qq', 'kontrak', NULL, 7, 'free', '2017-07-23 05:35:38', 0.000000, 0.000000, 'belum'),
(29, 5, 'dfd', 'dfdf', 'a:2:{i:0;s:12:"administrasi";i:1;s:13:"karyawan toko";}', '321111', 'dfafa', 'kontrak', NULL, 7, 'free', '2017-07-23 05:37:27', -0.947083, 100.417183, 'belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
 ADD PRIMARY KEY (`id_postingan`), ADD KEY `id_pengiklan` (`id_pengiklan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
MODIFY `id_postingan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`id_pengiklan`) REFERENCES `pengiklan` (`id_pengiklan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
