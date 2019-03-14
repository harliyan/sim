-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 05:20 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_telecenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(50) NOT NULL,
  `kecamatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Kecamatan Pekalongan Barat'),
(2, 'Kecamatan Pekalongan Utara'),
(3, 'Kecamatan Pekalongan Timur'),
(4, 'Kecamatan Pekalongan Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ket_perangkat`
--

CREATE TABLE `tb_ket_perangkat` (
  `id_ket` int(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ket_perangkat`
--

INSERT INTO `tb_ket_perangkat` (`id_ket`, `keterangan`) VALUES
(1, 'Baik'),
(2, 'Kurang Baik'),
(5, 'Tidak Baik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_perangkat`
--

CREATE TABLE `tb_status_perangkat` (
  `id_stats` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status_perangkat`
--

INSERT INTO `tb_status_perangkat` (`id_stats`, `status`) VALUES
(1, 'layak'),
(7, 'Tidak Layak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tambahan`
--

CREATE TABLE `tb_tambahan` (
  `id` int(50) NOT NULL,
  `id_telecenter` int(50) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'photo.png',
  `foto_printer` varchar(255) NOT NULL DEFAULT 'photo.png',
  `foto_jaringan` varchar(255) NOT NULL DEFAULT 'photo.png',
  `gps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tambahan`
--

INSERT INTO `tb_tambahan` (`id`, `id_telecenter`, `foto`, `foto_printer`, `foto_jaringan`, `gps`) VALUES
(1, 1, '1', '', '', '1'),
(2, 2, '2', '', '', '2'),
(3, 3, '3', '', '', '3'),
(4, 4, '4', '', '', '4'),
(5, 5, '5', '', '', '5'),
(6, 6, '', '', '', '7'),
(7, 7, '', '', '', '1'),
(8, 8, '', '', '', '8'),
(9, 9, '', '', '', '1'),
(10, 10, 'demak11.png', '', '', '1'),
(11, 1, 'photo.png', 'photo.png', 'photo.png', ''),
(12, 1, 'photo.png', 'photo.png', 'photo.png', ''),
(13, 14, 'photo.png', 'photo.png', 'photo.png', '8'),
(14, 15, 'photo.png', 'photo.png', 'photo.png', '1'),
(15, 19, 'photo.png', 'photo.png', 'photo.png', '7'),
(16, 22, 'photo.png', 'photo.png', 'photo.png', '1'),
(17, 25, 'photo.png', 'photo.png', 'photo.png', '7'),
(18, 31, 'photo.png', 'photo.png', 'photo.png', '99999'),
(19, 32, 'broing-traditional-art-on.jpg', 'photo.png', 'photo.png', '9'),
(20, 35, 'k.PNG', 'photo.png', 'photo.png', '9'),
(21, 40, 'bango4.png', 'photo.png', 'photo.png', '9'),
(22, 41, '20582473_394245664310887_9115292144083402752_n.jpg', 'photo.png', 'photo.png', '8'),
(23, 42, 'bango5.png', 'photo.png', 'photo.png', '9'),
(24, 43, 'broing-traditional-art-on1.jpg', 'photo.png', 'photo.png', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tb_telecenter`
--

CREATE TABLE `tb_telecenter` (
  `id_telecenter` int(10) NOT NULL,
  `id_kecamatan` varchar(255) NOT NULL,
  `nama_telecenter` varchar(255) NOT NULL,
  `alamat_telecenter` varchar(255) NOT NULL,
  `nama_pengelola` varchar(255) NOT NULL,
  `alamat_pengelola` varchar(255) NOT NULL,
  `pc_status` varchar(100) NOT NULL,
  `pc_jumlah` int(50) NOT NULL,
  `printer_jumlah` int(50) NOT NULL,
  `printer_status` varchar(255) NOT NULL,
  `jaringan_jumlah` int(50) NOT NULL,
  `jaringan_status` varchar(255) NOT NULL,
  `jaringan_jenis` varchar(255) NOT NULL,
  `listrik_jumlah` int(20) NOT NULL DEFAULT '1',
  `listrik_status` varchar(255) NOT NULL,
  `jumlah_pengguna` int(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `ket_1` varchar(255) NOT NULL,
  `ket_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_telecenter`
--

INSERT INTO `tb_telecenter` (`id_telecenter`, `id_kecamatan`, `nama_telecenter`, `alamat_telecenter`, `nama_pengelola`, `alamat_pengelola`, `pc_status`, `pc_jumlah`, `printer_jumlah`, `printer_status`, `jaringan_jumlah`, `jaringan_status`, `jaringan_jenis`, `listrik_jumlah`, `listrik_status`, `jumlah_pengguna`, `posisi`, `lokasi`, `ket_1`, `ket_2`) VALUES
(1, '1', 'Ceria Net Ceria Net Ceria Net', 'jl teratai', 'Aan', 'Batang', 'layak pakai', 1, 1, 'layak pakai', 1, 'layak pakai', 'Modem', 0, 'Layak pakai', 11, 'rumah', 'sesuai', 'Tidak Baik', 'PC bermasalah'),
(2, '2', 'hdahwh', 'jhk', 'Aan', 'Batang', 'hk', 1, 1, '', 1, 'layak pakai', 'Modem', 0, 'Layak Pakai', 10, 'rumah', 'sesuai', 'Kurang Baik', 'PC'),
(3, '3', 'hjhjk', 'hkjhjkh', 'Aan', 'Batang', 'kjhjk', 3, 3, 'svves', 3, 'esve', 'evve', 0, 'vev', 3, 'fefe', 'fefe', 'fefe', 'fefef'),
(4, '4', 'addw', 'dwdw', 'Aan', 'Batang', 'dwdw', 4, 3, 'se', 44, 'vesv', 'veve', 0, 'eve', 4, 'ev', 'ev', 'veve', 'veve'),
(5, '1', 'hh', 'jhjk', 'Aan', 'Batang', 'jk', 6, 6, 'jkhjk', 6, 'jhjh', 'hkjhk', 0, 'hjkh', 6, 'hjgh', 'hjgjg', 'jhghj', 'ghj'),
(6, '2', '7', '7', '7', '7', 'layak', 7, 7, 'layak', 7, 'layak', '7', 0, 'layak', 7, '7', '7', 'Baik', '7'),
(7, '3', 'yaya', 'yaya', '1', '1', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(8, '2', 'bis', '8', '8', '8', 'layak', 8, 8, 'layak', 8, 'layak', '8', 0, 'layak', 8, '8', '8', 'Baik', '8'),
(9, '3', '1', '1', '1', '1', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(10, '4', 'COBA', 'COBA', '1', '1', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(11, '4', 'makan', '1', '1', '1', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(12, '2', '2', '2', '2', '2', 'layak', 2, 2, 'layak', 2, 'layak', '2', 0, 'layak', 2, '2', '2', 'Baik', '2'),
(13, '2', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'layak', 2, 2, 'layak', 2, 'layak', '2', 0, 'layak', 2, '2', '2', 'Baik', '2'),
(14, '2', '8', '8', '8', '8', 'layak', 8, 8, 'layak', 8, 'layak', '8', 0, 'layak', 8, '8', '8', 'Baik', '8'),
(15, '3', '12', '12', '12', '12', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(16, '2', '33', '33', '33', '33', 'layak', 3, 3, 'layak', 3, 'layak', '3', 0, 'layak', 3, '3', '3', 'Baik', '3'),
(17, '3', '1', '1', '1', '1', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(18, '4', '8', '8', '8', '8', 'layak', 8, 8, 'layak', 8, 'layak', '8', 0, 'layak', 8, '8', '8', 'Baik', '8'),
(19, '3', '7', '7', '7', '7', 'layak', 7, 7, 'layak', 7, 'layak', '7', 0, 'layak', 7, '7', '7', 'Baik', '7'),
(20, '1', 'q', 'q', 'q', 'q', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(21, '1', '1', '1', '1', '1', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(22, '1', '1', '1', '1', '1', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(23, '1', '5', '5', '5', '5', 'layak', 5, 5, 'layak', 5, 'layak', '5', 0, 'layak', 5, '5', '5', 'Baik', '5'),
(24, '2', '7878', '8878', '89', '8', 'layak', 98, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(25, '3', '7', '7', '7', '7', 'layak', 7, 7, 'layak', 7, 'layak', '7', 0, 'layak', 7, '7', '7', 'Baik', '7'),
(26, '3', 'y', 'y', 'y', 'y', 'layak', 1, 1, 'layak', 1, 'layak', '1', 0, 'layak', 1, '1', '1', 'Baik', '1'),
(27, '3', '7', '7', '7', '7', 'layak', 7, 7, 'layak', 7, 'layak', '7', 0, 'layak', 7, '7', '7', 'Baik', '7'),
(28, '3', '7', '7', '7', '7', 'layak', 7, 7, 'layak', 7, 'layak', '7', 0, 'layak', 7, '7', '7', 'Baik', '7'),
(29, '3', '7', '7', '7', '7', 'layak', 7, 7, 'layak', 7, 'layak', '7', 0, 'layak', 7, '7', '7', 'Baik', '7'),
(30, '3', '7', '7', '7', '7', 'layak', 7, 7, 'layak', 7, 'layak', '7', 0, 'layak', 7, '7', '7', 'Baik', '7'),
(31, '3', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(32, '2', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(33, '4', 'aaaa', 'yyy', 'aaa', 'yyy', 'layak', 8, 8, 'layak', 8, 'layak', '8', 0, 'layak', 8, '8', '8', 'Baik', '8'),
(34, '2', 'www', 'www', 'ww', 'ww', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(35, '3', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(36, '2', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(37, '2', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(38, '2', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(39, '2', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(40, '1', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 0, 'layak', 9, '9', '9', 'Baik', '9'),
(41, '3', '8', '8', '8', '8', 'layak', 8, 8, 'layak', 8, 'layak', '8', 1, 'layak', 8, '8', '8', 'Baik', '8'),
(42, '3', '9', '9', '9', '9', 'layak', 9, 9, 'layak', 9, 'layak', '9', 1, 'layak', 9, '9', '9', 'Baik', '9'),
(43, '3', '8', '8', '8', '8', 'layak', 8, 8, 'layak', 8, 'layak', '8', 8, 'layak', 8, '8', '8', 'Baik', '8');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL DEFAULT 'camat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `privilege`, `bagian`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin'),
(2, 'surveyor', '83499828853a9abf2027fa018ca7869cee54c4a1', 'surveyor', 'surveyor'),
(3, 'surveyor2', '386e83da5a4c0e10925686eb2cf57c39ca2e993c', 'surveyor', 'surveyor'),
(4, 'surveyor3', 'fe86763790e839b238130852507ae51390e960c6', 'surveyor', 'surveyor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_ket_perangkat`
--
ALTER TABLE `tb_ket_perangkat`
  ADD PRIMARY KEY (`id_ket`);

--
-- Indexes for table `tb_status_perangkat`
--
ALTER TABLE `tb_status_perangkat`
  ADD PRIMARY KEY (`id_stats`);

--
-- Indexes for table `tb_tambahan`
--
ALTER TABLE `tb_tambahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_telecenter` (`id_telecenter`);

--
-- Indexes for table `tb_telecenter`
--
ALTER TABLE `tb_telecenter`
  ADD PRIMARY KEY (`id_telecenter`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ket_perangkat`
--
ALTER TABLE `tb_ket_perangkat`
  MODIFY `id_ket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_status_perangkat`
--
ALTER TABLE `tb_status_perangkat`
  MODIFY `id_stats` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_tambahan`
--
ALTER TABLE `tb_tambahan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_telecenter`
--
ALTER TABLE `tb_telecenter`
  MODIFY `id_telecenter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_tambahan`
--
ALTER TABLE `tb_tambahan`
  ADD CONSTRAINT `tb_tambahan_ibfk_1` FOREIGN KEY (`id_telecenter`) REFERENCES `tb_telecenter` (`id_telecenter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
