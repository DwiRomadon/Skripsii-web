-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2019 at 06:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_desktop_spk_ratih`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_keamanan`
--

CREATE TABLE `t_keamanan` (
  `id_keamanan` int(11) NOT NULL,
  `kode_klausal` varchar(25) NOT NULL,
  `kode_keamanan` varchar(25) NOT NULL,
  `keamanan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_keamanan`
--

INSERT INTO `t_keamanan` (`id_keamanan`, `kode_klausal`, `kode_keamanan`, `keamanan`, `created_at`, `updated_at`) VALUES
(1, 'A.5', 'A.5.1', 'Arah manajemen untuk informasi keamanan', '2019-02-12 05:38:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_klausal`
--

CREATE TABLE `t_klausal` (
  `id_klausal` int(11) NOT NULL,
  `kode_klausal` varchar(25) NOT NULL,
  `klausal` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_klausal`
--

INSERT INTO `t_klausal` (`id_klausal`, `kode_klausal`, `klausal`, `created_at`, `updated_at`) VALUES
(1, 'A.5', 'Kebijakan Keamanan Informasi', '2019-02-11 22:37:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_kuisioner`
--

CREATE TABLE `t_kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `kode_klausal` varchar(25) NOT NULL,
  `kode_keamanan` varchar(25) NOT NULL,
  `kode_tujuan` varchar(25) NOT NULL,
  `kuisioner` varchar(255) NOT NULL,
  `jawaban` enum('A','B','C','D','E') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kuisioner`
--

INSERT INTO `t_kuisioner` (`id_kuisioner`, `kode_klausal`, `kode_keamanan`, `kode_tujuan`, `kuisioner`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'A.5', 'A.5.1', 'A.5.1.1', 'Apakah ayu cantik ?', 'A', '2019-02-12 05:41:23', NULL),
(2, 'A.5', 'A.5.1', 'A.5.1.2', 'Apakah ayu cerdas ?', 'B', '2019-02-12 05:41:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_tujuan`
--

CREATE TABLE `t_tujuan` (
  `id_tujuan` int(11) NOT NULL,
  `kode_klausal` varchar(25) NOT NULL,
  `kode_keamanan` varchar(25) NOT NULL,
  `kode_tujuan` varchar(25) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tujuan`
--

INSERT INTO `t_tujuan` (`id_tujuan`, `kode_klausal`, `kode_keamanan`, `kode_tujuan`, `tujuan`, `created_at`, `updated_at`) VALUES
(1, 'A.5', 'A.5.1', 'A.5.1.1', 'Kebijakan untuk Keamanan informasi', '2019-02-12 05:39:20', NULL),
(2, 'A.5', 'A.5.1', 'A.5.1.2', 'Tinjauan Kebijakan Untuk Informasi Keamanan', '2019-02-12 05:40:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id_user`, `name`, `username`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Juli Suprapto', 'julisoep', 'juli@mail.com', 'qwerty12345', '2', '2019-01-08 10:28:21', '2018-12-29 08:35:04'),
(2, 'Adi Permana', 'adipermana', 'adi@mail.com', 'qwerty12345', '2', '2019-01-08 10:28:10', '2018-12-29 10:03:39'),
(3, 'Ajeng Ayu Wulandari', 'ajengayuwulandari', 'ajeng@mail.com', 'qwerty12345', '2', '2019-01-08 10:28:14', '2018-12-29 10:05:05'),
(4, 'Administrator', 'admin', 'admin@spk.com', '85064efb60a9601805dcea56ec5402f7', '1', '2019-02-11 03:17:56', '2019-01-08 10:29:29'),
(5, 'Tri Rinaldi', 'tririnaldi', 'tri@user.com', 'qwerty12345', '2', '2019-01-08 13:26:09', '2019-01-08 13:26:09'),
(6, 'Dwi R', 'dwir4', 'dwiramadhan25@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', '2', '2019-02-10 21:16:03', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_keamanan`
--
ALTER TABLE `t_keamanan`
  ADD PRIMARY KEY (`id_keamanan`);

--
-- Indexes for table `t_klausal`
--
ALTER TABLE `t_klausal`
  ADD PRIMARY KEY (`id_klausal`);

--
-- Indexes for table `t_kuisioner`
--
ALTER TABLE `t_kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `t_tujuan`
--
ALTER TABLE `t_tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_keamanan`
--
ALTER TABLE `t_keamanan`
  MODIFY `id_keamanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_klausal`
--
ALTER TABLE `t_klausal`
  MODIFY `id_klausal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_kuisioner`
--
ALTER TABLE `t_kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_tujuan`
--
ALTER TABLE `t_tujuan`
  MODIFY `id_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
