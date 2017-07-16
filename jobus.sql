-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 04:11 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
`id_lowongan` int(11) NOT NULL,
  `id_pekerja` int(11) NOT NULL,
  `id_postingan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pekerja`
--

CREATE TABLE IF NOT EXISTS `pekerja` (
`id_pekerja` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profile` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `sosmed` varchar(255) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `keahlian` varchar(255) DEFAULT NULL,
  `foto_pengenal` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerja`
--

INSERT INTO `pekerja` (`id_pekerja`, `username`, `email`, `no_hp`, `password`, `foto_profile`, `nama`, `sosmed`, `provinsi`, `kota`, `kecamatan`, `alamat`, `keahlian`, `foto_pengenal`, `tanggal`) VALUES
(2, 'a', 'wahyuadepratam4@gmail.com', '0813121231212', '0cc175b9c0f1b6a831c399e269772661', '', 'ubah nama', '@blablabla', 'Sumatera Barat', 'Padang', 'Padang Utara', 'jdafadfafdafaddddddddddddddfafdafdfjdaf', 'dfadfafdafda', NULL, '2017-07-14 13:58:00'),
(4, 'b', 'b', 'b', '92eb5ffee6ae2fec3ad71c777531578f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-14 13:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `pengiklan`
--

CREATE TABLE IF NOT EXISTS `pengiklan` (
`id_pengiklan` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profile` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `sosmed` varchar(255) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `koin` int(11) DEFAULT '0',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiklan`
--

INSERT INTO `pengiklan` (`id_pengiklan`, `username`, `email`, `no_hp`, `password`, `foto_profile`, `nama`, `deskripsi`, `sosmed`, `provinsi`, `kota`, `kecamatan`, `alamat`, `lokasi`, `koin`, `tanggal`) VALUES
(5, 'wahyu', 'wahyuadepratam4@gmail.com', '0813219283989', '32c9e71e866ecdbc93e497482aa6779f', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2017-07-14 06:40:53'),
(6, 'q', 'q', 'q', '7694f4a66316e53c8cdd9d9954bd611d', '', 'Coba coba bro', 'adafdadfafdafdafa', 'adfafdafdafdafdafafdafa', 'Sumatera Barat', 'Padang', 'Padang Utara', 'adfafdafdafdaf', NULL, 0, '2017-07-14 11:47:10');

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
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `id_pengiklan`, `judul`, `deskripsi`, `kategori`, `gaji`, `keterangan`, `tipe`, `pamflet`, `durasi`, `status`, `tanggal`) VALUES
(18, 6, 'q', 'q', 'a:24:{i:0;s:12:"administrasi";i:1;s:13:"karyawan toko";i:2;s:19:"marketing dan sales";i:3;s:11:"SPG dan SPB";i:4;s:9:"manajemen";i:5;s:10:"fotograger";i:6;s:28:"desain grafis dan multimedia";i:7;s:10:"penerjemah";i:8;s:9:"teknologi";i:9;s:6:"teknik";i:10;s:5:"hukum";i:11;s:9:"akuntansi";i:12;s:9:"kesehatan";i:13;s:7:"akuntan";i:14;s:10:"entri data";i:15;s:8:"pengajar";i:16;s:24:"peternakan dan pertanian";i:17;s:14:"pegawai negeri";i:18;s:21:"website dan developer";i:19;s:16:"mobile developer";i:20;s:13:"penulis lepas";i:21;s:24:"pembantu dan baby sitter";i:22;s:6:"driver";i:23;s:9:"lain-lain";}', 'w', 'w', 'kontrak', NULL, 0, 'free', '2017-07-16 13:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_pengiklan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `no_rekening` varchar(50) NOT NULL,
  `jumlah_uang` int(11) NOT NULL,
  `jumlah_koin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
 ADD PRIMARY KEY (`id_lowongan`), ADD UNIQUE KEY `id_pekerja` (`id_pekerja`,`id_postingan`), ADD KEY `id_postingan` (`id_postingan`);

--
-- Indexes for table `pekerja`
--
ALTER TABLE `pekerja`
 ADD PRIMARY KEY (`id_pekerja`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pengiklan`
--
ALTER TABLE `pengiklan`
 ADD PRIMARY KEY (`id_pengiklan`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
 ADD PRIMARY KEY (`id_postingan`), ADD KEY `id_pengiklan` (`id_pengiklan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_pengiklan` (`id_pengiklan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pekerja`
--
ALTER TABLE `pekerja`
MODIFY `id_pekerja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengiklan`
--
ALTER TABLE `pengiklan`
MODIFY `id_pengiklan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
MODIFY `id_postingan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
ADD CONSTRAINT `lowongan_ibfk_3` FOREIGN KEY (`id_pekerja`) REFERENCES `pekerja` (`id_pekerja`),
ADD CONSTRAINT `lowongan_ibfk_4` FOREIGN KEY (`id_postingan`) REFERENCES `postingan` (`id_postingan`);

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`id_pengiklan`) REFERENCES `pengiklan` (`id_pengiklan`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pengiklan`) REFERENCES `pengiklan` (`id_pengiklan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
