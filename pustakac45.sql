-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 05:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustakac45`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `No_anggota` int(30) NOT NULL,
  `Nama_anggota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`No_anggota`, `Nama_anggota`) VALUES
(1, 'ade'),
(2, 'ihza');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_pustaka`
--

CREATE TABLE `kelompok_pustaka` (
  `Id_kelompok` int(30) NOT NULL,
  `Nama_kelompok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok_pustaka`
--

INSERT INTO `kelompok_pustaka` (`Id_kelompok`, `Nama_kelompok`) VALUES
(1, 'sastra'),
(2, 'bahasa indonesia'),
(3, 'bahasa inggris');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`) VALUES
(1, 'ade', 'ihza'),
(2, 'ade', 'ihza'),
(3, 'adeihza', 'ihza123');

-- --------------------------------------------------------

--
-- Table structure for table `pustaka`
--

CREATE TABLE `pustaka` (
  `Id_pustaka` int(30) NOT NULL,
  `id_kelompok` int(30) NOT NULL,
  `judul_pustaka` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pustaka`
--

INSERT INTO `pustaka` (`Id_pustaka`, `id_kelompok`, `judul_pustaka`, `pengarang`, `tahun_terbit`) VALUES
(1, 1, 'bahasa jepang', 'goro majima', '1988'),
(2, 3, 'bahasa inggris', 'alexandra', '2001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`No_anggota`);

--
-- Indexes for table `kelompok_pustaka`
--
ALTER TABLE `kelompok_pustaka`
  ADD PRIMARY KEY (`Id_kelompok`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pustaka`
--
ALTER TABLE `pustaka`
  ADD PRIMARY KEY (`Id_pustaka`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `No_anggota` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelompok_pustaka`
--
ALTER TABLE `kelompok_pustaka`
  MODIFY `Id_kelompok` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pustaka`
--
ALTER TABLE `pustaka`
  MODIFY `Id_pustaka` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
