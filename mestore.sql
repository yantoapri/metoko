-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2018 at 06:21 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `balasan`
--

CREATE TABLE `balasan` (
  `id` int(11) NOT NULL,
  `id_komen` int(11) DEFAULT NULL,
  `balasan` varchar(1000) DEFAULT NULL,
  `time_balas` timestamp NULL DEFAULT NULL,
  `id_us` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `keterangan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `keterangan`) VALUES
(1, 'Marketing', 'Katgeori ddfdffdd');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_pos` int(11) DEFAULT NULL,
  `id_us` int(11) DEFAULT NULL,
  `komentar` varchar(1000) DEFAULT NULL,
  `time_komen` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_kat` int(11) DEFAULT NULL,
  `produk` varchar(225) DEFAULT NULL,
  `img` varchar(225) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `file` varchar(225) DEFAULT NULL,
  `web_link` varchar(225) DEFAULT NULL,
  `keterangan` text,
  `view` int(11) DEFAULT '0',
  `download` int(11) DEFAULT '0',
  `like` int(11) DEFAULT '0',
  `tgl_simpan` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_kat`, `produk`, `img`, `harga`, `file`, `web_link`, `keterangan`, `view`, `download`, `like`, `tgl_simpan`) VALUES
(1, 1, 'asfsdgsfg', NULL, '35456', NULL, NULL, NULL, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_daftar` timestamp NULL DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balasan`
--
ALTER TABLE `balasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balasan`
--
ALTER TABLE `balasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
