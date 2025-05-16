-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 02:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(50) NOT NULL,
  `nama_barang` varchar(250) DEFAULT NULL,
  `kode_barang` int(50) DEFAULT NULL,
  `stok` int(50) DEFAULT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_barang`, `kode_barang`, `stok`, `foto`) VALUES
(30, 'kapak', 90, 103, ''),
(31, 'pisau', 23, 59, ''),
(32, 'panah', 78, 46, '');

-- --------------------------------------------------------

--
-- Table structure for table `brg_keluar`
--

CREATE TABLE `brg_keluar` (
  `id_bk` int(11) NOT NULL,
  `id_brg` int(14) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg_keluar`
--

INSERT INTO `brg_keluar` (`id_bk`, `id_brg`, `jumlah`, `tanggal`) VALUES
(8, 8, 77, '2024-10-09'),
(14, 3, 23, '2024-10-04'),
(16, 14, 11, '2024-10-03'),
(17, 14, 12, '2024-10-10'),
(24, 30, 5, '2024-11-01'),
(25, 31, 12, '2024-10-24'),
(26, 32, 13, '2024-10-10');

--
-- Triggers `brg_keluar`
--
DELIMITER $$
CREATE TRIGGER `hbk` AFTER DELETE ON `brg_keluar` FOR EACH ROW UPDATE barang
SET stok=stok+old.jumlah
WHERE id_brg=old.id_brg
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tbk` AFTER INSERT ON `brg_keluar` FOR EACH ROW UPDATE barang
SET stok=stok-new.jumlah
WHERE id_brg=new.id_brg
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `brg_masuk`
--

CREATE TABLE `brg_masuk` (
  `id_bm` int(11) NOT NULL,
  `id_brg` int(14) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg_masuk`
--

INSERT INTO `brg_masuk` (`id_bm`, `id_brg`, `jumlah`, `tanggal`) VALUES
(28, 30, 12, '2024-10-11'),
(29, 31, 22, '2024-10-07'),
(30, 32, 21, '2024-10-08'),
(34, 30, 87, '2024-10-20');

--
-- Triggers `brg_masuk`
--
DELIMITER $$
CREATE TRIGGER `hbm` AFTER DELETE ON `brg_masuk` FOR EACH ROW UPDATE barang
SET stok = stok-old.jumlah
WHERE id_brg=old.id_brg
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tbm` AFTER INSERT ON `brg_masuk` FOR EACH ROW UPDATE barang
SET stok=stok+new.jumlah
WHERE id_brg=new.id_brg
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `brg_rusak`
--

CREATE TABLE `brg_rusak` (
  `id_br` int(20) NOT NULL,
  `id_brg` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg_rusak`
--

INSERT INTO `brg_rusak` (`id_br`, `id_brg`, `jumlah`, `tanggal`) VALUES
(1, 3, 25, '2024-10-24'),
(6, 2, 34, '2024-10-04'),
(9, 1, 12, '2024-10-04'),
(10, 14, 25, '2024-10-10'),
(28, 30, 2, '2024-10-18'),
(29, 31, 5, '2024-10-18'),
(30, 32, 6, '2024-10-24');

--
-- Triggers `brg_rusak`
--
DELIMITER $$
CREATE TRIGGER `hbr` AFTER DELETE ON `brg_rusak` FOR EACH ROW UPDATE barang
SET stok=stok+old.jumlah
WHERE id_brg=old.id_brg
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tbr` AFTER INSERT ON `brg_rusak` FOR EACH ROW UPDATE barang
SET stok=stok-new.jumlah
WHERE id_brg=new.id_brg
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_kry` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `NIK` int(20) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jeniskel` enum('laki-laki','perempuan') DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nohp` varchar(40) DEFAULT NULL,
  `masa_kerja` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gaji` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_kry`, `id_user`, `nama`, `NIK`, `tempat_lahir`, `tgl_lahir`, `jeniskel`, `alamat`, `nohp`, `masa_kerja`, `status`, `gaji`) VALUES
(7, 7, 'Chelsica', 7, 'Batam', '2024-12-06', '', 'Batam', '01', '1 tahun', 'tetap', 1),
(13, 20, 'derius123', 1, 'batam', '2024-10-15', '', '1', '1', '3 tahun', 'tetap', 3),
(14, 24, 'jake', 1, 'jakarta', '2024-10-14', '', '1', '1', '6 tahun', 'tetap', 6),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 0),
(38, 47, 'eeee', 12, 'batam', '2024-11-27', NULL, '2ew', '221', '1', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(12) NOT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `nis` int(12) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(80) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(7, 'chelsica@email', '1', 1),
(11, 'chichi@email', '1', 2),
(18, 'budi@email', '1', 4),
(19, 'kevin@email', '1', 5),
(20, 'derius@email123', '1', 3),
(24, 'jake@email', '1', 1),
(47, 'qeq1@qq', 'qeqq', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `brg_keluar`
--
ALTER TABLE `brg_keluar`
  ADD PRIMARY KEY (`id_bk`);

--
-- Indexes for table `brg_masuk`
--
ALTER TABLE `brg_masuk`
  ADD PRIMARY KEY (`id_bm`);

--
-- Indexes for table `brg_rusak`
--
ALTER TABLE `brg_rusak`
  ADD PRIMARY KEY (`id_br`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_kry`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `brg_keluar`
--
ALTER TABLE `brg_keluar`
  MODIFY `id_bk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `brg_masuk`
--
ALTER TABLE `brg_masuk`
  MODIFY `id_bm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `brg_rusak`
--
ALTER TABLE `brg_rusak`
  MODIFY `id_br` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_kry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
